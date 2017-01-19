<?php
$db_connect = mysqli_connect("localhost","root","","MoviePusher");
if(mysqli_connect_error()) {
	echo "connection failed:".mysqli_connect_error();
	exit;
}
else{
	echo "Everything is perfect right now!!";
}
?>