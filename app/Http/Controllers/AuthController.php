<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use  App\Models\User as User;
use Validator;
use DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;
class AuthController extends Controller
{

    public function __construct()
    {
    }

    public function register(Request $request)
    {
        $rules = [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|int'
 
        ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
    return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$ins_data=User::insert($data);

return response()->json([
    "code" => 200,   
    "message" => "User Registered!"
]);
}
catch (\Throwable $th) {
    return response()->json([
        'status' => "error",
        'code' => '500',
        'message' =>  'Something Went Wrong',
        'error' => $th->getMessage()
    ]);


    }
}
public function generateOTP(Request $request)
{
    $rules = [

        'email' => 'required|email|exists:users,email'

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$email=$data['email'];
$gen_otp = mt_rand(1000,9999);
$save_otp=User::where('email',$email)->update(['otp'=>$gen_otp]);

return response()->json([
"code" => 200,   
"message" => "OTP Sent Successfully!"
]);
}
catch (\Throwable $th) {
return response()->json([
    'status' => "error",
    'code' => '500',
    'message' =>  'Something Went Wrong',
    'error' => $th->getMessage()
]);


}
}

public function login(Request $request)
{
    $rules = [        
        'email' => 'required|email|exists:users,email',
        'otp' => 'required|int|exists:users,otp'

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$email=$data['email'];
$otp=$data['otp'];
$user=User::where('email',$email)->first();

if($otp != $user['otp'])
{
    return response()->json([
        "code" => 401,   
        "message" => "Invalid OTP! Please Try Again"
        ]);
}

$token = JWTAuth::fromUser($user);

return $this->respondWithToken($token);

}
catch (\Throwable $th) {
return response()->json([
    'status' => "error",
    'code' => '500',
    'message' =>  'Something Went Wrong',
    'error' => $th->getMessage()
]);
}
}

public function logout(Request $request)
{
    Auth::guard('web')->logout();

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'message' => 'User Logout Sucessfully!'
    ]);


}



}