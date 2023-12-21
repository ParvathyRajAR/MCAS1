<?php
function fibonacci($n){
    $a = 0;
    $b = 1;
    echo "Fibonacci Series up to $n terms:\n";
    echo "$a, $b";
    for($i = 1; $i < $n-2; $i++){
        $c = $a + $b;
        echo ", $c";
        $a = $b;
        $b = $c;
    }
}


$n = 10;
fibonacci($n);
?>