<?php

use const Dom\SYNTAX_ERR;

function contador($num1, $num2) {
    switch ($num2) {
        case 1: 
            for($i = $num1; $i <= 10; $i++) {
                echo $i."<br>";
            }
            break;
     case 2: 
        for($i =0; $i <=10; $i+=2){
            echo $i."<br>";
        }
      break;
      case 3:    for($i =0; $i <=10; $i+=3){
        echo $i."<br>";
    }
    break;
    case 4:         for($i =0; $i <=10; $i+=4){
        echo $i."<br>";
    }
    break;
    case 5:  for($i =0; $i <=10; $i+=5){
        echo $i."<br>";
    }
break;
case 6: for($i =0; $i <=10; $i+=6){
    echo $i."<br>";
}
break;
case 7: for($i =0; $i <=10; $i+=7){

      echo $i."<br>";
}
break;
case 8: for($i =0; $i <=10; $i+=8){

    echo $i."<br>";
}
break;
case 9 : for($i =0; $i <=10; $i+=9){

    echo $i."<br>";
}
case 10 : for($i =0; $i <=10; $i+=10){

    echo $i."<br>";
}
break;
default: SYNTAX_ERR;
    }
}

contador(1,1);
echo  "<br>";
contador(0,2);
echo  "<br>";
contador(3, 3); 
echo  "<br>";
?>