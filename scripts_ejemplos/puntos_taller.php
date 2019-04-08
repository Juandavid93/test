<?php
print "1) Numeros de 1 a 10 sin ningun tipo de bucle";
echo "<hr>";
$array = array(1,2,3,4,5,6,7,8,9,10);

echo $array[0];
echo $array[1];
echo $array[2];
echo $array[3];
echo $array[4];
echo $array[5];
echo $array[6];
echo $array[7];
echo $array[8];
echo $array[9];

echo "<hr>";

print "2) Numeros de 1 a 10 con bucle";

echo "<table border ='1'>";
for($i=1;$i<=10;$i++)
{
  if($i%2==0){

	echo"<tr><td bgcolor='YELLOW'>".$i."</td></tr>";
  }else{
	echo"<tr><td bgcolor='GREEN'>".$i."</td></tr>";
  }
  }

echo "</table>";

echo"<hr>";

echo "<table border ='1'><tr>";
for($i=1;$i<=10;$i++)
{
  if($i%2==0){

	echo"<td bgcolor='YELLOW'>".$i."</td>";
  }else{
	echo"<td bgcolor='GREEN'>".$i."</td>";
  }
  }

echo "</tr></table>";

echo"<hr>";

print "3) Numeros de 1 a 100 con bucle";

echo "<table border ='1'><tr>";
for($i=1;$i<=100;$i++)
{
  if($i%2==0){

	echo"<td bgcolor='YELLOW'>".$i."</td>";
  }else{
	echo"<td bgcolor='GREEN'>".$i."</td>";
  }
  }

echo "</tr></table>";


echo"<hr>";

print "4) Primeros 100 nuemros naturales de 2 en 2";
echo "<br>";
echo "<br>";
$n=2;
while ($n<= 100) {
 echo $n."  ";
  $n=$n+2; 
}


echo"<hr>";

print "5) Numeros aleatorios de 1 a 10 con funcion ran()";
echo "<br>";
echo "<br>";
for ($i=1;$i<=10;$i++) {
    $aleatorio = rand(1,150);
    echo $aleatorio." ";
    }


    echo"<hr>";

    print "6) Suma de los primeros 100 numeros naturales";
    echo "<br>";
    echo "<br>";
    $num=1;
    $suma=0;
    while ($num <=100) {
          $suma = $num +$suma;
          $num++;
          }
          echo $suma;


    echo"<hr>";

     print "7) Multiplos de 3 comprendidos en la serie de 1 a 100";
     echo "<br>";
     echo "<br>";
     $num=1;
     while ($num <=100) {
           if ($num%3==0){
             echo $num." ";
              }
           $num++;
           }

           echo"<hr>";

           print "8) Escriba un Script en PHP que genere aleatoriamente 10 números
           enteros positivos y los muestre por pantalla, y visualice además el
           siguiente reporte en una tabla HTML:
           - Total de números pares generados.
           - Total de números impares generados";

    echo "<br>";
    echo "<br>";
           $par=0;
           $impar=0;
           for ($i=1;$i<=10;$i++) {
               $aleatorio = rand(1,100);
               if ($aleatorio%2==0) {
                 $par=$par+1;
               }
               else {
                 $impar=$impar+1;
               }
               echo $aleatorio." ";
               }
           

     
    











?>