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
    'status' => "error",
    'code' => '404',
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
}