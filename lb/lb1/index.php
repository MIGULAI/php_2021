<?php
    $stack = array(0 , 1 );
    $n = 100;
    for($i = 0 ; $i < $n; $i++){
        array_push($stack , $stack[$i]+$stack[$i + 1]);
    }
    for($i = 0 ; $i < $n; $i++){
        printf($stack[$i]."\n");
    }
?>