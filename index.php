<?php
	session_start();

	if (isset($_SESSION['user_login']) && $_SESSION['user_login'] != '') {
		$halaman = $_SESSION['user_login'];
		$url = $_SESSION['sess_id'];

		header('location:on-'. $halaman.'/index.php?ID='.$url);
		exit();
	} else {
		header('location:login.php');
		exit();
	}
?>
