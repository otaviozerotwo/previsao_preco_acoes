<?php
    include_once("header.php");
?>

<main class="w-100 m-auto">
    <div class="container">
        <div class="col-md-10 offset-md-1">
            <h1 class="my-4  text-center">Resultados</h1>

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Cod. Papel</th>
                        <th>Grau Polinomial</th>
                        <th>Resultado</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include_once("ConnectionFactory_class.php"); //PDO
                    
                        $conF = new ConnectionFactory();
                        $con = $conF->getConnection();


                        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
                            $tipo = $_GET['tipo'];

                            $stmt = $con->prepare("SELECT * FROM resultados WHERE tipo = ?");
                            $stmt->execute([$tipo]);

                            while ($linha = $stmt->fetch(PDO::FETCH_ASSOC)){
                                echo "<tr>";
                                echo "<td>" . $linha["tipo"] . "</td>";
                                echo "<td>" . $linha["codigo"] . "</td>";
                                echo "<td>" . $linha["grauPolinomial"] . "</td>";
                                echo "<td>" . $linha["resultado"] . "</td>";
                                echo "</tr>";
                            }
                        }
                    ?>
                </tbody>
            </table>

            <div class="form-group">
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