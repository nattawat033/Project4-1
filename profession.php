<!DOCTYPE HTML>
<html>
	<head>
		<title>Profession</title>
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
    <?php include "headerout.php"; 
    ?>

		<!-- Main -->
			<section id="main" class="wrapper style1">
				<header class="major">
					<h2>Profession</h2>
					
				</header>
				
							</section>
						
							
					<fieldset class="common-form standard-form">
<div align="center">
  <?php include "connectDB.php";
  
 
mysqli_set_charset($conn,"utf8");
	
$sql = 'SELECT * FROM job  WHERE  AP_ID  = '.$_SESSION['user_id'].' ';

$query = mysqli_query($conn,$sql);
$numrows = mysqli_num_rows($query);
$numfields = mysqli_num_fields($query);

?>  

<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>

 
<div align="center">
<table width="500" border="0" style="width: 800px">
 <tr>
   <tr width="80">
     <th> <div align="center">ชื่อหน่วยงานที่ทำ : </div></th>
   <td><div align="left"><?php echo $result["job_name"];?></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ตำแหน่งงาน :</div></th>
   <td><div align="left"><?php echo $result["job_position"];?></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">ที่อยู่ที่ทำงาน :</div></th>
   <td><div align="left"><?php echo $result["job_address"];?></div></td></tr>
 
 <tr width="80">
     <th> <div align="center">อำเภอ	 :</div></th>
   <td><div align="left"><?php echo $result["job_district"];?></div></td></tr>
   
   <tr width="80">
     <th><div align="center">จังหวัด :</div></th>
   <td><div align="left"><?php echo $result["job_citty"];?></div></td></tr>
   
   <tr width="80">
     <th><div align="center">รหัสไปรษณีย์ :</div></th>
   <td><div align="left"><?php echo $result["job_addcode"];?></div></td></tr>
   
   <tr width="80">
     <th><div align="center">เบอร์โทร :</div></th>
   <td><div align="left"><?php echo $result["job_tell"];?></div></td></tr>
   
   <tr width="80">
     <th><div align="center">โทรสาร	:</div></th>
   <td><div align="left"><?php echo $result["job_fax"];?></div></td></tr>
 </table>

</div>

<div align="center">
  <table  width="200" border="0">
    <tr>
      <td>
	  <div align="right"><form id="form7" name="form7" method="post" action="update_c1.php">
        <input type="submit" name="submit" id="submit" value="แก้ไข" />
      </form></td>
	  </div>

      <td><div align="left"><form id="form8" name="form8" method="post" action="home.php">
        <input type="submit" name="Submit" id="button" value="กลับ" />
      </form></td>
	  </div>
    </tr>
  </table>
</div>

  <?php
}

?>
  </table>
  <?php
mysqli_close($conn);
?>
</div>
 </fieldset>



			</section>

		<!-- Footer -->
		<?php include "footer.php"; ?>

	</body>
</html>