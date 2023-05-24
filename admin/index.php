<?php 
	require_once('../config/config.php');
	$db = new Database();
	$pg = $db->select('pages');
	$page = @$_GET['page'] ? $_GET['page'] : 'main';
	$p = array_filter($pg, function($item) use ($page) {
		return $item['pages_name'] === $page;
	});
	require_once('pages/partials/header.php');

	$p = array_values($p);
	
	if (!empty($p)) {
		$currentPage = $p[0]['pages_name'];
		include('pages/'.$currentPage.'.php');
	} else {
		$currentPage = 'main';
		include('pages/'.$currentPage.'.php');
	}
	
	require_once('pages/partials/footer.php');
?>