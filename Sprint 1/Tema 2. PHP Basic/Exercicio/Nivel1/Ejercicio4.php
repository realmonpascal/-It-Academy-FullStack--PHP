<?php

use const Dom\SYNTAX_ERR;

function contador($num1, $conta) {

for($i=0;$i<10; $i +=$conta){
   echo "<br>".$num1+$i;
}
}

contador(1,1);
echo  "<br>";
contador(0,2);
echo  "<br>";
contador(3, 5); 
echo  "<br>";
?>