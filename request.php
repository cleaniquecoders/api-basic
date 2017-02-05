<?php

require_once 'funcs.php';

if (validMethodRequest()) {
    dump($_SERVER['REQUEST_METHOD'] . ' is valid');
} else {
    dump($_SERVER['REQUEST_METHOD'] . ' is invalid');
}

function validMethodRequest()
{
    $allowed_methods = [
        'GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE',
    ];

    if (in_array($_SERVER['REQUEST_METHOD'], $allowed_methods)) {
        return true;
    }

    return false;
}
