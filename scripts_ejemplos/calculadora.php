<?php
$num1 = $_POST["n1"];
$num2 = $_POST["n2"];
$oper = $_POST["tipo_op"];
$resul=0;

echo "numero1:".$num1."<br>";
echo "numero2:".$num2."<br>";
echo "tipo_op:".$oper."<br>";

if($oper=="1")
$resul = $num1 + $num2;
else
if($oper=="2")
$resul = $num1 - $num2;
else
if($oper=="3")
$resul = $num1 * $num2;
else
$resul = $num1/$num2;

echo"Resultado:".$resul;

?>