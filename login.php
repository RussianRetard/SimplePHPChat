<?php 

if(strpos(file_get_contents('data/user.txt'), $_POST['username'] . $_POST['password']) !== false){
	echo $_POST['username'] . $_POST['password'];
} else {
	echo ':(';
}