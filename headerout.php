<?php
  include_once 'connectDB.php';
  session_start();

?>

<header id="header" class="skel-layers-fixed">
				<h1><a href="home.php">ALUMNI SYSTEM</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="profession.php">Profession</a></li>
						<li><a href="expertise.php">Expertise</a></li>
						<li><a href="">|&nbsp;  <?php echo $_SESSION['user_name']; ?></a></li>
						<li><a href="">|&nbsp;  <?php echo $_SESSION['user_id'] ?></a></li>
						<li><a href="logout.php" class="button special">Logout</a></li>
 

 

					</ul>
				</nav>
			</header>