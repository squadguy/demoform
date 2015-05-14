<?php
define('DB_NAME', 'demoform');
define('DB_USER', 'squadguy');
define('DB_PASSWORD', '1is4life');
define('DB_HOST', '192.168.1.216');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

/*echo 'connected sucesfully';*/

$name=$_POST['name'];

$sql = "INSERT INTO demo (name) VALUES ('$name')";

if(!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}

	mysql_close();	
?>
