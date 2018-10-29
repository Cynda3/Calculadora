<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;

class micontrolador extends Controller
{
    public function nombre(Request $request){
        return view('calculadora',[
        	'nombre'=>$request->input('nombre')
        ]);
    }
}