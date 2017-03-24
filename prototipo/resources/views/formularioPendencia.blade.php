@extends('layout')

@section('conteudo')
<div class="row">
    <div class="large-4 float-left">
        <div class="button-group small">
            <a href="javascript:history.back();" class="button secondary ">
                <i class="fa fa-chevron-left"></i> Voltar
            </a>
        </div>
    </div>
    <div class="large-8 float-left">
        <h4><i class="fa fa-list"></i> Serviços Pendentes &mdash;  </h4>
    </div>
</div>


<form method="post">



    <div class="row">
        <div class="medium-6 columns">
            <label> Nome:
                <input type="text" placeholder="Titulo do Serviço" name="pendencia[titulo]" value="">
                <input type="text" placeholder="Descição do Serviço" name="pendencia[descricao]" value="">
            </label>

        </div>
    </div>


    <div class="row">
        <div class="medium-6 columns">
            <button type="submit" class="button small success float-right">
                <i class="fa fa-save"></i> Salvar
            </button>
        </div>
    </div>

</form>
@endsection