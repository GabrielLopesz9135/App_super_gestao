<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome'=>'Fanta', 'status'=>'1', 'CNPJ'=>'12.000.000/000'],
            1 => ['nome'=>'Coca-Cola', 'status'=>'1', 'CNPJ'=>''],
            2 => ['nome'=>'Dolly', 'status'=>'2'],
        ];
        return view('app.fornecedor.index', [
            'fornecedores'=>$fornecedores        
        ]);
    }
}
