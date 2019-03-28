<?php
header("Content-type: text/html");
header("WWW-Authenticate: Basic realm='Member Area'");
if ($_SERVER['PHP_AUTH_USER'] == "zaz" && $_SERVER['PHP_AUTH_PW'] == "jaimelespetitsponeys")
{
	$data = file_get_contents('../img/42.png');
	$base64 = 'data:image/png' . ';base64,' . base64_encode($data);
	echo "<html><body>";
	echo "Bonjour " . "Zaz" . "<br/>";
	echo "<img src='" . $base64 . "'>";
	echo "</body></html>\n";
}
else 
{
	header('HTTP/1.0 401 Unauthorized');
	echo "<html><body>That area is accessible for members only</body></html>\0\0\0\0\0\n";
}
?>
