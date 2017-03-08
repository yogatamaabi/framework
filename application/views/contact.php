<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Contact</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<a class="navbar-brand" href="#">Yogatama Abi</a>
				<ul class="nav navbar-nav">
					<li>
						<a href="<?php echo site_url('home');?>">Home</a>
					</li>
					<li >
						<a href="<?php echo site_url('about');?>">About</a>
					</li>
					<li class="active">
						<a href="<?php echo site_url('contact');?>">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="page-header" style="text-align: left; margin-left: 100px">
		  <h1>Contact <small> Hubungi Saya !</small></h1>
		</div>
		
		<table border = "0" style="text-align: left; margin-left: 200px">
			<tr>
				<th>Nama</th>	
				<th><input type="text" name=""></th>
			</tr>
			<tr>
				<th>Email</th>
				<th><input type="text" name=""></th>
			</tr>
			<tr>
				<th>Pesan</th>
				<th><textarea name="alamat" rows="5" cols="70"></textarea></th>
			</tr>
			<tr >
				<th>
				<input type="submit" name="kirim" value="Kirim">
				<input type="reset" name="reset" value="Reset">
				</th>
			</tr>
		</table>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>