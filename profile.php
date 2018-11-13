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
					
					<fieldset class="common-form standard-form">
<div align="right">


  <?php  


$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect, "utf8");

   
// $connect = mysqli_connect("localhost","root","","testp");

// mysqli_set_charset($connect,"utf8");

	
   $sql = 'SELECT * FROM alumni_profile  WHERE  AP_ID  = '.$_SESSION['user_id'].' ';
 

   $query = mysqli_query($connect,$sql);
   $numrows = mysqli_num_rows($query);
   $numfields = mysqli_num_fields($query);

?>  

<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>

  <table  width="500" border="0" >
   
      <tr width="80">
        <th> <div align="right">ชื่อ - สกุล :</div></th>
      <td><div align="left"><?php echo $result["AP_name"];?></div></td></tr>
      
      <tr width="80">
        <th> <div align="right">ชื่อเล่น :</div></th>
      <td><div align="left"><?php echo $result["AP_nickname"];?></div></td></tr>
        
      <tr width="80">
        <th> <div align="right">ที่อยู่ที่สามารถติดต่อได้:</div></th>
      <td><div align="left"><?php echo $result["AP_address"];?></div></td></tr>
      
      <tr width="80">
        <th> <div align="right">อำเภอ	 :</div></th>
      <td><div align="left"><?php echo $result["AP_district"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="right">จังหวัด :</div></th>
      <td><div align="left"><?php echo $result["AP_citty"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="right">รหัสไปรษณีย์ :</div></th>
      <td><div align="left"><?php echo $result["AP_addcode"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="right">เบอร์โทร :</div></th>
      <td><div align="left"><?php echo $result["AP_tell"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="right">Line ID	:</div></th>
      <td><div align="left"><?php echo $result["AP_lineID"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="right">Facebook: </div></th>
      <td><div align="left"><?php echo $result["AP_facebook"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="right">E-mail :</div></th>
      <td><div align="left"><?php echo $result["AP_email"];?></div></td></tr>
      
    
  <?php
}
?>
  </table>
  <?php
mysqli_close($connect);
?>
</div>
 </fieldset>



  <table  width="200" border="0">
    <tr>
      <td>
	  <div align="right">
	  <form id="form7" name="form7" method="post" action="update_p1.php">
        <input type="submit" name="submit" id="submit" value="แก้ไข" />
      </form></td>
	  </div>

      <td>
	  <div align="left">
	  <form id="form8" name="form8" method="post" action="">
        <input type="submit" name="Submit" id="button" value="กลับ" />
      </form></td>
	  </div>
    </tr>
  </table>
</div>
			</section>

		<!-- Footer -->
		<?php include "footer.php"; ?>

	</body>
</html>