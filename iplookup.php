<?php

$ip = $_GET['host'];

if($ip != NULL && $ip >= 8)
{
    $resp = file_get_contents("http://ip-api.com/json/$ip?fields=520191&lang=en");
    $resp = str_replace('{', NULL, $resp);
    $resp = str_replace('}', NULL, $resp);
    $resp = str_replace('"', NULL, $resp);
    $resp = str_replace(':', ': ', $resp);
    $resp = str_replace(",", "\r\n", $resp);
    $resp = str_replace("\r\nstatus: success", NULL, $resp);
    echo $resp;
}
else
{
    echo "[IPLookup-API] Syntax Error, Example: http://1.1.1.1/api.php?ip=1.3.3.7";
}

?>