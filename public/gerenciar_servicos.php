<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="../public/js/funcoes.js"></script>    
    <link href="<?php echo base_url(); ?>assets/bootstrap-select-1.13.9/dist/css/bootstrap-select.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">
</head>
<body ng-app="">
<div ng-include="'menu.php'"></div>
<div class="main">
  <form>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputNome4">Descrição Serviço</label>
        <input type="nome" class="form-control" id="inputnome4">
      </div>
      <div class="form-group col-md-2">
        <label for="inputcpf4">Valor</label>
        <input type="cpf" class="form-control" id="inputcpf4">
      </div>
      <div class="form-group col-md-2">
        <label for="inputNome4">Tempo</label>
        <input type="email" class="form-control" id="inputemail4">
      </div>
      <div class="form-group col-md-2">
        <button type="button" style="margin-top: 32px;" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </form>

  <table class="table">
  <thead>
    <tr>
      <th>Serviço</th>
      <th>Valor</th>
      <th>Tempo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Corte Cabelo</td>
      <td>R$ 70,00</td>
      <td>30 min</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>
    <tr>
      <td>Corte Cabelo</td>
      <td>R$ 70,00</td>
      <td>30 min</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>
  </tbody>
</table>
</div>
</body>
</html> 