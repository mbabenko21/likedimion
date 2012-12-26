<?


$serverdb = "localhost"; // MySQL server name. (Default: localhost)
$userdb = "root"; // MySQL username.
$passdb = ""; // MySQL password.
$namedb = "glor"; // MySQL database name.
$gamename = "GLOR";
$filesfolder = "gamefiles";

$link = mysql_connect($serverdb, $userdb, $passdb) or die(mysql_error());
mysql_select_db($namedb) or die(mysql_error());






?>
