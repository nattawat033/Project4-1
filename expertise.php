<!DOCTYPE HTML>

<html>
	<head>
		<title>Expertise</title>
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
					<h2>Expertise</h2>
					
				</header>
				<fieldset class="common-form standard-form">
<div align="center">
  <?php include "connectDB.php";

   mysqli_set_charset($conn,"utf8");
	
   $sql = 'SELECT * FROM professional  WHERE  AP_ID  = '.$_SESSION['user_id'].' ';

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
  
      <tr width="80" >
        <th> <div align="center">ด้านระบบคุณภาพ:</div></th>
      <td><div align="left"><?php echo $result["Prof_quality"];?></div></td></tr>
      
      <tr width="80">
        <th> <div align="center">ด้านบุคลิกภาพ/มารยาททางสังคม :</div></th>
      <td><div align="left"><?php echo $result["Prof_personal"];?></div></td></tr>
        
      <tr width="80">
        <th> <div align="center">ด้านการวางแผน :</div></th>
      <td><div align="left"><?php echo $result["Prof_plan"];?></div></td></tr>
      
      <tr width="80">
        <th> <div align="center">ด้านภาษา :</div></th>
      <td><div align="left"><?php echo $result["Prof_language"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="center">ด้านคอมพิวเตอร์:</div></th>
      <td><div align="left"><?php echo $result["Prof_computer"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="center">ด้านทักษะวิชาชีพ/ประสบการณ์การทำงาน :</div></th>
      <td><div align="left"><?php echo $result["Prof_experience"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="center">ด้านสันทนาการ :</div></th>
      <td><div align="left"><?php echo $result["Prof_creation"];?></div></td></tr>
      
      <tr width="80">
        <th><div align="center">ด้านอื่นๆ	:</div></th>
      <td><div align="left"><?php echo $result["Prof_other"];?></div></td></tr>

      
    
  <?php
}
?>
  </table></div>
  <?php
mysqli_close($conn);
?>
</div>
 </fieldset>
      
      
     <div align="center">
  <table  width="50" border="0" style="width: 800px">
    <tr>
      <td>
	  <div align="center"><form id="form7" name="form7" method="post" action="update_ex1.php">
        <input type="submit" name="submit" id="submit" value="แก้ไข" />
      </form></td>
	</div>

      <td> <div align="center"><form id="form8" name="form8" method="post" action="">
        <input type="submit" name="Submit" id="button" value="กลับ" />
      </form></td>
	  </div>

      <td>
	  <div align="center"><form id="form7" name="form7" method="post" action="Insert_ex1.php">
        <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล" />
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