<?php 

	$page = @$_GET['page'] ? $_GET['page'] : 'main';
	switch ($page) {
		case 'main':
			include('pages/main.php');
			# code...
			break;
			
		default:
			include('pages/main.php');
			break;
	}
?>