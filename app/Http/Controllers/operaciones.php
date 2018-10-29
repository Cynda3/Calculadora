<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Http\Controllers\Controller;

class operaciones extends Controller
{
    public function operacion(Request $request){
        $nombre = $request ->input('nombre');
        $operacion = $request->input('operacion');
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $view = "calculadora";
        if ($num1!=null && $num2!=null) {
        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                //return $resultado;
                break;
            case 'restar':
                $resultado = $num1 - $num2;
                //return $resultado;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                //return $resultado;
                break;
            case 'dividir':
                if ($num2!=0) {
                    $resultado = $num1 / $num2;
            }else{
                $resultado = "No se puede dividir entre 0";
            }
                break;
            
            default:
                echo 'error';
                break;
        }
        }else{
            $resultado ="Tienes que introducir un numero en las dos casillas"; 
        }
        return view('calculadora',["resultado" => $resultado, "nombre" => $nombre]);
        /*return $request->all();*/
    }
}