<?php
  include_once("header.php");
?>

<h4 class="text-primary" style="text-align: center;">CADASTRO LANÇAMENTOS</h4>
<div style=" display: flex;justify-content: center;margin-top:2%;">
  <form action="consultaBase.php" method="GET">
    <div class="form-row">
      <div class="form-group col-md-4">

        <label for="codigo">Cod. ação</label>
        <select name="codigo" class="form-control">
          <option style="color: red;">CMIG4</option>
          <option style="color: red;">ITUB4</option>
          <option style="color: red;">BBAS3</option>
          <option style="color: red;">VALE3</option>
          <optipn>PETR4</optipn>
          <optipn>ITAU4</optipn>
          <option>PETR3</option>
          <optipn>BRAD4</optipn>
          <option>ELET3</option>
          <option>BRAS3</option>
          <option>LOCA3</option>
          <optipn>ITAU4</optipn>
          <option>PETR3</option>
          <optiunt style="color: red;">BTGP11</optiunt>
          <option style="color: red;">EQUA3</option>
          <option style="color: red;">RAIA3</option>
          <option style="color: red;">SUZA3</option>
          <option style="color: red;">REDE3</option>
          <optipn style="color: red;">GERD4</optipn>
          <option style="color: red;">RUMO3</option>
          <option style="color: red;">BBSE3</option>
          <option style="color: red;">VIBR3</option>
          <option style="color: red;">COSA3</option>
          <option style="color: red;">ULTR3</option>
          <option style="color: red;">SABE3</option>
          <option style="color: red;">BRAD3</option>
          <option style="color: red;">HAPV3</option>
          <option style="color: red;">ENEV3</option>
          <option style="color: red;">TELE3</option>
          <optipn style="color: red;">CEMI4</optipn>
          <option style="color: red;">ASSA3</option>
          <option style="color: red;">HYPE3</option>
          <optiunt style="color: red;">KLAB11</optiunt>
          <option style="color: red;">BRF 3</option>
          <option style="color: red;">LOJA3</option>
          <optipnb style="color: red;">COPE6</optipnb>
          <option style="color: red;">TOTV3</option>
          <option style="color: red;">EMBR3</option>
          <optiunt style="color: red;">ENER11</optiunt>
          <option style="color: red;">GRUP3</option>
          <option style="color: red;">CCR 3</option>
          <option style="color: red;">ALIA3</option>
        </select>
      </div>
      <div>
        <label for="tipoLancamento">Tipo</label>
        <select name="tipo" class="form-control">
          <option>Regração Linear</option>
          <option>Polinomial</option>
        </select>
      </div>
      <div>
        <label for="tipoLancamento">Tipo listagem</label>
        <select name="tipo" class="form-control">
          <option>Todos</option>
          <option>Mais relevante</option>
        </select>
      </div>
    </div>
    <br>
    <div class="form-group">
      <button type="submit" id="salvar" class="btn btn-primary" formaction="Lancamentos.php">Listar</button>
      <button type="submit" id="base" class="btn btn-primary" formaction="consultaBase.php">Listar cotação</button>

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
        <th>Tipo</th>
        <th>Cod. Papel</th>
        <th>Grau Polinomial</th>
        <th>Resultado</th>
      </tr>
    </thead>
    <?php
    include_once("ConnectionFactory_class.php"); //PDO
    

    $conF = new ConnectionFactory();
    $con = $conF->getConnection();


    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
      // Coleta os dados do formulário
      // $id = $_GET['codigo'];

      //$result = $con->query("SELECT * FROM cotacoes WHERE codigo = " . $id);
      $result = $con->query("SELECT * FROM resultados");

      foreach ($result as $linha) {

        echo "<tr>";
        echo "<td>" . $linha["tipo"] . "</td>";
        echo "<td>" . $linha["codigo"] . "</td>";
        echo "<td>" . $linha["grauPolinomial"] . "</td>";
        echo "<td>" . $linha["resultado"] . "</td>";
        echo "</tr>";
      }
      // Valida os dados do formulário
      if (empty($id)) {
        echo 'O nome é obrigatório.';
      }
    }
    ?>
    </tbody>
  </table>
</div>
</div>

<?php
include_once("rodape.php");
?>