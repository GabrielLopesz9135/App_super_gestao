<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    private $model;

    public function __construct(User $data)
    {
        $this->model = $data;
    }


    public function index(){
        return view('site.login',  ['titulo'=>'Login']);
    }

    public function autenticar(Request $request){
        
        $rules = [
            'email'=> 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'email.email' => 'digite um email valido',
            'senha.required' => 'O campo senha é obrigatório'
        ];

        $request->validate($rules, $feedback);

        $email = $request->get('email');
        $senha = $request->get('senha');

        echo "Email: ". $email . "| Senha:" . $senha;

        $user = $this->model->where('email', $email)->where('password', $senha)->get()->first();

        if(isset($user->name)){
            echo "Usuario Existe";
        }else{
            echo "Usuario não encontrado";
        }
    }
}
