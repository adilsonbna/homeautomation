<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
	<head>
		<title>Control Panel</title>
		<meta charset="utf-8">
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet">
		<script src="js/jquery-1.8.3.min.js"></script>
		<script src="css/5grid/init.js?use=mobile,desktop,1200px,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
		<noscript>
			<link rel="stylesheet" href="css/5grid/core.css">
			<link rel="stylesheet" href="css/5grid/core-desktop.css">
			<link rel="stylesheet" href="css/5grid/core-1200px.css">
			<link rel="stylesheet" href="css/5grid/core-noscript.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/style-desktop.css">
			<link rel="stylesheet" href="css/style-1200px.css">
		</noscript>
		
		<script>
			$(document).ready(function() {
				$("#Open").click(function() {
					alert("Open");
				});
				
				$("#Close").click(function() {
					alert("Close");
				});
	
				$("#Status").click(function() {
					alert("Status");
				});	
	
				$("#Lock").click(function() {
					alert("Lock");
				});	
	
				$("#Shutdown").click(function() {
					alert("Shutdown");
				});				
			});	
		</script>			
	</head>
	
	<body class="left-sidebar">
		<div id="wrapper">
			<div id="content" class="mobileUI-main-content">
				<div id="content-inner">
				
					<article class="is-post is-post-excerpt">
						<header>
						<h2><a href="#">Control Panel</a></h2>
						<span class="byline">Select the desired action</span> </header>
						<div class="info"> <span class="date"><span class="month">Gate</span></span></div>
						
					<div data-role="content">
						<fieldset class="ui-grid-a">
							<div class="ui-block-a"><a id="Open" href="#Open" onclick="Open()" class="button" data-role="button" data-inline="false">Open</a></div>
							<div class="ui-block-b"><a id="Close" href="#Close" onclick="Close()" class="button" data-role="button" data-inline="false">Close</a></div>
							<div class="ui-block-a"><a id="Status" href="#Status" onclick="Status()" class="button" data-role="button" data-inline="false">Status</a></div>
							<div class="ui-block-b"><a id="Lock" href="#Lock" onclick="Lock()" class="button" data-role="button" data-inline="false">Lock</a></div>
							<div class="ui-block-b"><a id="Offline" href="#Offline" onclick="Offline()" class="button" data-role="button" data-inline="false">Offline</a></div>
						</fieldset>
					</div>					

					</article>
				</div>
			</div>
			
			<div id="sidebar">
				<div id="logo">
					<h1 class="mobileUI-site-name">Control Panel</h1>
				</div>
				
				<nav id="nav" class="mobileUI-site-nav">
					<ul>
						<li class="current_page_item"><a href="#">Gate</a></li>
						<li><a href="#">Session 1</a></li>
						<li><a href="#">Session 2</a></li>
						<li><a href="#">Session 3</a></li>
						<li><a href="logout.php?logout">&nbsp;Sign Out</a></li>
					</ul>
				</nav>
				
				<div id="copyright">
					<p>&copy; 2016<br>Thiago Romanholi Gomes</p>
				</div>
			</div>
		</div>
	</body>
</html>