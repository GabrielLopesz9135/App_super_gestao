    {{ $slot }}
    <form action="{{ route('site.store') }}" method="post">
        @csrf
        <input type="text" value="{{ old('nome')}}" placeholder="Nome" class="{{ $class }}" name="nome">
        <br>
        <input type="text" value="{{ old('telefone')}}" placeholder="Telefone" class="{{ $class }}" name="telefone">
        <br>
        <input type="text" value="{{ old('email')}}" placeholder="E-mail" class="{{ $class }}" name="email">
        <br>
        <select class="{{ $class }}" name="motivo_contato">
            <option value="">Qual o motivo do contato?</option>
            <option value="1">Dúvida</option>
            <option value="2">Elogio</option>
            <option value="3">Reclamação</option>
        </select>
        <br>
        <textarea name="mensagem" class="{{ $class }}"> {{(old('mensagem') != '') ? old('mensagem') : "Preencha aqui a sua mensagem"}}

        </textarea>
        <br>
        <button type="submit" class="{{ $class }}">ENVIAR</button>
    </form>

    <pre>
        {{$errors}}
    </pre>