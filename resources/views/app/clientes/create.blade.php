@extends('app.layouts.basico')

@section('title', 'Cliente - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Cliente</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{ route('clientes.index')}}">Voltar </a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                @component('app.clientes._components.form_create_edit')
                @endcomponent
            </div>
        </div>
        
    </div>

@endsection