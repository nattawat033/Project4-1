<!DOCTYPE HTML>

<html>
	<head>
		<title>Bachelor</title>
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

		<!-- Main -->
        <section id="main" class="wrapper style1">
				<header class="major">
                    <h3>ปริญญาตรี</h3>
                    <?php
                        include_once 'connectDB.php';

                        $connect = mysqli_connect("localhost","root","","testp");
                        mysqli_set_charset($connect, "utf8");

                        $sql = 'SELECT * FROM alumni_profile  WHERE  AP_ID  = '.$_SESSION['user_id'].' ';
 

   $query = mysqli_query($connect,$sql);
   $numrows = mysqli_num_rows($query);
   $numfields = mysqli_num_fields($query);  


while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>


 <div  align= "center" >
  <table  width="500" border="0"  style="width: 800px" >
   
      <tr width="80">
        <th> <div align="right">ชื่อ - สกุล :</div></th>
      <td><div align="left"><?php echo $result["AP_name"];?> &nbsp <?php echo $result["AP_Lname"];?></div></td></tr>

      <tr width="80">
        <th> <div align="right">รหัสนักศึกษา :</div></th>
    <td><div align="left"><?php echo $result["std_ID"];?></div></td></tr>

    <tr width="80">
        <th> <div align="right">รุ่น :</div></th>
    <td><div align="left"><?php echo $result["Grup_ID"];?></div></td></tr>



      <tr width="80">
        <th> <div align="right">สาขา :</div></th>
      <td><div align="left"><?php echo $result["fac_name"];?></div></td></tr>
        
      <tr width="80">
        <th> <div align="right">คณะ:</div></th>
      <td><div align="left"><?php echo $result["major_name"];?></div></td></tr>
      
    
  <?php
}
?>
</div>
  </table>
  <?php
mysqli_close($connect);
?>
</div>
<h3>ปริญญาตรี</h3>
     <?php
                        include_once 'connectDB.php';

                        $connect = mysqli_connect("localhost","root","","testp");
                        mysqli_set_charset($connect, "utf8");

                        $sql = 'SELECT * FROM edu_bg  WHERE  AP_ID  = '.$_SESSION['user_id'].' and Edu_ID = 3  ';
 

   $query = mysqli_query($connect,$sql);
   $numrows = mysqli_num_rows($query);
   $numfields = mysqli_num_fields($query);

?>  

<?php
if($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>

 <div  align= "center" >
  <table  width="500" border="0"  style="width: 800px" >
      <tr width="80">
        <th> <div align="right">สาขา :</div></th>
      <td><div align="left"><?php echo $result["Edu_major"];?></div></td></tr>
        
      <tr width="80">
        <th> <div align="right">คณะ:</div></th>
      <td><div align="left"><?php echo $result["Edu_fac"];?></div></td></tr>

      <tr width="80">
        <th> <div align="right">มหาวิทยาลัย:</div></th>
      <td><div align="left"><?php echo $result["Edu_univercitty"];?></div></td></tr>

      <tr width="80">
        <th> <div align="right">ประเทศ:</div></th>
      <td><div align="left"><?php echo $result["Edu_county"];?></div></td></tr>
      
    
  <?php
}  else { ?>

    <div align="center">
  <table  width="50" border="0" style="width: 800px">
    <tr>
      <td>
	  <div align="center"><form id="form7" name="form7" method="post" action="education1-2.php">
        <input type="submit" name="submit" id="submit" value="เพิ่มข้อมูล" />
      </form></td>
	</div>
    </table>
    
    <?php
}
?>
</div>
  </table>
  <?php
mysqli_close($connect);
?>
</div>

                    

        </section>

	</body>
</html>