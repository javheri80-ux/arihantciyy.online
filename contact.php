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

    // 2. Save to gotya.txt (CSV Format)
    $file = 'gotya.txt';
    $leadData = "\"$name\",\"$phone\",\"$email\",\"$config\",\"$date\"\n";
    
    // Append lead to file
    file_put_contents($file, $leadData, FILE_APPEND | LOCK_EX);

    // 3. Send Mail (Optional/Backup)
    $to = "javheri80@gmail.com";
    $subject = "New Lead: Arihant City Kalyan Bhiwandi";
    $message = "New lead received:\nName: $name\nPhone: $phone\nEmail: $email\nConfig: $config\nDate: $date";
    $headers = "From: leads@deltathane.com";
    @mail($to, $subject, $message, $headers);

    // 4. Return JSON Response
    header('Content-Type: application/json');
    echo json_encode(["status" => "success"]);
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>
