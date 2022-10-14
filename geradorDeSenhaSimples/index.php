<?php

session_start();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senha</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

        *
        {
            box-sizing: border-box;
        }

        body
        {
            font-family: 'Poppins', sans-serif;
            overflow: hidden;
        }
        #container
        {
            height: 100vh;
            display: flex;  
            justify-content: center;
            align-items: center;
            
        }
        
        #geral
        {
            width: 400px;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 2px 5px 10px 3px #c7c7c7;
            padding-top: 20px;
            padding-right: 20px;
            padding-left: 20px;
            text-align: left;
            

        }
        .btn
        {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 1.2rem;
        }
        
        .btn-laranja
        {
            background-color: #ffa500;
        }

        form input
        {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            border-radius: 5px;
            border: 1px solid #ccc;

        }

        .alerta
        {
            padding: 10px;
            background-color: #ffe6e6;
            color: #ff0000;
        }
    </style>
</head>
<body>
    
   <div id="container">
    <div id="geral">

        <?php if(isset($_SESSION['alerta'])): ?>

        <div class="alerta">
            <?=$_SESSION['alerta']?>
        </div>

        <?php
            unset($_SESSION['alerta']);
            endif;
        ?>

        <header>
            <h1>Gerador de Senha</h1>
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

