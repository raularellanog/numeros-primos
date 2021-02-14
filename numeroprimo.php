<?php
function primo($numero){
    if(is_numeric($numero)){
        $bool='true';
        $numero=round(abs($numero));
        if($numero==1){
            return $bool;
        }
        else{
            
            for($i=2;$i<$numero;$i++){
                if(($numero%$i)==0){
                    $bool='false';
                    break;
                }
            }
            return $bool;
        }
    }else{
        echo 'no es un número';
    }
}
?>