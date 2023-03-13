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
if (!function_exists('app_path')) {
    /**
     * Get the path to the application folder.
     *
     * @param  string $path
     * @return string
     */
    function app_path($path = '')
    {
        return app('path') . ($path ? DIRECTORY_SEPARATOR . $path : $path);
    }
}