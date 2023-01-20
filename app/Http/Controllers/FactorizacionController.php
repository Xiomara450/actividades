<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorizacionController extends Controller
{

public function factor(Request $request)
{
$factor=array();
 $numero=2;
  if(isset($request->numero)){
    $numero=$request->numero;
  } 
$factor = implode(",",$factor);
return view('factorizacion',compact('factor'));
}
}


