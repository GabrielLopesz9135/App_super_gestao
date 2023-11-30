<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    
    public function principal(){

        $motivos_contatos = MotivoContato::all();
        return view('site.principal', ['titulo'=>'Principal', 'motivo_contatos'=>$motivos_contatos]);
    }
}
