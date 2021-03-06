<?php
    $cabecalho_title = "Loja Mirror Fashion";
    include("cabecalho.php");
?>

    <div class="container destaque">
        
        <section class="busca">
            <h2>Busca</h2>
            <form>
                <input type="search">
                <input type="image" src="img/busca.png">
            </form>
        </section>

        <section class="menu-departamentos">
            <h2>Departamentos</h2>

            <nav>
                <ul>
                    <li>
                        <a href="#">Blusas e Camisas</a>
                        <ul>
                            <li><a href="#">Manga curta</a></li>
                            <li><a href="#">Manga comprida</a></li>
                            <li><a href="#">Camisa social</a></li>
                            <li><a href="#">Camisa casual</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Calças</a></li>
                    <li><a href="#">Saias</a></li>
                    <li><a href="#">Vestidos</a></li>
                    <li><a href="#">Sapatos</a></li>
                    <li><a href="#">Bolsas e Carteiras</a></li>
                    <li><a href="#">Acessórios</a></li>
                </ul>
            </nav>
        </section>

        <img src="img/destaque-home.png" alt="Promoção: Big City Night">
    </div>
    
    <div class="container paineis">
        
        <section class="painel novidades">
            <h2>Novidades</h2>
            <ol>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura1.png">
                            <figcaption>Fuzz Cardigan por R$ 129,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura2.png">
                            <figcaption>Camiseta básica por R$ 59,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura3.png">
                            <figcaption>Blazer por R$ 189,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura4.png">
                            <figcaption>Jaqueta por R$ 229,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura5.png">
                            <figcaption>Regata Lycra por R$ 49,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura6.png">
                            <figcaption>Regata básica por R$ 29,90</figcaption>
                        </figure>
                    </a>
                </li>
            </ol>
        </section>

        <section class="painel mais-vendidos">
            <h2>Mais Vendidos</h2>
            <ol>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura7.png">
                            <figcaption>Blusa sem gola por R$ 39,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura8.png">
                            <figcaption>Blusa ombros por R$ 79,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura9.png">
                            <figcaption>Camisa Xadrez por R$ 99,90</figcaption>
                        </figure>
                    </a>
                </li>
                <li>
                    <a href="produto.html">
                        <figure>
                            <img src="img/produtos/miniatura10.png">
                            <figcaption>Blusa Manga Longa por R$ 69,90</figcaption>
                        </figure>
                    </a>
                </li>
        </ol>
        </section>
    </div>
    <?php include("rodape.php"); ?>
</body>
</html>