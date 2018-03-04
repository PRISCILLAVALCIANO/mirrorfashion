    <?php
        $cabecalho_title = "Produto da Mirror Fashion";
        include("cabecalho.php");
    ?>
    <div class="produto">
        <h1>Fuzzy Cardigan</h1>
        <p>por apenas R$ 129,00</p>

        <form>
            <fieldset class="cores">
                <legend>Escolha a cor:</legend>

                <input type="radio" name="cor" value="verde" id="verde" checked>
                <label for="verde">
                    <img src="img/produtos/foto2-verde.png" alt="verde">
                </label>

                <input type="radio" name="cor" value="rosa" id="rosa" checked>
                <label for="rosa">
                    <img src="img/produtos/foto2-rosa.png" alt="rosa">
                </label>

                <input type="radio" name="cor" value="azul" id="azul" checked>
                <label for="azul">
                    <img src="img/produtos/foto2-azul.png" alt="azul">
                </label>
            </fieldset>

            <input type="subimit" class="comprar" value="Comprar">
        </form>
    </div>









    <?php include("rodape.php"); ?>
</body>
</html>