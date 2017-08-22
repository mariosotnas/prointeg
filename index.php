<?php require_once "cabecalho.php";?>

<!--Faça a validação da Sessão aqui! -->
<?php 
  if(isset($_GET["falhaDeSeguranca"])){ 
?>
    <p class="alert-danger">Você não tem permissão de acesso!</p>
<?php  
  } 
?>

<?php 
  if(usuarioEstaLogado()){  //chame a função usuarioEstaLogado()
?>

<?php  
  }else{   
?>
    <div class="container">

      <div class="page-header">
        <center>
          <h1>ProInteg</h1>
        </center>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <div class="alert alert-info alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" arial-label="close">&times;</a>
            <strong>•</strong> Conecte-se para poder utilizar o sistema!
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="login">Login</label>
              <input type="text" class="form-control" id="login" name="login" autofocus required placeholder="Digite seu nome de usuário">
            </div>

            <div class="form-group"> 
              <label for="senha">Senha</label>
              <input type="password" class="form-control" id="senha" name="senha" required placeholder="Digite sua senha">
            </div>

            <button type="submit" class="btn btn-success btn-block">
              Logar &nbsp;<span class="glyphicon glyphicon-log-in"></span>
            </button>
          </form>
        </div>
      </div><!-- FIM DA ROW -->
    </div><!-- FIM DO CONTAINER-->

<!--Fechando o if da sessão:--> 
<?php  
  }   
?>
<!-- Rodapé: -->
<?php require_once 'rodape.php' ?>
