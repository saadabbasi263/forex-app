<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\User as User;
use Validator;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'min:4|required',
            'phone' => 'required|integer',
       
 
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
        'password' =>'min:4|required'

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

$getData=User::where('id',$user_id)->get(['firstName','lastName','phone','email','image'])->first();


if($token = JWTAuth::claims(['user_id' => $user_id,'name' => $getData['firstName'].$getData['lastName'],
'phone' => $getData['phone'],'image' => $getData['image']])->attempt($credentials))
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

public function updatepassword(Request $request)
{
    $rules = [       
        'email' => 'required|email|exists:users,email',
        'newPassword' => 'min:4|required_with:repeatNewPassword|same:repeatNewPassword',
        'repeatNewPassword' => 'required|min:4',

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

public function updateUserDetail(Request $request)
{

try{

$data=$request->all();

   // upload image
if($request->hasFile('image'))
{
    $ldate = date('is');
    exec('mkdir -p '.public_path('images'));
    $destinationPath = 'images';
    $myimage = $request->image->getClientOriginalName();
    $myimage=$ldate.$myimage;
    $request->image->move(public_path($destinationPath), $myimage);
    $imageName=env('APP_URL').'/'.'images'.'/'.$myimage;
  
}
$user=Auth::user();

$UpdateUser=User::where('email',$user->email)->update([
    
    'password'=>(isset($request['password']) && $request['password'] != NULL)?Hash::make($request['password']):Hash::make($user->password),
    'name'=>(isset($request['name']) && $request['name'] != NULL)?$request['name']:$user->name,
    'phone'=>(isset($request['phone']) && $request['phone'] != NULL)?$request['phone']:$user->phone,
    'email'=>(isset($request['email']) && $request['email'] != NULL) ?$request['email']:$user->email,
    'country'=>(isset($request['country']) && $request['country'] != NULL)?$request['country']:$user->country,
    'gender'=>(isset($request['gender']) && $request['gender'] != NULL)?$request['gender']:$user->gender,
    'image'=> isset($imageName)?$imageName:$user->image,

    
]);

    return response()->json([
        'status' => 'success',
        'code' => 200,
        'message' => 'User Details Updated Successfully'
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