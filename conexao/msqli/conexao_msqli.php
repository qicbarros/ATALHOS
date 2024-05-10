<?php

$servidor="localhsost";
$conectar=new mysqli($servidor, "root", "", "loja");
if($conectar->connect_errno){
echo "erro ao conectar ! <br>";
echo "Erro:". $conectar->connect_error;
}