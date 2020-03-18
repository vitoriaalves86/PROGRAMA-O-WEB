<?php

$nome = $_POST["nome"];
echo "<br>Nome: ", $nome;

$estadocivil = $_POST["estadocivil"];
echo "<br>Estado Civil: ", $estadocivil;
 
$sexo = $_POST["sexo"];
echo "<br>Sexo: ", $sexo;


$hobby = $_POST["hobby"];
echo "<br>Hobby: ", $hobby[0];

foreach($hobby as $valor){
    echo $valor, " ";
    
}


?>
    
