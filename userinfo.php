<?php
$con = mysqli_connect('localhost',''root'');
msqli_select_db($con, 'php');

i($con){

	echo""connected";
	else"not connected";

}
msqli_select_db($con, 'mydatabase');
$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];


$query = "dba_insert into userinfodata (user, email, mobile, comment)
values  ('$user',$email,  '$mobile', '$comment')";


$mysqli_query($con, $query );

echo "$query";

mysqli_query($con,  $query);


?>
