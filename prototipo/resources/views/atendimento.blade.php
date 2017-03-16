@extends('layout')

@section('conteudo')
<div class="divesq">
    <form method="post">
        <label>Cliente:
            <input type="text" placeholder="Nome" >
        </label>
        <label>Técnico:
            <input type="text" placeholder="Técnico" >
        </label>
        <label>Categoria:
            <input type="text" placeholder="Categoria">
        </label>
        <label>Data:
            <input type="date" placeholder="Data" >
        </label>
        <label>Titulo:
            <input type="text" placeholder="Titulo" >
        </label>
        <label>Descrição do Atendimento:
            <input type="text" placeholder="Descrição" >
        </label>
        <label>Serviços Efetuados:
            <input type="text" placeholder="Serviços" >
        </label>
        <button type="submit" class="button small success float-right">
            <i class="fa fa-save"></i> Adicionar
        </button>
    </form>
</div>
<div class="divdir">
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

@endsection