<?php
    include_once("header.php");
?>

<main class="w-100 m-auto">
    <div class="container">
      <div class="col-md-10 offset-md-1">
        <h1 class="my-4  text-center">Dados Carregados</h1>
        <h4 class="mt-5">HISTÓRICO DE COTAÇÕES</h4>
        
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

        <div class="form-group">
          <div class="col-md-6 offset-md-3">
            <button type="button" id="btn-voltar" class="btn btn-primary w-100 py-2 my-4">
              <a href="pagSelecionarTipoRegressao.php">PRÓXIMO</a></button>
          </div>

          <div class="col-md-6 offset-md-3 botoes-modificada">
            <button type="button" id="btn-proximo" class="btn btn-primary w-100 py-2 my-4">
              <a href="index.php">VOLTAR</a>
            </button>
          </div>
        </div>
      </div>
    </div>
</main>

<?php
    include_once("footer.php");
?>