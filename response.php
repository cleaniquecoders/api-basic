<?php

require_once 'funcs.php';

// response('some data');
// response(['some' => 'data']);
// response(true);
response([1, 2, 3, 4]);
// response('ops! something went wrong!', true, 400);

function response($value, $error = false, $code = 200)
{
    // return output as json, instead of text/html
    header('Content-Type: application/json');

    // set http status code
    http_response_code($code);

    // handle error output
    if ($error) {
        // convert to JSON format and echo
        echo json_encode([
            'error' => true,
            'message' => $value,
            'status' => $code,
        ]);
        return;
    }

    // normal output, with standard format
    $output = [
        'data' => $value,
    ];

    // convert to JSON format and echo
    echo json_encode($output);
}
