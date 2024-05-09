<?php
// Enter your Host, username, password, database below.
$con = mysqli_connect("localhost","root","","stripepay");
if(!$con){
	die("Connection Error !!".mysqli_connect_error());
}
 ?>