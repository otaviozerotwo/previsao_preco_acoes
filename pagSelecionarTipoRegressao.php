<?php
    include_once("header.php");
    include_once("ConnectionFactory_class.php"); //PDO
              
    $conF = new ConnectionFactory();
    $con = $conF->getConnection();
?>

<main class="w-100 m-auto">
    <div class="container-fluid text-center">
        <h1 class="my-4">Regressão</h1>
        <h4 class="my-5">Escolha o tipo de regressão</h4>
    </div>

    <form action="pagResultados.php" method="GET">
        <div class="col-md-6 offset-md-3">
            <div class="form-group pb-4">
                <label class="h4" for="tipoLancamento">TIPO</label>
                <select name="tipo" class="form-select">
                    <option>Regressão Linear</option>
                    <option>Polinomial</option>
                </select>
            </div>
            
            <!-- <div class=" pb-4">
                <label class="h4" for="tipoLancamento">TIPO LISTAGEM</label>
                <select name="tipo" class="form-select">
                    <option>Todos</option>
                    <option>Mais relevante</option>
                </select>
            </div> -->
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <button type="submit" id="btn-voltar" class="btn btn-primary w-100 py-2 my-4">PRÓXIMO</button>
            </div>

            <div class="col-md-6 offset-md-3 botoes-modificada">
                <button type="button" id="btn-proximo" class="btn btn-primary w-100 py-2 my-4">
                    <a href="index.php">VOLTAR</a>
                </button>
            </div>
        </div>
    </form>
</main>

<?php
    include_once("footer.php");
?>