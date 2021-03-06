<?php ###########
## ENABLE CORS ##
#################
//header('cache-control: no-cache');
//header('Content-Type: text/html; charset=utf-8');
$headers_list = headers_list();
if (!in_array("Content-Type", $headers_list))				{ header("Content-Type: text/html; charset=utf-8"); }
if (!in_array("cache-control", $headers_list))				{ header("cache-control: no-cache"); }
if (!in_array("X-XSS-Protection", $headers_list))			{ header("X-XSS-Protection: 1; mode=block"); }
if (!in_array("X-Content-Type-Options", $headers_list))		{ header("X-Content-Type-Options: nosniff"); }
if (!in_array("X-Frame-Options", $headers_list))			{ header("X-Frame-Options: SAMEORIGIN"); }
if (!in_array("Strict-Transport-Security", $headers_list))	{ header("Strict-Transport-Security: max-age=2592000; includeSubDomains"); }
if (!in_array("Content-Security-Policy", $headers_list))	{ header("Content-Security-Policy: upgrade-insecure-requests"); }
if (!in_array("Referrer-Policy", $headers_list))			{ header("Referrer-Policy: strict-origin-when-cross-origin"); }
headers_list();
?>