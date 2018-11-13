  
<?php
$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect, "utf8");
	  if (!isset($smtUpdate)) {
		  $sql = 'SELECT * FROM  alumni_profile  ';
		  
		  $result = mysqli_query($connect,$sql);
		  $numrows = mysqli_num_rows($result);
		  $numfields = mysqli_num_fields($result);
		  $path = 'images/';   // Path สำหรับเชื่อมไปยังที่เก็บไฟล์รูป
		  
	  if (!$result) {
		  echo '<b>Error</b>'.mysqli_error().'<br>';
	  } elseif ($numrows==0) {
		  echo '<b>Query executed successfully but no row returns!</b>';
	  }else { 
		  while ($row = mysqli_fetch_array($result)) {
			session_start();
			$_SESSION['user_id'] = $row['AP_ID'];
			$_SESSION['user_name'] = $row['AP_name'];
	 
		  echo ''	
		  
		  ;
		  }
		}
	}
		

?>  

<header id="header" class="skel-layers-fixed">
				<h1><a href="#">ALUMNI SYSTEM</a></h1>
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