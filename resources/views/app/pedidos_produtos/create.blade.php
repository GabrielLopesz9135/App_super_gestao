@extends('app.layouts.basico')

@section('title', 'Pedidos - Produtos')


@section('conteudo')
    
    <div class="conteudo-pagina">

        <div class="titulo-pagina-2">
            <p>Adicionar Produto ao Pedido</p>
        </div>
        
        <div class="menu">
            <ul>
                <li><a href="{{ route('pedidos.index')}}">Voltar </a></li>
                <li><a href="">Consulta</a></li>
            </ul>
        </div>

        

        <div class="informacao-pagina">
            <div style="width: 30%; margin-left:auto; margin-right:auto;">
                
                <form action="{{ route('pedidos-produtos.store', ['pedido' => $pedido]) }}" method="POST">
                    @csrf


                <select name="produto_id" id="produto_id" class="borda">
                    <option value="">-- Selecione um Produto --</option>
                    @foreach ($produtos as $produto)
                        <option value="{{$produto->id}}" {{ ( old('produto_id')) == $produto->id ? 'selected' : '' }}>{{$produto['nome']}}</option> 
                        
                         @endforeach
                </select>
                    {{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}


                <button type="submit" class="borda-preta">Salvar</button>
                </form>
            </div>
        </div>
        
    </div>

@endsection