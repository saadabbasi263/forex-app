<?php
function responseValidationError($message, $errors){

return response([

    'status' => 'error',
    'code' => '400',
    'message' => $message,
    'data' => $errors

]);


}