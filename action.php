<?php


if(isset($_GET["register"])){
	echo "registration";
}
else if(isset($_GET["login"])){
if($_GET["email"] == "albert@test.com" &&
	$_GET["password"] == "777"){
	echo "You are loged in.";
}
else{
	echo "Your email or password is incorrect.";
}
}





?>