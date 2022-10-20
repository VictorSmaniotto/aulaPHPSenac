<?php

session_start();


require "view/include/header.php";

?>

<body class="overflow-h">

    <div id="container">
        <div id="geral">

            <?php if (isset($_SESSION['alerta'])) : ?>

                <div class="alerta">
                    <?= $_SESSION['alerta'] ?>
                </div>

            <?php
                unset($_SESSION['alerta']);
            endif;
            ?>

            <header>
                <h1 class="text-left">Gerador de Senha</h1>
            </header>
            <main>
                <form action="gerar.php" method="GET">
                    <p>
                        <label for="limite">Limite de Senha:</label><br>
                        <input type="text" name="limite" id="limite">
                    </p>
                    <p>
                        <button type="submit" class="btn btn-laranja">Gerar Senha</button>
                    </p>
                </form>
            </main>
            <footer>
                <p>Copyright - 2022 | Desenvolvido por <a href="https://github.com/VictorSmaniotto/" style="text-decoration: none;">Victor</a></p>
            </footer>
        </div>
    </div>


</body>

</html>