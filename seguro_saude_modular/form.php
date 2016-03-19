<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Seguro Saúde</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">

      <?php require_once("cabec.inc"); ?>

      <form class="form-horizontal" method="post" action="calculo.php">

        <h2>Entre com seus dados para o cálculo do prêmio</h2>

        <div class="form-group">
          <label class="col-sm-2 control-label" for="nome">Nome</label>
          <div class="col-sm-10">
            <input type="text" name="nome" id="nome" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Faixas Etária:</label>
          <div class="col-sm-10">
              <select class="form-control" name="faixaEtaria" size="1">
                <option value="0">20 ou menos</option>
                <option value="1">De 21 até 30</option>
                <option value="2">De 31 até 40</option>
                <option value="3">De 41 até 50</option>
                <option value="4">De 51 até 65</option>
                <option value="5">66 ou mais</option>
              </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="doencaPrevia" value="S">Possuo doença prévia
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
        </div>

      </form>

    </div>
  </body>
</html>
