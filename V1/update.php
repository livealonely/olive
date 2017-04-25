<?php 
require "./inc/db.php";
require "./inc/common.php";

$id = $_POST['id'];
$sql = "update posts set title = '{$_POST['title']}', body = '{$_POST['body']}' where id = {$_POST['id']};" ;	
if (!mysql_query($sql)) {
	echo mysql_error();	
	echo '<br>' .  $sql;
}else{
	redirect_to("./");
}


?>