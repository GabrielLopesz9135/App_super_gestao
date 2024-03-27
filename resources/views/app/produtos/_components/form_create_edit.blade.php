@if(isset($produto->id))
<form action="{{ route('produtos.update', ['produto' => $produto->id])}}" method="POST">
    @csrf
    @method('PUT')
@else
<form action="{{ route('produtos.store') }}" method="POST">
    @csrf
@endif

<input value="{{ $produto->nome ?? old('nome')}}" placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}

<input value="{{ $produto->descricao ?? old('descricao')}}" placeholder="Descricao" type="text" name="descricao" id="descricao" class="borda-preta">                  
    {{$errors->has('descricao') ? $errors->first('descricao') : ''}}

<input value="{{ $produto->peso ?? old('peso')}}" placeholder="Peso" type="text" name="peso" id="peso" class="borda-preta">                  
    {{$errors->has('peso') ? $errors->first('peso') : ''}}

<select name="unidade_id" id="unidade_id" class="borda">
    <option value="">-- Selecione a Unidade de Medida --</option>
    @foreach ($unidades as $unidade)
        <option value="{{$unidade['id']}}" {{ ( $produto->unidade_id ?? old('unidade_id')) == $unidade['id'] ? 'selected' : '' }}>{{$unidade['descricao']}}</option>
       
    @endforeach
</select>
    {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}

    <select name="fornecedor_id" id="fornecedor_id" class="borda">
        <option value="">-- Selecione um Fornecedor --</option>
        @foreach ($fornecedores as $fornecedor)
            <option value="{{$fornecedor->id}}" {{ ( $produto->fornecedor->id ?? old('fornecedor_id')) == $fornecedor->id ? 'selected' : '' }}>{{$fornecedor['nome']}}</option> 
        
            @endforeach
    </select>
        {{$errors->has('fornecedor_id') ? $errors->first('fornecedor_id') : ''}}

<button type="submit" class="borda-preta">Salvar</button>
</form>