@if(isset($cliente->id))
<form action="{{ route('clientes.update', ['cliente' => $cliente->id])}}" method="POST">
    @csrf
    @method('PUT')
@else
<form action="{{ route('clientes.store') }}" method="POST">
    @csrf
@endif

<input value="{{ $cliente->nome ?? old('nome')}}" placeholder="Nome" type="text" name="nome" id="nome" class="borda-preta">
    {{$errors->has('nome') ? $errors->first('nome') : ''}}

<input value="{{ $cliente->email ?? old('email')}}" placeholder="Email" type="text" name="email" id="email" class="borda-preta">                  
    {{$errors->has('email') ? $errors->first('email') : ''}}

<input value="{{ $cliente->telefone ?? old('telefone')}}" placeholder="Telefone" type="text" name="telefone" id="telefone" class="borda-preta">                  
    {{$errors->has('telefone') ? $errors->first('telefone') : ''}}

<input value="{{ $cliente->cpf ?? old('cpf')}}" placeholder="cpf" type="text" name="cpf" id="cpf" class="borda-preta">                  
    {{$errors->has('cpf') ? $errors->first('cpf') : ''}}

<textarea name="endereco" id="endereco" rows="4" cols="50" placeholder="Endereço"></textarea>

{{$errors->has('endereco') ? $errors->first('endereco') : ''}}


<button type="submit" class="borda-preta">Salvar</button>
</form>