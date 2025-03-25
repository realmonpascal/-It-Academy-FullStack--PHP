<?php
function  calculoCosteXocolate($xocolate){
 return $coste=1*$xocolate;
}
function calculoCosteChicles($chicles){
   return $coste= 0.5*$chicles;
}
function calculoCosteCaramelos($caramelos){
     return $coste= 1.5*$caramelos;
}

echo "Precio Total ". calculoCosteXocolate(2)+calculoCosteChicles(1)+calculoCosteCaramelos(1)."€";
?>