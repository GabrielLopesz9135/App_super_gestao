<h1>Fornecedores</h1>

@php
    $status = ['','Ativo', 'Inativo']
@endphp

@foreach ($fornecedores as $fornecedor)
    Fornecedor: {{$fornecedor['nome']}} <br>
    Status: {{$status[$fornecedor['status']]}} <br>
@endforeach


{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem Muitos fornecedores </h3>
@else
    <h3> Nenhum Fornecedor Cadastrado </h3> 
@endif --}}


