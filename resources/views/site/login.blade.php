@extends('site.layouts.basico')

@section('title', $titulo)


@section('conteudo')
    


    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                <form action="{{ route('site.login')}}" method="POST">
                    @csrf
                    <p style="color: red">{{$erro}}</p>
                    <label for="email">E-mail</label>
                    <input type="email" value="{{ old('email') ? old('email') : $email }}" name="email" id="email" class="borda-preta">
                    {{ $errors->has('email') ? $errors->first('email') : ''}} <br>
                    <label for="senha">Senha</label>
                    <input type="password" value="{{ old('senha') }}"  name="senha" id="senha" class="borda-preta">
                    {{ $errors->has('senha') ? $errors->first('senha') : ''}} <br>
                    <button type="submit" class="borda-preta">Enviar</button>
                </form>
            </div>
        </div>  
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection