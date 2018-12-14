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

?>
<!-- // echo '<center>PID :		<input type="text" value="'.$row['AP_ID'].'" disabled = "false"><br></center>';

// echo '<input type="hidden" name = "pid" value = "'.$row['AP_ID'].'">';

// echo '<center>ด้านระบบคุณภาพ :						<input type="text" name="quality" 			value="'.$row['Prof_quality'].'"><br></center>';
// echo '<center>ด้านบุคลิกภาพ/มารยาททางสังคม :			<input type="text" name="personal" 			value="'.$row['Prof_personal'].'"><br></center>';
// echo '<center>ด้านการวางแผน :						<input type="text" name="plan" 		value="'.$row['Prof_plan'].'"><br></center>';
// echo '<center>ด้านภาษา :							<input type="text" name="language" 			value="'.$row['Prof_language'].'"><br></center>';
// echo '<center>ด้านคอมพิวเตอร์ :						<input type="text" name="computer" 	value="'.$row['Prof_computer'].'"><br></center>';
// echo '<center>ด้านทักษะวิชาชีพ/ประสบการณ์การทำงาน :		<input type="text" name="experience" 		value="'.$row['Prof_experience'].'"><br></center>';
// echo '<center>ด้านสันทนาการ :						<input type="text" name="creation" 		value="'.$row['Prof_creation'].'"><br></center>';
// echo '<center>ด้านอื่นๆ :							<input type="text" name="other" 		value="'.$row['Prof_other'].'"><br></center>';
// echo '<center><input type = "submit" value = "update"></center>';	 -->


<div align="center">
<table width="500" border="0" style="width: 800px">
<tr>
   <tr width="80">
     <th> <div align="center">NO. : </div></th>
   <td><div align="left">	<input type="text" value= <?php echo $row["AP_ID"] ?> disabled = "false">
   							<input type="hidden" name = "pid" value = <?php echo $row["AP_ID"] ?>></div></td></tr>

 <tr>
   <tr width="80">
     <th> <div align="center">ด้านระบบคุณภาพ : </div></th>
   <td><div align="left">	<input type="text" name="quality" value= <?php echo $row["Prof_quality"] ?>></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ด้านบุคลิกภาพ/มารยาททางสังคม :</div></th>
   <td><div align="left">   <input type="text" name="personal" value= <?php echo $row["Prof_personal"] ?>> </div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ด้านการวางแผน :</div></th>
   <td><div align="left">   <input type="text" name="plan" value= <?php echo $row["Prof_plan"] ?>></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ด้านภาษา	 :</div></th>
   <td><div align="left">    <input type="text" name="language" value= <?php echo $row["Prof_language"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">ด้านคอมพิวเตอร์ :</div></th>
   <td><div align="left">	<input type="text" name="computer" value= <?php echo $row["Prof_computer"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">ด้านทักษะวิชาชีพ/ประสบการณ์การทำงาน :</div></th>
   <td><div align="left">	<input type="text" name="experience" value= <?php echo $row["Prof_experience"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">ด้านสันทนาการ :</div></th>
   <td><div align="left">	<input type="text" name="creation" value= <?php echo $row["Prof_creation"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">ด้านอื่นๆ	:</div></th>
   <td><div align="left">	<input type="text" name="other" value= <?php echo $row["Prof_other"] ?>></div></td></tr>



   
 </table>
 <input type = "submit" value = "update">

</div>

<?php
echo '</form>';
mysqli_close($connect);
 ?>
					
	

		<!-- Footer -->
        <?php include "footer.php"; ?>



	</body>
</html>