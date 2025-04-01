<?php


echo "Este código está en la línea: " . __LINE__ . "<br>";  


echo "Ruta del archivo: " . __FILE__."<br>";

class ProbadordeConstantesMagicas{

    public function getFUNCTION(){
       return  "Esta funcion se llama:  ".__FUNCTION__;
    }
    public function MostrarNombreClasse(){
        return  " Esta Classe se llama: ".__CLASS__." nombre ";
   
    }
}

$constanteMagica = new ProbadordeConstantesMagicas();
echo $constanteMagica->getFUNCTION()."<br>";
echo $constanteMagica->MostrarNombreClasse();
?>