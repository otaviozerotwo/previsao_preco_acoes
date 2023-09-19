<?php
include_once("cabecalho.php");
?>

<h4 class="text-primary" style="text-align: center;">CADASTRO LANÇAMENTOS</h4>
<div style=" display: flex;justify-content: center;margin-top:2%;">
  <form action="" method="GET">
    <div class="form-row">
      <div class="form-group col-md-4">

        <label for="tipoLancamento">Cod. ação:</label>
        <select name="tipo" class="form-control">
          <option>CMIG4</option>
          <option>ITUB4</option>
          <option>BBAS3</option>
        </select>
        <label for="valor">Pregão</label>
        <input type="number" class="form-control" name="valor" placeholder="0,00" required>

      </div>
      <div>
        <label for="tipoLancamento">Tipo</label>
        <select name="tipo" class="form-control">
          <option>Regração Linear</option>
          <option>Polinomial</option>
        </select>
        <div class="form-check">
        </div>
      </div>
    </div>

    <div class="form-group">
      <button id="voltar" type="button" class="btn btn-primary">Voltar</button>
      <button type="submit" id="salvar" class="btn btn-primary">Salvar</button>
    </div>
</div>
</form>
<fieldset>
  <hr>
</fieldset>
<div>
  <h4 class="text-primary" style="text-align: center;">RESULTADOS</h4>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Nº</th>
        <th>Data</th>
        <th>Valor</th>
        <th>Descriminação</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>01/01/2023</td>
        <td>150,00</td>
        <td>Pagamento forncedor X</td>
      </tr>
      <tr>
        <td>2</td>
        <td>01/03/2023</td>
        <td>1835,89</td>
        <td>Pagamento forncedor Y</td>
      </tr>
      <tr>
        <td>3</td>
        <td>01/05/2023</td>
        <td>2369,54</td>
        <td>Pagamento forncedor Z</td>
      </tr>
    </tbody>
  </table>
</div>
</div>
<?php
include_once("rodape.php");
?>