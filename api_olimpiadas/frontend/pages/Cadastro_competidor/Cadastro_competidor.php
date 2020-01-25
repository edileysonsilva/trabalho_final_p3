<?php
    session_start();
    include_once("conexao.php");
    if (!empty($_SESSION['mensagem'])) {
        echo $_SESSION['mensagem'];
        unset($_SESSION['mensagem']);
      }

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SysCOB - Lançamento de dardos</title>
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/bootstrap.css">
  <link rel="stylesheet" href="node_modules/bootstrap/compiler/style.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
        aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="../../index.html">SysCOB</a>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-12 text-center my-3">
        <h2>Adicionar Resultado da competicação</h2>
      </div>
    </div>

<div class="container">

                        <form nome="programacao" action="processa.php" method="post">
                            <div class="form-group">
                                <div class="form-group">
                                    <label>Nome do Participante</label>
                                    <input type="text" name="nome" class="form-control" placeholder="Nome do Participante" required="required">
                                </div>
                              
                          
                            
                                <div class="form-group">
                                    <label>Seus lançamentos em metros</label>
                                    <!-- <input type="number" name="vagas" class="form-control" placeholder="Informe o numero de vagas" required="required"> -->
                                </div>


                                <div class="row">
                                    <div class="col-sm">
                                      <div class="form-group">
                                        <label>1º Lançamento</label>
                                        <input type="double" name="lan1" class="form-control" placeholder="" required="required">
                                      </div>
                                    </div>
                                  <div class="col-sm">
                                      <div class="form-group">
                                        <label>2º Lançamento</label>
                                        <input type="flout" name="lan2" class="form-control" placeholder="" required="required">
                                      </div>
                                    </div>
                                    <div class="col-sm">
                                      <div class="form-group">
                                        <label>3º Lançamento</label>
                                        <input type="double" name="lan3" class="form-control" placeholder="" required="required">
                                      </div>
                                    </div>
                                </div>



                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


                                
                              
                               <input type="submit" class="btn btn-success" name="enviar" class="bt" value="Enviar"> </input>
                        </form>
                        </div>



  </div>

  <script src="node_modules/jquery/dist/jquery.js"></script>
  <script src="node_modules/popper.js/dist/umd/popper.js"></script>
  <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

<!-- Footer -->
<footer class="page-footer font-small teal pt-4">

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="#">SysCOB</a>
  </div>

</footer>
<!-- Footer -->

</html>