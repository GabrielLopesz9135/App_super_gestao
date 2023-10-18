<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $valor1,int $valor2){
        $soma = $valor1 + $valor2;
        return view('site.teste', ['valor1'=> $valor1,'valor2'=> $valor2,'soma'=>$soma]);  //Array associativo

       /* return view('site.teste', compact('valor1', 'valor2', 'soma')); */ //Compact

       /* return view('site.teste')->with('valor1', $valor1)->with('valor2', $valor2)->with('soma', $soma);  */ //With
    }
}
