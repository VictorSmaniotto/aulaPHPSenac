<?php


require "controller/gerarController.php";
require "view/include/header.php";
?>

<body>

    <div>
        <header class="text-center">
            <h1>Gerador de Senha</h1>
            <h2>Senhas 1 de 1 | <a href="index.php">Voltar</a></h2>
        </header>
        <main class="main">

            <?php for ($contador = 1; $contador <= $limite; $contador++) : ?>
                <div class="senha">
                    <h2>SENHA</h2>
                    <h3><?= str_pad($contador, 4, 0, STR_PAD_LEFT) ?></h3>
                    <p>Aguarde o chamado!</p>
                </div>
            <?php endfor; ?>
        </main>

        <?php include "view/include/footer.php" ?>