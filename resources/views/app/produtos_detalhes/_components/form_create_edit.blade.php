@if(isset($produto_detalhe->id))
<form action="{{ route('produtos.update', ['produto' => $produto_detalhe->id])}}" method="POST">
    @csrf
    @method('PUT')
@else
<form action="{{ route('produtos-detalhe.store') }}" method="POST">
    @csrf
@endif

<input value="{{ $produto_detalhe->produto_id ?? old('produto_id')}}" placeholder="produto_id" type="text" name="produto_id" id="produto_id" class="borda-preta">
    {{$errors->has('produto_id') ? $errors->first('produto_id') : ''}}

<input value="{{ $produto_detalhe->comprimento ?? old('comprimento')}}" placeholder="Comprimento" type="text" name="comprimento" id="comprimento" class="borda-preta">                  
    {{$errors->has('comprimento') ? $errors->first('comprimento') : ''}}

<input value="{{ $produto_detalhe->largura ?? old('largura')}}" placeholder="Largura" type="text" name="largura" id="largura" class="borda-preta">                  
    {{$errors->has('largura') ? $errors->first('largura') : ''}}

<input value="{{ $produto_detalhe->altura ?? old('altura')}}" placeholder="Altura" type="text" name="altura" id="altura" class="borda-preta">                  
    {{$errors->has('altura') ? $errors->first('altura') : ''}}

<select name="unidade_id" id="unidade_id" class="borda">
    <option value="">-- Selecione a Unidade de Medida --</option>
    @foreach ($unidades as $unidade)
        <option value="{{$unidade['id']}}" {{ ( $produto_detalhe->unidade_id ?? old('unidade_id')) == $unidade['id'] ? 'selected' : '' }}>{{$unidade['descricao']}}</option>
       
    @endforeach
</select>
    {{$errors->has('unidade_id') ? $errors->first('unidade_id') : ''}}

<button type="submit" class="borda-preta">Salvar</button>
</form>