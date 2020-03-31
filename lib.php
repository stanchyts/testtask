<?php
class user {
	private $login;
	private $pathByImage;
	public function __construct($login, $pathByImage){
		$this->login = $login;
		$this->pathByImage = $pathByImage;
	}
	public function getLogin() {
		return $this->login;
	}
	public function getPathByImage() {
		return $this->pathByImage;
	}
}

class db {
	public function __construct(){
		
	}
	public function regNewUser($nameByUser, $pswByUser, $nameByPhoto, $tmpByPhoto){
		$flag = true;
		$datebase = mysqli_connect('localhost', 'root', '', 'testtask');
		$result = $datebase->query("SELECT * FROM `users`");
		while ($userInfo = $result->fetch_assoc())
	    {
		    if($userInfo['login'] == $nameByUser)
		    {
			   	$flag = false;
                break;				
		    }
	    }
		if($flag) {
	        move_uploaded_file($tmpByPhoto, "C:\\wamp\\www\\test\\img\\".$nameByPhoto); 
		    $datebase->query("INSERT INTO users (login, psw, pathByImage) VALUES ('".$nameByUser."', '".$pswByUser."', 'img/".$nameByPhoto."')");
	        header("Location: index.php?reg=1"); 
		}
		else
			header("Location: registration.php?err=1"); 
	}
	public function validateEnterByUser($nameByUser,$pswByUser){
		$flag = true;
		$datebase = mysqli_connect('localhost', 'root', '', 'testtask');
		$result = $datebase->query("SELECT * FROM `users`");
	    while ($userInfo = $result->fetch_assoc())
	    {
		    if($userInfo['login'] == $nameByUser)
		    {
			    if($userInfo['psw'] == $pswByUser)
			    {
					$flag = false;
					session_start(); 
					$temp = new user($userInfo['login'],$userInfo['pathByImage']);
					$_SESSION['curUser'] = $temp;
					header("Location: info.php"); 				    	
			    }				
		    }
	    }
		if($flag)
			header("Location: index.php?err=1"); 
	}
}
?>