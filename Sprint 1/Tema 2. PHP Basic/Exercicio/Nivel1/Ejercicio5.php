<?php
function verificacioDeGrau($nota){
  echo $nota."% ";
    if($nota>=60){
        return "Primera divisio";
    }
    elseif($nota<=59&& $nota>=45){
       return " Segona divisio";
    }
    elseif($nota<=44&& $nota>=33){
        return " Tercera divisio";
    }
    else{ return "Reprovarà";
    }


}
echo verificacioDeGrau(40)."<br>";
echo verificacioDeGrau(65)."<br>";
echo verificacioDeGrau(47)."<br>";
echo verificacioDeGrau(30)."<br>";
?>