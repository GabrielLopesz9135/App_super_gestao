<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome'=>'Nescal', 'status'=>'1'],
            1 => ['nome'=>'Toddy', 'status'=>'2'],
        ];
        return view('app.fornecedor.index', [
            'fornecedores'=>$fornecedores        
        ]);
    }
}
