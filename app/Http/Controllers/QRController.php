<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\User as User;
use App\Models\QRCodes as QRCodes;
use App\Models\Template as Template;
use Validator;
use Auth;
use Illuminate\Support\Facades\File; 
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use DB;
class QRController extends Controller
{

    public function QRgenerate(Request $request)
    {
       
        $rules = [
            'data' => 'required|string',
      
 
        ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
    return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=json_decode($request->getContent(),true);

$path = public_path().'/images';
File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);

$time = date('His');
$name='QR-'.$time.'.svg';
$qr=QrCode::size(300)->generate(''.$data['data'],public_path('images/'.$name) );
$userId = Auth::id();

$ins_data=QRCodes::insert([
    'user_id' => $userId,
    'data' => $data['data'],
    'path' => env('APP_URL').'/images'.'/'.$name
]);

return response()->json([
    "code" => 200,
    "path"=>  env('APP_URL').'/images'.'/'.$name,   
    "message" => "User Registered!"
]);
}
catch (\Throwable $th) {
    return response()->json([
        "code" => 500,
        'status' => "error",
        "message" => "Internal Server Error",
        'error' => $th->getMessage()
    ]);
    
    }

}

public function getTemplates(Request $request)
{

try{
$get_Template=Template::get(['id','front','back'])->toArray();
$path=env('APP_URL').'/';
return response()->json([
    "code" => 200,
    "path" => $path,
    "data"=>  $get_Template,   
    "message" => "User Registered!"
]);
}
catch (\Throwable $th) {
    return response()->json([
        "code" => 500,
        'status' => "error",
        "message" => "Internal Server Error",
        'error' => $th->getMessage()
    ]);
    
    }

}
}