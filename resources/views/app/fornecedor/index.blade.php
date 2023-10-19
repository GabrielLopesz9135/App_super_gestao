@php
    $status = ['','Ativo', 'Inativo']
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fornecedores</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h1>Fornecedores</h1>
    <table>
        <tr>
          <th>Company</th>
          <th>Status</th>
          <th>CNPJ</th>
        </tr>
        <tr>
          <td>Guaraná</td>
          <td>Ativo</td>
          <td>12.123.123/123</td>
        </tr>

        @foreach ($fornecedores as $fornecedor)
        <tr>
            <td> {{$fornecedor['nome']}} </td>  
            <td> {{$status[$fornecedor['status']]}} </td> 
            <td>
                @isset($fornecedor['CNPJ'])
                    {{$fornecedor['CNPJ']}}
                    @empty($fornecedor['CNPJ'])
                        - Vazio 
                    @endempty
                @endisset
            </td>
        </tr>
@endforeach

        


      </table>
</body>
</html>






{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem Muitos fornecedores </h3>
@else
    <h3> Nenhum Fornecedor Cadastrado </h3> 
@endif --}}


