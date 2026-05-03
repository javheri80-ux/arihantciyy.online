<?php
/**
 * Lead Handler for Delta Greenville
 * Saves leads to gotya.txt and sends mail
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Data Retrieval & Sanitization
    $name = isset($_POST['name']) ? strip_tags(trim($_POST['name'])) : "N/A";
    $phone = isset($_POST['phone']) ? strip_tags(trim($_POST['phone'])) : "N/A";
    $email = isset($_POST['email']) ? strip_tags(trim($_POST['email'])) : "N/A";
    $config = isset($_POST['config']) ? strip_tags(trim($_POST['config'])) : "N/A";
    $date = date("d-M-Y H:i:s");

    // 2. Save to gotya.txt (CSV Format) - Works on Localhost
    $file = 'gotya.txt';
    $leadData = "\"$name\",\"$phone\",\"$email\",\"$config\",\"$date\"\n";
    file_put_contents($file, $leadData, FILE_APPEND | LOCK_EX);

    // 3. Send to Google Sheets (Highly Recommended for Vercel)
    // To use this, deploy your script from google-apps-script.js and paste the URL below
    $googleSheetUrl = "YOUR_GOOGLE_SCRIPT_WEB_APP_URL_HERE"; 
    if ($googleSheetUrl !== "YOUR_GOOGLE_SCRIPT_WEB_APP_URL_HERE") {
        $queryData = http_build_query([
            'project_name' => 'Arihant City',
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'config' => $config,
            'source' => 'Vercel/Website'
        ]);
        @file_get_contents($googleSheetUrl . "?" . $queryData);
    }

    // 4. Send Mail (Optional - May not work on Vercel without SMTP)
    $to = "javheri80@gmail.com";
    $subject = "New Lead: Arihant City Kalyan Bhiwandi";
    $message = "New lead received:\nName: $name\nPhone: $phone\nEmail: $email\nConfig: $config\nDate: $date";
    $headers = "From: leads@deltathane.com";
    @mail($to, $subject, $message, $headers);

    // 5. Redirect to Thank You Page
    header("Location: thank-you.html");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
