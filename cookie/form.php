<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">

      <form class="form-horizontal" method="post" action="cookie.php">

        <h2>Registre-se no site</h2>

        <div class="form-group">
          <label class="col-sm-2 control-label" for="nomeCompleto">Nome Completo</label>
          <div class="col-sm-10">
            <input type="text" name="nomeCompleto" id="nomeCompleto" class="form-control" 
				value="<?= $_COOKIE['nome_cookie'] ?>"  />
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label" for="senha">Senha</label>
          <div class="col-sm-10">
            <input type="password" name="senha" id="senha" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
              <label>
                <input type="checkbox" name="aceitaLista" value="S">Desejo receber a lista de notícias do site
              </label>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Sexo</label>
          <div class="col-sm-10">
            <label class="radio-inline">
              <input type="radio" name="sexo" id="sexoM" value="M" checked="checked">&nbsp;Masculino
            </label>
            <label class="radio-inline">
              <input type="radio" name="sexo" id="sexoF" value="F">&nbsp;Feminino
            </label>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Tecnologias:</label>
          <div class="col-sm-10">
              <p class="help-block">Use a tecla control pressionada para marcar mais de uma opção</p>
              <select multiple class="form-control" name="tecnologias[]">
                <option value="bd">Banco de dados</option>
                <option value="php">PHP</option>
                <option value="js">JavaScript</option>
                <option value="sql">SQL</option>
                <option value="html">HTML</option>
                <option value="java">Java</option>
              </select>
          </div>
        </div>

        <div class="form-group">
          <label class="col-sm-2 control-label">Estado (UF)</label>
          <div class="col-sm-10">
            <select class="form-control" name="uf">
              <option value="RJ">Rio de Janeiro</option>
              <option value="SP">São Paulo</option>
              <option value="MG">Minas Gerais</option>
              <option value="RS">Rio Grande do Sul</option>
              <option value="ES">Espírito Santo</option>
              <option value="RN">Rio Grande do Norte</option>
            </select>
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
