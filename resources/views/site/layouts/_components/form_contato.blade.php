    {{ $slot }}
    <form action="{{ route('site.store') }}" method="post">
        @csrf
        <input type="text" value="{{ old('nome')}}" placeholder="Nome" class="{{ $class }}" name="nome">
        <br>
        <input type="text" value="{{ old('telefone')}}" placeholder="Telefone" class="{{ $class }}" name="telefone">
        <br>
        <input type="text" value="{{ old('email')}}" placeholder="E-mail" class="{{ $class }}" name="email">
        <br>
        <select class="{{ $class }}" name="motivo_contatos_id">
            <option value="">Qual o motivo do contato?</option>
            @foreach ($motivo_contatos as $motivo_contato)
                <option value="{{$motivo_contato['id']}}" {{ old('motivo_contatos_id') == $motivo_contato['id'] ? 'selected' : '' }}>{{$motivo_contato['motivo_contato']}}</option>
            @endforeach
        </select>
        <br>
        <textarea name="mensagem" class="{{ $class }}"> {{(old('mensagem') != '') ? old('mensagem') : "Preencha aqui a sua mensagem"}}

        </textarea>
        <br>
        <button type="submit" class="{{ $class }}">ENVIAR</button>
    </form>

   {{$motivo_contatos}}