<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Validator;
use Illuminate\Support\Facades\Validator;
use App\Models\User as User;
class LoginController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
    "message" => "User Registered Successfully!"
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

        'mobile' => 'required|int|exists:users,mobile'

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$mobile=$data['mobile'];
$gen_otp = mt_rand(1000,9999);
$save_otp=User::where('mobile',$mobile)->update(['otp'=>$gen_otp]);

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

public function verifyOTP(Request $request)
{
    $rules = [        
        'mobile' => 'required|int|exists:users,mobile',
        'otp' => 'required|int|exists:users,otp'

    ];

$validator = Validator::make($request->all(), $rules);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$mobile=$data['mobile'];
$otp=$data['otp'];
$get_otp=User::where('mobile',$mobile)->value('otp');
if($otp != $get_otp)
{
    return response()->json([
        "code" => 401,   
        "message" => "Invalid OTP! Please Try Again"
        ]);
}
return response()->json([
"code" => 200,   
"message" => "OTP Successfully Verified"
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
