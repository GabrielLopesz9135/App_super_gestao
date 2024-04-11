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


    public function index(Request $request){

        $erro = $request->get('erro');
        $email = $request->get('email');
        return view('site.login',  ['titulo'=>'Login', 'erro'=>$erro, 'email'=>$email]);
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

        $user = $this->model->where('email', $email)->where('password', $senha)->get()->first();

        if(isset($user->name)){
            session_start();
            $_SESSION['nome'] = $user->name;
            $_SESSION['email'] = $user->email;

            return redirect()->route('clientes.index');
        }else{
            return redirect()->route('site.login', ['erro'=>'E-mail ou senha incorretos', 'email'=> $email]);
        }
    }

    public function logout(){
        session_destroy();
        return redirect()->route('site.index');
    }
}
