<?php
// Project: Arihant City Kalyan Bhiwandi
// Optimized for Vercel Deployment - api/ directory
$data_file = __DIR__ . '/../data.json';
$data = [];
if (file_exists($data_file)) {
    $data = json_decode(file_get_contents($data_file), true);
}

function get_val($key, $fallback = '') {
    global $data;
    return (isset($data[$key]) && !empty($data[$key])) ? $data[$key] : $fallback;
}
?>
<?php include __DIR__ . '/../index_body.php'; ?>
