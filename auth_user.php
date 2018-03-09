<?php
	function AuthUser($login, $pass){
		$ssh = $login.$pass.md5($login.$pass);
	}
	require_once "ssh.php";
?>