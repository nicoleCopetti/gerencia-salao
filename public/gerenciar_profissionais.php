<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../public/css/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="../public/js/funcoes.js"></script>
</head>
<body ng-app="">
<div ng-include="'menu.php'"></div>
<div class="main">
  <form>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputNome4">Nome</label>
        <input type="nome" class="form-control" id="inputnome4" placeholder="Nome">
      </div>
      <div class="form-group col-md-2">
        <label for="inputcpf4">CPF</label>
        <input type="cpf" class="form-control" id="inputcpf4" placeholder="Cpf">
      </div>
      <div class="form-group col-md-3">
        <label for="inputNome4">Email</label>
        <input type="email" class="form-control" id="inputemail4" placeholder="Email">
      </div>
      <div class="form-group col-md-2">
        <label for="inputtelefone4">Telefone</label>
        <input type="telefone" class="form-control" id="inputtelefone4" placeholder="Telefone">
      </div>
      <div class="form-group col-md-2">
        <button type="button" style="margin-top: 32px;" class="btn btn-success">Cadastrar</button>
      </div>
    </div>
  </form>

  <table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>CPF</th>
      <th>Email</th>
      <th>Celular</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nicole Copetti</td>
      <td>101.943.849-50</td>
      <td>nicole.copetti@hotmail.com</td>
      <td>(049) 98874-7895</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>
    <tr>
      <td>Nicole Copetti</td>
      <td>101.943.849-50</td>
      <td>nicole.copetti@hotmail.com</td>
      <td>(049) 98874-7895</td>
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