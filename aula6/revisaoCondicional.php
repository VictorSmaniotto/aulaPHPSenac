<?php

$nome = 'Victor Smaniotto';
$idade = 24;
$email = 'victor.rsmaniotto@senacsp.edu.br';
$senha = 'abc12345';
$cursos = ['PHP', 'HTML', 'CSS'];


echo '<h1>Trabalhando com Estrutura Condicional</h1>';

echo '<h2>Exemplo de if Ternário</h2>';

echo ($idade >= 18)? "Maior de Idade" : "Menor de Idade";



echo '<hr>';
echo '<h2>Exemplo de if(se...)</h2>';

if($idade)
{
    echo "O usuário $nome é maior de idade";
}

echo '<hr>';
echo '<h2>Exemplo de if e else </h2>';

if($email == 'victor.rsmaniotto@senacsp.edu.br' && $senha == 'abc12345')
{
    echo 'Usuário Logado';
} else 
{
    echo 'Usuário ou Senha Inválidos';
}

echo '<hr>';
echo '<h2>Exemplo 2 de if e else</h2>';

if($email == 'victor.rsmaniotto@senacsp.edu.br')
{
    if($senha == 'abc12345')
    {
        echo 'Usuário Logado';
    }else
    {
        echo 'Usuário ou Senha Inválidos';
    }
    
} else 
{
    echo 'Usuário ou Senha Inválidos';
}

echo '<hr>';
echo '<h2>Exemplo de Multiplas Condições</h2>';

$num1 = 10;
$num2 = 20;

if($num1 == $num2)
{
    echo 'Os números são iguais';
} else if ($num1 > $num2)
    {
        echo 'O número 1 é maior que o número 2';
    }else
    {
        echo 'O número 2 é maior que o número 1';
    }

echo '<hr>';
echo '<h2>Exemplo de GET</h2>';
$menu = $_GET['menu'] ?? "Home";

switch(strtolower($menu))
{
    case "Home":
        echo "Página Principal";
        break;
    case "Empresa":
        echo "Página Empresa";
        break;
    case "Produtos":
        echo "Página Produtos";
        break;
    case "Contato":
        echo "Página Contato";
        break;
    default:
        echo "Página 404";
}