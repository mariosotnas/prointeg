<?php require_once "funcoes.php";?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>PROINTEG</title>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

  <link href="css/estilo.css" rel="stylesheet">

  <!-- Bootstrap -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome-->
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- JavaScript de Validação -->
  <script type="text/javascript" src="js/jquery.maskedinput.min.js"></script>
  <script type="text/javascript" src="js/jquery.maskMoney.js" ></script>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body id="mg-topo">

  <!--Faça um if aqui verificando se o usuário está logado (chame a função usuarioEstaLogado() :-->

<?php 
  if (usuarioEstaLogado()){  
?> 

    <!--Se o usuário estiver logado, aparecerá o seguinte menu:-->

    <nav class="navbar navbar-inverse navbar-fixed-top navbar-detalhes" role="navigation">

      <div class="navbar-header">

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
          <span class="sr-only">Alternar navegação</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.php"><!--i class="fa fa-circle-o-notch fa-spin fa-1x fa-fw"></i--> ProInteg</a>

      </div>

      <div class="collapse navbar-collapse" id="bar1">
        <ul class="nav navbar-nav navbar-left">

          <li class="active"><a href="index.php"><i class="fa fa-home fa-1x" aria-hidden="true"></i>&nbsp;Home</a></li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-users fa-1x" aria-hidden="true"></i>&nbsp;Clientes
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="form-cadastro-clientes.php">
                  <i class="fa fa-user-plus fa-1x" aria-hidden="true"></i>&nbsp;Novo
                </a>
              </li>

              <li>
                <a class="dropdown-item" href="form-pesquisa-clientes.php">
                  <i class="fa fa-search fa-1x" aria-hidden="true"></i>&nbsp;Pesquisar
                </a>
              </li>

              <li role="separator" class="divider"></li>

              <li>
                <a class="dropdown-item" href="lista-clientes.php">
                  <i class="fa fa-list fa-1x" aria-hidden="true"></i>&nbsp;Listar Todos
                </a>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-users fa-1x" aria-hidden="true"></i>&nbsp;Funcionários
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="form-cadastro-funcionarios.php">
                  <i class="fa fa-user-plus fa-1x" aria-hidden="true"></i>&nbsp;Novo
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="form-pesquisa-funcionarios.php">
                  <i class="fa fa-search fa-1x" aria-hidden="true"></i>&nbsp;Pesquisar
                </a> 
              </li>

              <li role="separator" class="divider"></li>
              
              <li>
                <a class="dropdown-item" href="form-registro-vales.php">
                  <i class="fa fa-plus fa-1x" aria-hidden="true"></i>&nbsp;Novo Vale
                </a>
              </li>

              <li>
                <a class="dropdown-item" href="form-pesquisa-vales.php">
                  <i class="fa fa-search fa-1x" aria-hidden="true"></i>&nbsp;Buscar Vale
                </a>
              </li>
            </ul>
          </li>

          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-shopping-cart fa-1x" aria-hidden="true"></i>&nbsp;Vendas
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="form-registro-vendas.php">
                  <i class="fa fa-plus fa-1x" aria-hidden="true"></i>&nbsp;Nova
                </a>
              </li>

              <li>
                <a class="dropdown-item" href="form-pesquisa-vendas.php">
                  <i class="fa fa-search fa-1x" aria-hidden="true"></i>&nbsp;Pesquisar
                </a>
              </li>
            </ul>
          </li>
 
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-usd fa-1x" aria-hidden="true"></i>&nbsp;Financeiro
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a class="dropdown-item" href="form-fechamentoDia.php">
                  <i class="fa fa-pie-chart fa-1x" aria-hidden="true"></i>&nbsp;Fechamento
                </a>
              </li>

              <li>
                <a class="dropdown-item" href="#">
                  <i class="fa fa-line-chart fa-1x" aria-hidden="true"></i>&nbsp;Resumo do mês
                </a>
              </li>
            </ul>
          </li>
         
        </ul><!--Finalizando o menu-->

        <div class="collapse navbar-collapse" id="bar1">
          <ul class="nav navbar-nav navbar-right">

            <li class="dropdown">
              <a class="dropdown-toggle" id="user" data-toggle="dropdown" href="#">
                <i class="fa fa-user-circle-o fa-1x" aria-hidden="true"></i>&nbsp; <?=usuarioLogado();?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="logout.php">
                    <span class="glyphicon glyphicon-log-out"></span>Sair
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </div>

    </nav>
<!--Fechando o if:-->
<?php  
  }   
?>