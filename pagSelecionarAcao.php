<?php
include_once("header.php");
?>

<main class="w-100 m-auto">
    <div class="container-fluid text-center">
        <h1 class="my-4">Previsão Preços Ações</h1>
        <h4 class="my-5">Aprendizado semi-supervisionado</h4>
    </div>

    <div class="container my-4 container-modificado">
        <form action="consultaBase.php" method="GET">
            <div class="form-group">
                <div class="col-xs-6 col-md-6 col-lg-6 offset-md-3">
                    <label for="codigo" class="h4">SELECIONE A AÇÃO</label>
                    <select name="codigo" class="form-select">
                        <option style="color: green;">VALE3</option>
                        <option style="color: green;">PETR4</optipn>
                        <option style="color: green;">ITUB4</option>
                        <option style="color: green;">PETR3</option>
                        <option style="color: green;">BBDC4</option>
                        <option style="color: green;">B3SA3</option>
                        <option style="color: green;">BRAS3</option>
                        <option style="color: green;">ELET3</option>
                        <optipn style="color: red;">BRAD4</option>
                        <option style="color: red;">LOCA3</option>
                        <option style="color: red;">BBAS3</option>
                        <option style="color: red;">BTGP11</option>
                        <option style="color: red;">EQUA3</option>
                        <option style="color: red;">RAIA3</option>
                        <option style="color: red;">SUZA3</option>
                        <option style="color: red;">REDE3</option>
                        <option style="color: blue">GERD4</optipn>
                        <option style="color: blue">RUMO3</option>
                        <option style="color: blue">VIBR3</option>
                        <option style="color: blue">COSA3</option>
                        <option style="color: blue">BBSE3</option>
                        <option style="color: blue">ULTR3</option>
                        <option style="color: blue">SABE3</option>
                        <option style="color: blue">BRAD3</option>
                        <option style="color: blue">HAPV3</option>
                        <option style="color: blue">ENEV3</option>
                        <option style="color: blue">TELE3</option>
                        <option style="color: blue">CMIG4</option>
                        <option style="color: red;">ASSA3</option>
                        <option style="color: red;">HYPE3</option>
                        <option style="color: red;">KLAB11</option>
                        <option style="color: red;">BRF 3</option>
                        <option style="color: red;">LOJA3</option>
                        <option style="color: red;">COPE6</option>
                        <option style="color: red;">TOTV3</option>
                        <option style="color: red;">EMBR3</option>
                        <option style="color: red;">ENER11</option>
                        <option style="color: red;">GRUP3</option>
                        <option style="color: red;">CCR 3</option>
                        <option style="color: red;">ALIA3</option>
                    </select>
                </div>

                <div class="form-group">
                    <div class="col-md-6 offset-md-3 botoes-modificada">
                        <button type="submit" id="btn-carregar-dados" class="btn btn-primary w-100 py-2 my-4">CARREGAR DADOS</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>

<?php
include_once("footer.php");
?>