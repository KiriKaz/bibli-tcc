<?php
if(session_status() == PHP_SESSION_NONE) session_start();

$headers = getallheaders();
$referrer = $headers['Referer'] ?? "..";

$direto = basename(__FILE__) == basename($_SERVER["SCRIPT_FILENAME"]);

if($direto) {
    header("Location: $referrer", true, 302);
	die();
}

?>