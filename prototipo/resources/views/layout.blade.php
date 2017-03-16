<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atendimentos Infolution</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/css.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="/Imagens/logo2.png" height="110px" width="110px">
            </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li role="presentation"><a href="/pendencia">Pendencias</a></li>
            <li role="presentation"><a href="/atendimento">Atendimentos</a></li>
            <li role="presentation"><a href="http://www.infolution.inf.br/licenca/">Gerar Chave                   </a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrativo <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="curso">Cadastrar Curso</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<div class="divprincipal">
    <div class="title m-b-md">
        @yield('conteudo')
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
