<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\User as User;
use Validator;
use DB;
use Illuminate\Support\Facades\Auth;
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
            'password' => 'min:6|required',
       
 
        ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
    return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$data['password']= Hash::make($data['password']);
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

public function login(Request $request)
{
    $rules = [        
        'email' => 'required|email|exists:users,email',
        'password' =>'min:6|required'

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$email=$data['email'];
$credentials = $request->only('email', 'password');
$user_id = User::where('email',$email)->pluck('id')->first();

if($token = JWTAuth::claims(['user_id' => $user_id])->attempt($credentials))
{
    return $this->respondWithToken($token);

}

return response()->json([
    'status' => "false",
    'code' => '403',
    'message' =>  'Incorrect Password For '.$email,
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

public function logout(Request $request)
{
    Auth::guard('web')->logout();

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'message' => 'User Logout Sucessfully!'
    ]);


}

public function sendotp(Request $request)
{
    $rules = [        
        'email' => 'required|email|exists:users,email',

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$email=$request['email'];
$rand=rand ( 100000 , 999999 );
$save_otp=User::where('email',$email)->update([
"otp" => $rand

]);

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'message' => 'OTP Sent Sucessfully!'
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
public function validateotp(Request $request)
{
    $rules = [    
        'email' => 'required|email|exists:users,email',    
        'otp' => 'required|integer|min:6',

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{

$otp=$request['otp'];
$email=$request['email'];
$rand=rand ( 100000 , 999999 );

$check_otp=User::where('email',$email)->pluck('otp')->first();
if($check_otp == $otp)
{
    return response()->json([
        'status' => 'success',
        'code' => 200,
        'message' => 'User Verified Sucessfully!'
    ]);

}
else {
    return response()->json([
        'status' => 'false',
        'code' => 403,
        'message' => 'Invalid OTP'
    ]);


}

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

public function updatepassword(Request $request)
{
    $rules = [       
        'email' => 'required|email|exists:users,email',
        'password' => 'min:6|required_with:confirmpassword|same:confirmpassword',
        'confirmpassword' => 'required|min:6',

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{

$password=Hash::make($request['password']);
$email=$request['email'];


$check_otp=User::where('email',$email)->update(['password'=>$password]);

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'message' => 'Password Updated Successfully'
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
public function userdetail(Request $request)
{

try{

    $id=Auth::id();
$getData=User::where('id',$id)->get(['name','phone','email','image'])->toArray();


    return response()->json([
        'status' => 'success',
        'code' => 200,
        'data' => $getData,
        'message' => 'Data Loaded Successfully'
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
}