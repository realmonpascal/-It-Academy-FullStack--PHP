<?php
function isBitten() {
    return rand(0,1)==1;
}
if(isBitten()){
echo "Charlie te ha mordido el dedo";
}else{
    echo"Charlie no te ha mordido el dedo";

}
?>