<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class PalindromoController extends Controller
{
 public function palin(Request $request)
{
$palin='';
$palabra=$_POST['palabra'];

$palabrainver=strrev($palabra);

if (strcmp($palabra,$palabrainver)==0){
    return view('palindromo').'Es palindromo';
         
}
else{
    return view('palindromo').'No es palindromo';
}


}
}