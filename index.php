<!DOCTYPE html>
<html>
	<head>
	<style type="text/css">
	h2.a {text-shadow: 0.1em 0.1em 0.05em #33c0ca}
	</style>
		<title>Alumni System</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->

		<?php include "headerlog.php";           session_start();
?>


		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<p><h2 class = "a">WELCOME TO</h2></p>
					<h2 class = "a">Alumni System</h2>
					<ul class="actions">
						<li><a href="reg_id.php" class="button big special">Sign Up</a></li>
						<li><a href="login.php" class="button big special">Login</a></li>
					</ul>
				</div>
			</section>

			
			
		<!-- Footer -->
			<?php include "footer.php"; ?>

	</body>
</html>