<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
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
					<h2>Profile</h2>

                    <?php

$test = $_POST['pid'];

$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect, "utf8");

$sql = "SELECT * from alumni_profile where AP_ID= $test";
//$sql = "SELECT * from alumni_profile where AP_ID= 1";

$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_assoc ($result) ;

echo '<form name = "frmupdate" action= "update_p3.php" method = "post" enctype = "multipart/form-data">';
?>
<!-- // echo '<center>PID :		<input type="text" value="'.$row['AP_ID'].'" disabled = "false"><br></center>';

// echo '<input type="hidden" name = "pid" value = "'.$row['AP_ID'].'">';

// echo '<center>ชื่อ-สกุล :	<input type="text" name="name" value="'.$row['AP_name'].'"><br></center>';
// echo '<center>ชื่อเล่น :	<input type="text" name="nickname" value="'.$row['AP_nickname'].'"><br></center>';
// echo '<center>รูปภาพ :	<input type="file" name="img_pro" value="'.$row['img_pro'].'"><br></center>';
// echo '<center>ที่อยู่ :		<input type="text" name="address" value="'.$row['AP_address'].'"><br></center>';
// echo '<center>อำเภอ :	<input type="text" name="dis" value="'.$row['AP_district'].'"><br></center>';
// echo '<center>จังหวัด :		<input type="text" name="citty" value="'.$row['AP_citty'].'"><br></center>';
// echo '<center>รหัสไปรษณีย์ :	<input type="text" name="acode" value="'.$row['AP_addcode'].'"><br></center>';
// echo '<center>เบอร์โทร :		<input type="text" name="tell" value="'.$row['AP_tell'].'"><br></center>';
// echo '<center>LineID :	<input type="text" name="line" value="'.$row['AP_lineID'].'"><br></center>';
// echo '<center>Facebook :		<input type="text" name="face" value="'.$row['AP_facebook'].'"><br></center>';
// echo '<center>E-mail :	<input type="text" name="email" value="'.$row['AP_email'].'"><br></center>'; -->
<!-- // echo '<center><input type = "submit" value = "update"></center>'; -->
<div align="center">
<table width="500" border="0" style="width: 800px">
<tr>
   <tr width="80">
     <th> <div align="center">NO. : </div></th>
   <td><div align="left">	<input type="text" value= <?php echo $row["AP_ID"] ?> disabled = "false">
   							<input type="hidden" name = "pid" value = <?php echo $row["AP_ID"] ?>></div></td></tr>

 <tr>
   <tr width="80">
     <th> <div align="center">ชื่อ : </div></th>
   <td><div align="left">	<input type="text" name="name" value= <?php echo $row["AP_name"] ?>></div></td></tr>

   <tr>
   <tr width="80">
     <th> <div align="center">สกุล : </div></th>
   <td><div align="left">	<input type="text" name="lname" value= <?php echo $row["AP_Lname"] ?>></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ชื่อเล่น :</div></th>
   <td><div align="left">   <input type="text" name="nickname" value= <?php echo $row["AP_nickname"] ?>> </div></td></tr>
 
 <tr width="80">
     <th> <div align="center">รูปภาพ :</div></th>
   <td><div align="left">   <input type="file" name="img_pro" value= <?php echo $row["img_pro"] ?>></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ที่อยู่	 :</div></th>
   <td><div align="left">    <input type="text" name="address" value= <?php echo $row["AP_address"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">อำเภอ :</div></th>
   <td><div align="left">	<input type="text" name="dis" value= <?php echo $row["AP_district"] ?>></div></td></tr>

     <tr width="80">
     <th><div align="center">จังหวัด :</div></th>
   <td><div align="left">	<input type="text" name="citty" value= <?php echo $row["AP_citty"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">รหัสไปรษณีย์ :</div></th>
   <td><div align="left">	<input type="text" name="acode" value= <?php echo $row["AP_addcode"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">เบอร์โทร :</div></th>
   <td><div align="left">	<input type="text" name="tell" value= <?php echo $row["AP_tell"] ?>></div></td></tr>
   
   <tr width="80">
     <th><div align="center">LineID	:</div></th>
   <td><div align="left">	<input type="text" name="line" value= <?php echo $row["AP_lineID"] ?>></div></td></tr>

   <tr width="80">
     <th><div align="center">Facebook	:</div></th>
   <td><div align="left">	<input type="text" name="face" value= <?php echo $row["AP_facebook"] ?>></div></td></tr>

   <tr width="80">
     <th><div align="center">E-mail	:</div></th>
   <td><div align="left">	<input type="text" name="email" value= <?php echo $row["AP_email"] ?>></div></td></tr>



   
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