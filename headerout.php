<?php
  include_once 'connectDB.php';
  session_start();

?>
<style>



li a:hover, .dropdown:hover .dropbtn {
  background-color: #CCFFFF;
}



.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>
<header id="header" class="skel-layers-fixed">
				<h1><a href="home.php">ALUMNI SYSTEM</a></h1>
				<nav id="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="profile.php">Profile</a></li>
						<li><a href="profession.php">Position</a></li>
						<li><a href="expertise.php">Expertise</a></li>
						<li><a href="education.php">Education</a></li>
						<!-- <li class="dropdown">
    						<a href="report.php" class="dropbtn">Report By province</a>
    							<div class="dropdown-content">			
      						<a href="report-se.php">Report SE</a>
									<a href="report-it.php">Report IT</a>
									<a href="report-ebiz.php">Report E-BIZ</a>
									
    							</div>
  						</li>


							<li class="dropdown">
    						<a href="test.php" class="dropbtn">Report By position</a>
    							<div class="dropdown-content">
      								
      						<a href="test1.php">Report SE</a>
									<a href="test2.php">Report IT</a>
									<a href="test3.php">Report E-BIZ</a>
									
    							</div>
  						</li> -->
							
						<li><a href="">|&nbsp;  <?php echo $_SESSION['user_name']; ?>&nbsp;  <?php echo $_SESSION['user_lname']; ?></a></li>
						<li><a href="logout.php" class="button special">Logout</a></li>
						

 

					</ul>
				</nav>
			</header>