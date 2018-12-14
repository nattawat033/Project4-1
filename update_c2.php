<!DOCTYPE html>
<html>
	<head>
		<title>Position</title>
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
					<h2>Position</h2>

                  <?php

$test = $_POST['pid'];

$connect = mysqli_connect("localhost","root","","testp");



$sql = "SELECT * from job where AP_ID= $test";

mysqli_set_charset($connect, "utf8");
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc ($result) ;

echo '<form name = "frmupdate" action= "update_c3.php" method = "post">';

?>


<!-- echo '<center>ชื่อหน่วยงาน :	<input type="text" name="name" value="'.$row['job_name'].'"><br></center>';
echo '<center>ตำแหน่งงาน :	<input type="text" name="position" value="'.$row['job_position'].'"><br></center>';
echo '<center>ที่อยู่ :		<input type="text" name="address" value="'.$row['job_address'].'"><br></center>';
echo '<center>อำเภอ :	<input type="text" name="dis" value="'.$row['job_district'].'"><br></center>';
echo '<center>จังหวัด :		<input type="text" name="citty" value="'.$row['job_citty'].'"><br></center>';
echo '<center>รหัสไปรษณี :	<input type="text" name="acode" value="'.$row['job_addcode'].'"><br></center>';
echo '<center>เบอร์โทร :		<input type="text" name="tell" value="'.$row['job_tell'].'"><br></center>';
echo '<center>โทรสาร :	<input type="text" name="fax" value="'.$row['job_fax'].'"><br></center>';
echo '<center><input type = "submit" value = "update"></center>'; -->
<div align="center">
<table width="500" border="0" style="width: 800px">
<tr>
   <tr width="80">
     <th> <div align="center">NO. : </div></th>
   <td><div align="left">	<input type="text" value= <?php echo $row["AP_ID"] ?> disabled = "false">
   							<input type="hidden" name = "pid" value = <?php echo $row["AP_ID"] ?>></div></td></tr>

 <tr>
   <tr width="80">
     <th> <div align="center">ชื่อหน่วยงานที่ทำ : </div></th>
   <td><div align="left">	<input type="text" name="name" value= <?php echo $row["job_name"] ?>></div></td></tr>
 
 <tr width="100">
     <th> <div align="center">ตำแหน่งงาน :</div></th>
   <td><div align="left">   <input type="text" name="position" value= <?php echo $row["job_position"] ?>> </div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ที่อยู่ที่ทำงาน :</div></th>
   <td><div align="left">   <input type="text" name="address" value= <?php echo $row["job_address"] ?>></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">อำเภอ	 :</div></th>
   <td><div align="left">    <input type="text" name="dis" value= <?php echo $row["job_district"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">จังหวัด :</div></th>
   <td><div align="left">	<input type="text" name="citty" value= <?php echo $row["job_citty"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">รหัสไปรษณีย์ :</div></th>
   <td><div align="left">	<input type="text" name="acode" value= <?php echo $row["job_addcode"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">เบอร์โทร :</div></th>
   <td><div align="left">	<input type="text" name="tell" value= <?php echo $row["job_tell"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">โทรสาร	:</div></th>
   <td><div align="left">	<input type="text" name="fax" value= <?php echo $row["job_fax"] ?>></div></td></tr>



   
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
