<?php 
$link = mysql_connect('localhost', 'wrausch', 'Waldemar123');
if (!$link) {
	die('Verbindung schlug fehl: ' . mysql_error());
}
mysql_select_db('wrausch',$link);
?>