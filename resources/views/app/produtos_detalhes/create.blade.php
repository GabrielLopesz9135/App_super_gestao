@extends('app.layouts.basico')

@section('title', 'Produto - Adicionar')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Detalhes do Produto</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="#">Voltar </a></li>
            </ul>
        </div>

        

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                @component('app.produtos_detalhes._components.form_create_edit', ['unidades' => $unidades])
                @endcomponent
            </div>
        </div>
        
    </div>

@endsection