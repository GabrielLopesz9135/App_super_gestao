<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome'=>'Fanta', 'status'=>'1', 'CNPJ'=>'12.345.678/0001-00', 'DDD'=>'021', 'Telefone'=>'999568734'],
            1 => ['nome'=>'Coca-Cola', 'status'=>'1', 'CNPJ'=>null, 'DDD'=>'029', 'Telefone'=>'999629961'],
            2 => ['nome'=>'Dolly', 'status'=>'2', 'CNPJ'=>'12.345.678/0001-00', 'DDD'=>'011', 'Telefone'=>'999349923']
        ];

        
        return view('app.fornecedor.index', [
            'fornecedores'=>$fornecedores     
        ]);
    }
}
