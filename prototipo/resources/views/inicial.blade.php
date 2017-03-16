@extends('layout')

@section('conteudo')
<div class="divesqpendencia">
    <label>Serviços Pendentes</label>
    <a href="/pendencia/adicionar" class="button success">
        <i class="fa fa-plus-circle"></i> Adicionar
    </a>
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Titulo</th>
            <th>Cliente</th>
            <th class="large-3">
                &nbsp;
            </th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
<div class="divdirpendencia">
    <label>Anotações</label>
    <textarea placeholder="Coloque aqui sua Anotação"></textarea>
</div>
@endsection