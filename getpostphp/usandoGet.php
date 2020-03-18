<?php

$nome = $_GET["nome"];
echo "<br>Nome: ", $nome;

$estadocivil = $_GET["estadocivil"];
echo "<br>Estado Civil: ", $estadocivil;
 
$sexo = $_GET["sexo"];
echo "<br>Sexo: ", $sexo;


$hobby = $_GET["hobby"];
echo "<br>Hobby: ", $hobby[0];

foreach($hobby as $valor){
    echo $valor, " ";
    
}


?>
    
