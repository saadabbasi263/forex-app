<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use DB;

class HomeController extends Controller
{
    public function __construct()
    {

    }
public function getForexData(Request $request,$from,$to)

{
    $validator = Validator::make(['from' => $from,
    'to' => $to
], [
        'from' => 'required|date',
        'to' => 'required|date',
    ]);
if ($validator-> fails()) {
return responseValidationError('Fields Validation Failed.', $validator->errors());
} 
try{
$data=$request->all();
$ticker=$data['forexTicker'];

    $key=env('ForexKey');
   

    $url='https://api.polygon.io/v2/aggs/ticker/C:'.$ticker.'/range/1/day/'.$from.'/'.$to.'?adjusted=true&sort=asc&limit=1000&apiKey='.$key;
    $agent= 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_VERBOSE, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERAGENT, $agent);
    curl_setopt($ch, CURLOPT_URL,$url);
    $result=curl_exec($ch);
    $result=json_decode($result);
  
 $res=[
"c"=>"The close price for the symbol in the given time period",
"h"=>"The highest price for the symbol in the given time period",
"l" =>"The lowest price for the symbol in the given time period",
"n"=>"The number of transactions in the aggregate window",
"o" =>"The open price for the symbol in the given time period",
"t"=>"The Unix Msec timestamp for the start of the aggregate window",
"v" =>"The trading volume of the symbol in the given time period",
"vw" => "The volume weighted average price"

 ];
    return response()->json([
        "code" => 200, 
        "data" => $result,  
        "abbrevations" =>$res,
        "message" => "Data Loaded Successfully!"
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