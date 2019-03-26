<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>
<body>
    <?php Session::init(); ?>
	<div class="container container-fluid">
	<div id="header" class="navbar" style="margin-top: 10px;">
		<div class="navbar-header">
			<ul class="list-group">
				<li class="list-group-item" style="display: inline-block;">
					<a href="/index">Index</a>
				</li>
				<li class="list-group-item" style="display: inline-block;">
					<?php if (Session::get('loggedIn') == false) { ?>
						<a href="/login">Login</a>
					<?php } else { ?>
						<a href="/dashboard/logout">Logout</a>
					<?php } ?>
				</li>
			</ul>
		</div>
	</div>
	<div id="content">
