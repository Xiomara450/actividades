<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibonacciController extends Controller
{

public  function fibo(Request $request)
{

$fibo =array(0,1); 
 $numero=1;
if(isset($request->numero)){
$numero=$request->numero;
if($numero>1){
  for($i=2; $i<$numero;$i++){
     $fibo[] = $fibo[$i-1] + $fibo[$i-2];
  }
}
}
$fibo = implode(",",$fibo);
return view('fibonacci',compact('fibo'));
}
}
    

