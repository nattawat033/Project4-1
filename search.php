


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
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
    <title>ตรวจสอบบัตรประชาชน</title>


</head>
<body>
<?php include "headeradmin.php"; 
    ?>
    

     	<section id="main" class="wrapper style1">
				<header class="major">
					<h2>ค้นหา</h2>
					
				</header>
				
							</section>
    <!-- end .header --></div>
  
    
    
     <fieldset class="common-form standard-form">
     
     
    	<div align="center">
    	  <?php
	ini_set('display_errors', 1);
	error_reporting(~0);

	$strKeyword = null;

	if(isset($_POST["txtKeyword"]))
	{
		$strKeyword = $_POST["txtKeyword"];
	}
?>
  	  </div>
<form name="frmSearch" method="post" action="<?php echo $_SERVER['SCRIPT_NAME'];?>">
  <div align="center">
    <table width="599" border="1" style="width: 800px">
      <tr>
        <th> ค้นหาด้วยรหัสนักศึกษา   
          <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
          <div align = "right">
        <input type="submit" value="Search"></th>
        </div>
      </tr>
    </table>
  </div>
</form>

<div align="center">
  <?php

   $serverName = "localhost";
   $userName = "root";
   $userPassword = "";
   $dbName = "testp";

   $conn = mysqli_connect($serverName,$userName,$userPassword,$dbName);
   mysqli_set_charset($conn,"utf8");
	
   $sql = "SELECT * FROM alumni_profile  WHERE std_ID  LIKE '%".$strKeyword."%'  ";

   $query = mysqli_query($conn,$sql);

?>
  <table width="900" border="1" style="width: 95%">
    <tr>
      <th width="80"> <div align="center">ชื่อ-สกุล</div></th>
      <th width="80"> <div align="center">รหัสนักศึกษา</div></th>
      <th width="80"> <div align="center">สาขา</div></th>
      <th width="80"> <div align="center">คณะ</div></th>
      <th width="80"> <div align="center">รุ่น</div></th>
      
      
    </tr>
    <br>
  <?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
    <tr>
      <td><div align="center"><?php echo $result["AP_name"];?> &nbsp <?php echo $result["AP_Lname"];?> </div></td>
      <td><div align="center"><?php echo $result["std_ID"];?></div></td>
      <td><div align="center"><?php echo $result["fac_name"];?></div></td>
      <td><div align="center"><?php echo $result["major_name"];?></div></td>
      <td><div align="center"><?php echo $result["Grup_ID"];?></div></td>
      
    </tr>
  <?php
}
?>
  </table>
  <?php
mysqli_close($conn);
?>
</div>
 </fieldset>
    <hr>


</body>
</html>