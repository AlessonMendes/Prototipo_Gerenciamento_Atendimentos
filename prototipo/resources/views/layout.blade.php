<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Atendimentos Infolution</title>
    <link rel="stylesheet" href="/css/foundation.min.css">
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css">
</head>

<body>

<nav class="navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <img alt="Brand" src="/Imagens/logo2.png" height="110px" width="110px">
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrativo <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="curso">Cadastrar Curso</a></li>
                    </ul>
                </li>
                <li><a href="#">Help</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container-fluid">
        <div class="col-md-2 row" id="navLateral">
            <ul class="nav nav-sidebar btn-ul" >
                <li><a href="/">Pendencias</a></li>
                <li><a href="/atendimento">Atendimentos</a></li>
                <li><a href="http://www.infolution.inf.br/licenca/">Gerar Chave</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
            </ul>
        </div>
        <div class="col-md-10 container divprincipal">
            @yield('conteudo')
        </div>
    </div>

<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
