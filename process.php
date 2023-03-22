<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $ip = $_POST['ip'] ?? '';
    $country = $_POST['country'] ?? '';
    $city = $_POST['city'] ?? '';

    if ($email && $ip && $country && $city) {
        $filename = 'user_data.txt';
        $data = "Email: {$email}, IP: {$ip}, Country: {$country}, City: {$city}" . PHP_EOL;
        file_put_contents($filename, $data, FILE_APPEND);
        echo 'Data saved successfully';
    } else {
        http_response_code(400);
        echo 'Invalid data';
    }
} else {
    http_response_code(405);
    echo 'Method not allowed';
}
