<?php
include_once("cabecalho.php");
?>

<h4 class="text-primary" style="text-align: center;">HISTORICO DE COTAÇÕES</h4>
<div class="form-group">
  <button type="button" class="btn btn-primary btn-lg"><a href="index.php" class="text-white">RESULTADOS</a></button>

</div>
</div>
<fieldset>
  <hr>
</fieldset>
<div>
  <h4 class="text-primary" style="text-align: center;">RESULTADOS</h4>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>DATA DO PREGÃO</th>
        <th>CODIGO PAPEL</th>
        <th>VR ABERTURA</th>
        <th>VR FECHAMENTO</th>
        <th>VR MAXIMO</th>
        <th>VR MINIMO</th>
        <th>VR VOLUME</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include_once("ConnectionFactory_class.php"); //PDO
      

      $conF = new ConnectionFactory();
      $con = $conF->getConnection();


      if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        // Coleta os dados do formulário
        $id = $_GET['codigo'];

        //$result = $con->query("SELECT * FROM cotacoes WHERE codigo = " . $id);
        $result = $con->query("SELECT * FROM cotacoes WHERE codigoAcao = '" . $id . "'");

        foreach ($result as $linha) {
          //print_r($linha) ;
          //echo $linha["id"] . " - " . $linha["codigoAcao"] . "<br>";
          echo "<tr>";
          echo "<td>" . date('d/m/Y', strtotime($linha["data"])) . "</td>";
          echo "<td>" . $linha["codigoAcao"] . "</td>";
          echo "<td>" . $linha["abertura"] . "</td>";
          echo "<td>" . $linha["fechamento"] . "</td>";
          echo "<td>" . $linha["maxima"] . "</td>";
          echo "<td>" . $linha["minimo"] . "</td>";
          echo "<td>" . $linha["volume"] . "</td>";
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


  <?php
  include_once("rodape.php");
  ?>