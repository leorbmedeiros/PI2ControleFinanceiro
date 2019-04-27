@extends('layout.app')
@section('conteudo')
    <h1>Baixa</h1>
    <a href="baixa/create" class="btn btn-warning">Novo</a>
    <table class="table table-hover table-bordered table-dark">
        <tr>
            <th>Ações</th>
            <th>Id</th>
            <th>Data da Baixa</th>
            <th>Valor Pago</th>
            <th>Parcela Id</th>
            <th>Conta do Banco Id</th>
            <th>Forma de Pagamento</th>
        </tr>
        @foreach($baixas as $baixa)
            <tr>
                <td>
                    <a class="btn btn-primary" href="baixa/{{$baixa->id}}/edit">Alterar</a>
                    <a class="btn btn-danger" href="baixa/{{$baixa->id}}/destroy">Excluir</a>
                </td>
                <td>{{$baixa->id}}</td>
                <td>{{$baixa->data_baixa}}</td>
                <td>{{$baixa->valor_pago}}</td>
                <td>{{$baixa->parcela->id}}</td>
                <td>{{$baixa->conta_banco->id}}</td>
                <td>{{$baixa->forma_pagamento->forma_pagamento}}</td>
            </tr>
        @endforeach
    </table>
@endsection


