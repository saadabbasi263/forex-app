<?php
function responseValidationError($message, $errors){

return response([

    'status' => 'error',
    'code' => '400',
    'message' => $message,
    'data' => $errors

]);


}
function public_path($path=null)
{
        return rtrim(app()->basePath('public/'.$path), '/');
}
function GetIp(){
    //IP ADDRESS
       $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    $AgentIp = $ipaddress;
    
    return $AgentIp;
    
    }