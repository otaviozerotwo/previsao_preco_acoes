<?php
include_once("cabecalho.php");
?>

<h2 class="text-primary" style="text-align: center;">CADASTRO LANÇAMENTOS</h2>
<BR>
<div style=" display: flex;justify-content: center;margin-top:2%;">
  <form action="" method="GET">
    <div class="form-row">
      <div class="form-group col-md-4">
        <label for="valor">Data</label>
        <input type="date" class="form-control" name="data" placeholder="00/00/0000" required>

        <label for="tipoLancamento">Tipo</label>
        <select name="tipo" class="form-control">
          <option>Receita</option>
          <option>Despesa</option>
        </select>

      </div>
      <div>
        <label for="valor">Valor</label>
        <input type="number" class="form-control" name="valor" placeholder="0,00" required>
        <br><br>
        <div class="form-check">
        <input class="form-check-input" type="checkbox" id="meuCheckbox">
        <label class="form-check-label" for="Consolidada">Consolidado</label>
      </div>

      </div>


      <div class="form-group col-md-8">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricao" placeholder="Descrição" required></textarea>
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
  <h4 class="text-primary" style="text-align: center;">Relação de Lançamentos</h4>
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

<script>
  window.addEventListener('DOMContentLoaded', () => {
    const table = document.querySelector('table');
    const thElements = table.querySelectorAll('th');

    thElements.forEach((th) => {
      th.style.width = `${th.offsetWidth}px`;
    });
  });
</script>

<?php
include_once("rodape.php");
?>