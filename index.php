<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> Revisão de comandos PHP</P>

    <h1> 1. Escrevendo em PHP</h1>

<?php
echo "Hello Word!";
?> 

<p> 2. Não diferencia entre maicula e miniscula</p>
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?> 


<p>  3. variaveis são case sensitive</p>
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
<h1> Comentários</h1>
<p> 4. comentário de linha única</p>
<?php
echo "// This is a single-line comment" . "<br>";

echo "# This is also a single-line comment" . "<br>";
?>

<p> 5. Comentário de muitas linhas</P>
<?php

echo "/*
This is a multiple-lines comment block
that spans over multiple
lines
*/"
?>

<p> 6. Deixar parte do código como comentário e parte fora</p>
<?php
echo "// You can also use comments to leave out parts of a code line" . "<br>";
echo $x = 5 /* + 15 */ + 5;
echo $x;
?>

<h1> Variáveis</h1>
<p> 7. criando variáveis</p>
<?php
$txt = "Hello world!"; // $ declarando e TXT é nome da variável = atribuição  e "hello Word" é o valor que foi atribuído a variavel TXT.
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y; 
echo "<br>";

echo " $ declarando a variavel, e TXT é nome da variável"
//echo " = atribuição e hello Word é o valor que foi atribuído a variavel TXT"
?>


<p> 8. variavel global</p>
<?php
$x = 5; // global scope
 
function myTest() {
// using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

<p> 9. VARIAVE DE ESCOPO LOCAL</P>
<?php
function myTest2() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

<P> 10. UTILIZANDO COMANDO PARA CHAMAR VARIAVEL GLOBAL DENTRO DE UMA FUNÇAO</P>
<?php
$x = 5;
$y = 10;

function myTest3() {
  global $x, $y;
  $y = $x + $y;
} 

myTest3();  // run function
echo $y; // output the new value for variable $y
?>

<P> 11. UTILIZANDO MATRIZ PARA ACESSAR A VARIAVEL GLOBAL</P>
<?php
$x = 5;
$y = 10;

function myTest4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

myTest();
echo $y;
?>

<P> 12. USAR PALAVRA CHAVE PARA PERMITIR QUA A VARIAVEL NAO SEJA EXCLUIDA APÓS A EXECUÇAO</P>
<?php
function myTest5() {
  static $x = 0;
  echo $x;
  $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 





</body>
</html>