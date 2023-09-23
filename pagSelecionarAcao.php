<?php
    include_once("header.php");
?>

<main class="w-100 m-auto">
    <div class="container-fluid text-center">
        <h1 class="my-4">Previsão Preços Ações</h1>
        <h4 class="my-5">Aprendizado semi-supervisionado</h4>
    </div>

    <div class="container my-4">
        <form action="consultaBase.php" method="GET">
            <div class="form-group">
                <div class="col-md-6 offset-md-3">
                    <label for="codigo" class="h4">SELECIONE A AÇÃO</label>
                    <select name="codigo" class="form-select">
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