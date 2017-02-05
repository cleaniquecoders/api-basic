<?php

try {
    // check if Accept and Authorization header if exist
    if (isset($headers['Accept']) && $headers['Accept'] != 'application/json') {
        throw new Exception("Accept Header must be application/json");
    }
} catch (Exception $e) {
    echo response($e->getMessage(), true);
}

function response($value, $error = false)
{
    header('Content-Type: application/json');

    if ($error) {
        echo json_encode(['error' => true, 'message' => $value]);
        return;
    }

    $output = [
        'data' => $value,
    ];

    echo json_encode($output);
}
