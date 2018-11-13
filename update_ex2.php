<!DOCTYPE html>
<html>
	<head>
		<title>Expertise</title>
		<meta http-equiv="content-type" content="text/php; charset=utf-8" />
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
        <?php include "headerout.php"; ?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Expertise</h2>

                   <?php

$test = $_POST['pid'];

$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect,"utf8");
$sql = "select AP_ID,Prof_quality,Prof_personal,Prof_plan,Prof_language,Prof_computer,
					  Prof_experience,Prof_creation,Prof_other   from professional where AP_ID= $test";
//$sql = "SELECT * from alumni_profile where AP_ID= 1";

$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc ($result) ;

echo '<form name = "frmupdate" action= "update_ex3.php" method = "post">';
echo '<center>PID :		<input type="text" value="'.$row['AP_ID'].'" disabled = "false"><br></center>';

echo '<input type="hidden" name = "pid" value = "'.$row['AP_ID'].'">';

echo '<center>ด้านระบบคุณภาพ :						<input type="text" name="quality" 			value="'.$row['Prof_quality'].'"><br></center>';
echo '<center>ด้านบุคลิกภาพ/มารยาททางสังคม :			<input type="text" name="personal" 			value="'.$row['Prof_personal'].'"><br></center>';
echo '<center>ด้านการวางแผน :						<input type="text" name="plan" 		value="'.$row['Prof_plan'].'"><br></center>';
echo '<center>ด้านภาษา :							<input type="text" name="language" 			value="'.$row['Prof_language'].'"><br></center>';
echo '<center>ด้านคอมพิวเตอร์ :						<input type="text" name="computer" 	value="'.$row['Prof_computer'].'"><br></center>';
echo '<center>ด้านทักษะวิชาชีพ/ประสบการณ์การทำงาน :		<input type="text" name="experience" 		value="'.$row['Prof_experience'].'"><br></center>';
echo '<center>ด้านสันทนาการ :						<input type="text" name="creation" 		value="'.$row['Prof_creation'].'"><br></center>';
echo '<center>ด้านอื่นๆ :							<input type="text" name="other" 		value="'.$row['Prof_other'].'"><br></center>';
echo '<center><input type = "submit" value = "update"></center>';	
echo '</form>';
mysqli_close($connect);
 ?>
					
	

		<!-- Footer -->
        <?php include "footer.php"; ?>



	</body>
</html>