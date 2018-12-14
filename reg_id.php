


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
    <table width="599" border="1" style="width: 800px" >
      <tr>
        <th>กรุณาใส่รหัสบัตรประชาชน
          <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>"> <br>
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
	

$sql = "SELECT * FROM `reg_student` LEFT JOIN reg_faculty on reg_student.Fac_ID = reg_faculty.Fac_ID
LEFT JOIN reg_dept on reg_dept.Dept_Id = reg_student.Dept_ID
LEFT JOIN reg_major on reg_major.Major_Id = reg_student.Major_ID
WHERE Citizen_ID = '".$strKeyword."' and Study_status = '4'";

   $query = mysqli_query($conn,$sql);

?>
  <table width="900" border="1" style="width: 95%">
    <tr>
      <th width="80"> <div align="center">รหัสบัตรประชาชน</div></th>
      <th width="80"> <div align="center">ชื่อ</div></th>
      <th width="80"> <div align="center">รหัสนักศึกษา </div></th>
      <th width="80"> <div align="center">รุ่น </div></th>
      <th width="80"> <div align="center">คณะ</div></th>
      <th width="80"> <div align="center">สาขา</div></th>
      <th width="80"> <div align="center">เลือก</div></th>
      
      
    </tr>
    <br>
  <?php
if($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<form name = "frmupdate" action= "register.php" method = "post">
    <tr>
      <td><div align="center"><?php echo $result["Citizen_ID"];?></div></td>
      <td><div align="center"><?php echo $result["STD_Fname_Thai"];?>&nbsp <?php echo $result["STD_Lname_Thai"];?></div></td>
      <td><div align="center"><?php echo $result["Student_ID"];?></div></td>
      <td><div align="center"><?php echo $result["Grup_ID"];?></div></td>
      <td><div align="center"><?php echo $result["Fac_name_Thai"];?></div></td>
      <td><div align="center"><?php echo $result["Major_name_Thai"];?></div></td>
      <td align=center ><input type="submit" value="Register"></td>
<?php

session_start();

  $_SESSION['Citizen_ID'] = $result['Citizen_ID'];
  $_SESSION['STD_Fname_Thai'] = $result['STD_Fname_Thai'];
  $_SESSION['STD_Lname_Thai'] = $result['STD_Lname_Thai'];
  $_SESSION['Student_ID'] = $result['Student_ID'];
  $_SESSION['Grup_ID'] = $result['Grup_ID'];
  $_SESSION['Fac_name_Thai'] = $result['Fac_name_Thai'];
  $_SESSION['Major_name_Thai'] = $result['Major_name_Thai'];

?>
    </tr>
    </form>
  <?php
} else if ($strKeyword == "")  {
  
  
    echo "<script>alert(' กรุณากรอกเลขบัตรประชาชนของคุณ!');</script>";
    exit();

 
} else {
  echo "<script>alert('ไม่พบข้อมูลของคุณ กรุณาลองใหม่อีกครั้ง!');</script>";
    exit();
}
?>
  </table>
  <?php
mysqli_close($conn);
?>
</div>


</body>
</html>