<?php
if(isset(POST['username'])isset(POST['username'])isset(POST['password'])isset(POST['email']){
	$username =$POST['username'];
	$email=$POST['email'];
	$password =$POST['password'];
	
	echo "welcome " +$username;
}else{
	echo "there was a problem in submitin details";
}

?>