<?php
    include 'lib.php';
	$workWithDb = new db ();
	$workWithDb -> validateEnterByUser($_POST["loginByUser"], md5($_POST["passByUser"]));
?>