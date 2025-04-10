<?php

function is_here($item,$block_l=["o","r","O","R","'"]){
    foreach($block_l as $block){
        for($i=0;$i<strlen($item);$i++){
        if($block==$item[$i]){
            return true;
        }
    }
    }
}

?>
