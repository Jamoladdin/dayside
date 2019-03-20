<!doctype html>
<html>
<head>
	<title>Test</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container container-fluid">
	<div id="header" class="navbar" style="margin-top: 10px;">
		<div class="navbar-header">
			<ul class="list-group">
				<li class="list-group-item" style="display: inline-block;">
					<a href="http://mvcpure/index">Index</a>
				</li>
				<li class="list-group-item" style="display: inline-block;">
					<?php if (Session::get('loggedIn') == false) { ?>
						<a href="http://mvcpure/login">Login</a>
					<?php } else { ?>
						<a href="http://mvcpure/dashboard/logout">Logout</a>
					<?php } ?>
				</li>
			</ul>
		</div>
	</div>
	<div id="content">

		<!-- tasksmyform.zzz.com.ua -->
		<!-- login + parol: u51408_ -->
		<!-- ip-address 109.95.211.97 -->
		<!-- server ip-address: localhost, 109.95.211.97 -->