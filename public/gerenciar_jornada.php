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
  <h3>Cadastrar Jornada</h3>
  <form>
    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="inputNome4">Profissional</label>
        <input type="nome" class="form-control" id="inputnome4">
      </div>
      <div class="form-group col-md-2">
        <label for="inputcpf4">Serviço</label>
        <select class="form-control"> 
          <option value="">Option 1</option>
          <option value="">Option 2</option>
          <option value="">Option 3</option>
          <option value="">Option 4</option>
        </select>
      </div>
      <div class="form-group col-md-1">
        <label for="inputNome4">1º Entrada</label>
        <input type="email" class="form-control" id="inputemail4">
      </div>
      <div class="form-group col-md-1">
        <label for="inputNome4">1º Saída</label>
        <input type="email" class="form-control" id="inputemail4">
      </div>
      <div class="form-group col-md-1">
        <label for="inputNome4">2º Entrada</label>
        <input type="email" class="form-control" id="inputemail4">
      </div>
      <div class="form-group col-md-1">
        <label for="inputNome4">2º Saída</label>
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
      <th>Profissional</th>
      <th>Serviço</th>
      <th>Turno 1 Entrada</th>
      <th>Turno 1 Saida</th>
      <th>Turno 2 Entrada</th>
      <th>Turno 2 Saida</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Nicole Copetti</td>
      <td>Corte de Cabelo</td>
      <td>08:00</td>
      <td>12:00</td>
      <td>14:00</td>
      <td>18:00</td>
      <td>
        <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-pen"></i></button>
        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
      </td>
    </tr>
    <tr>
      <td>Nicole Copetti</td>
      <td>Corte de Cabelo</td>
      <td>08:00</td>
      <td>12:00</td>
      <td>14:00</td>
      <td>18:00</td>
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