    {{ $slot }}
    <form action="{{ route('site.store') }}" method="post">
        @csrf
        <input type="text" value="{{ old('nome')}}" placeholder="Nome" class="{{ $class }}" name="nome">
        {{ $errors->has('nome') ? $errors->first('nome') : '' }}
        <br>

        <input type="text" value="{{ old('telefone')}}" placeholder="Telefone" class="{{ $class }}" name="telefone">
        {{ $errors->has('telefone') ? $errors->first('telefone') : '' }}
        <br>

        <input type="text" value="{{ old('email')}}" placeholder="E-mail" class="{{ $class }}" name="email">
        {{ $errors->has('email') ? $errors->first('email') : '' }}
        <br>

        <select class="{{ $class }}" name="motivo_contatos_id">
            <option value="">Qual o motivo do contato?</option>
            @foreach ($motivo_contatos as $motivo_contato)
                <option value="{{$motivo_contato['id']}}" {{ old('motivo_contatos_id') == $motivo_contato['id'] ? 'selected' : '' }}>{{$motivo_contato['motivo_contato']}}</option>
            @endforeach
        </select>
        {{ $errors->has('motivo_contatos_id') ? $errors->first('motivo_contatos_id') : '' }}
        <br>

        <textarea name="mensagem" class="{{ $class }}"> {{(old('mensagem') != '') ? old('mensagem') : "Preencha aqui a sua mensagem"}}    
        </textarea>
        {{ $errors->has('mensagem') ? $errors->first('mensagem') : '' }}
        <br>
        <button type="submit" class="{{ $class }}">ENVIAR</button>
    </form>

