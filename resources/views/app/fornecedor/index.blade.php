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
          <th>Telefone</th>
          <th>Cidade</th>
        </tr>

        @isset($fornecedores)
            @forelse ($fornecedores as $fornecedor)
                <tr>
                    <td> {{$fornecedor['nome'] ?? "Dado Não Informado"}} </td>  
                    <td> {{$status[$fornecedor['status']] ?? "Dado Não Informado"}} </td> 
                    <td> {{$fornecedor['CNPJ'] ?? "Dado Não Informado"}}</td>
                    <td> ({{$fornecedor['DDD']}}) {{$fornecedor['Telefone']}} </td>
                    <td>
                        @switch($fornecedor['DDD'])
                            @case('028')
                                Venda Nova do Imigrante - ES
                                @break                           
                            @case('011')
                                São Paulo - SP
                                @break                               
                            @case('021')
                                Rio de Janeiro - RJ
                                @break
                            @default
                                Estado Não Identificado
                                
                        @endswitch
                    </td>
                </tr>
                @if($loop->last)
                    </table>  
                @endif
                
                @empty
                    </table>  
                    <h1>Não existem Fornecedores Cadastrados</h1>

            @endforelse
        @endisset
        

        


</body>
</html>






{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem Muitos fornecedores </h3>
@else
    <h3> Nenhum Fornecedor Cadastrado </h3> 
@endif --}}


