<?php
function SequenciaCrescente($array, $element){
    unset($array[$element]);
    $new = array_values($array);
    for($i=1; $i<count($new); $i++){
        if($new[$i-1] <= $new[$i]){
            return true;
        }else{
            return false;
        }
    }
}

SequenciaCrescente();