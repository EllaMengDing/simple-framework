<?php
switch($path[1]){
	case 'signin':
		$signed_in=verifySignin($db);
		require_once('signin.php');
		break;
	case 'signup': 
		$signed_up=false;
		if(isset($_POST['email']{0})){
			$signed_up=true;
			echo 'signed up';
		}
		require_once('signup.php');
		break;
	case 'forgotpassword': require_once('forgotpassword.php');
		break;
}

function verifySignin($db){
	if(isset($_POST['email']{0})){
		$sql=new mySQL();
		$sql->connect($db['host'],$db['dbname'],$db['user'],$db['password']);
		$result=$sql->select('SELECT * FROM users WHERE email=?',[$_POST['email']]);
		if($result->rowCount()>0) return true;
	}
	return false;
}
