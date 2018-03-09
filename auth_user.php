<?php
	function AuthUser($login, $pass){
		$ssh = $login.$pass.md5($login.$pass);
	}
?>