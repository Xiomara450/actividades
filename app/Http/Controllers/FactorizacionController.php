<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactorizacionController extends Controller
{

public function factor(Request $request)
{
 $numero=$_POST['numero'];
 $factor=1;
 for($i=$numero; $i>1;$i--){
 $factor=$factor*$i;
}
return view('factorizacion',compact('factor','numero'));
}
}



