<?php
    include 'lib.php';
	$workWithDb = new db ();
	if (($_FILES["photoByUser"]["type"]=="image/gif") or ($_FILES["photoByUser"]["type"]=="image/jpeg") or ($_FILES["photoByUser"]["type"]=="image/png"))
	    $workWithDb -> regNewUser($_POST["loginByUser"],md5($_POST["passByUser"]),$_FILES["photoByUser"]["name"], $_FILES["photoByUser"]["tmp_name"]);
	else
		header("Location: registration.php?errType=1&login=".$_POST["loginByUser"]);
?>