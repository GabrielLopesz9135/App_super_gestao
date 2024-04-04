@if(isset($pedido->id))
<form action="{{ route('pedidos.update', ['pedido' => $pedido->id])}}" method="POST">
    @csrf
    @method('PUT')
@else
<form action="{{ route('pedidos.store') }}" method="POST">
    @csrf
@endif

<select name="cliente_id" id="cliente_id" class="borda">
    <option value="" selected>-- Selecione um Cliente--</option>
    @foreach ($clientes as $cliente)
        <option value="{{$cliente->id}}" {{ ( $pedido->cliente->id ?? old('cliente_id')) == $cliente->id ? 'selected' : '' }}>{{$cliente->nome}}</option> 
    
        @endforeach
</select>
    {{$errors->has('cliente_id') ? $errors->first('cliente_id') : ''}}

<button type="submit" class="borda-preta">Salvar</button>
</form>