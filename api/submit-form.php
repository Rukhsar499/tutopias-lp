<?php

header("Content-Type: application/json");

// ===============================
// SECRET API KEY
// ===============================
$DATA_KEY = "b77a5c561934e089STVa54e08c5619";

// ===============================
// Get data from frontend
// ===============================
$input = file_get_contents("php://input");

if (!$input) {
    http_response_code(400);

    echo json_encode([
        "status" => 400,
        "error" => 1,
        "message" => "No data received"
    ]);

    exit;
}

// ===============================
// Decode JSON
// ===============================
$data = json_decode($input, true);

if (json_last_error() !== JSON_ERROR_NONE) {
    http_response_code(400);

    echo json_encode([
        "status" => 400,
        "error" => 1,
        "message" => "Invalid JSON"
    ]);

    exit;
}

// ===============================
// Call actual API
// ===============================
$ch = curl_init("YOUR_ACTUAL_API_URL");

curl_setopt_array($ch, [
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "DATA_KEY: " . $DATA_KEY
    ],
    CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($ch);

$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if ($response === false) {
    $error = curl_error($ch);
    curl_close($ch);

    http_response_code(500);

    echo json_encode([
        "status" => 500,
        "error" => 1,
        "message" => $error
    ]);

    exit;
}

curl_close($ch);

// ===============================
// Return API response to frontend
// ===============================
http_response_code($httpCode);

echo $response;