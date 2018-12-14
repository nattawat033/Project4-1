<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>search</title>
</head>

<body>

<div class="container">
   <h1 align="center" > ค้นหา </h1>
    <!-- end .header --></div>
    <hr>
    
    
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
    <table width="599" border="1">
      <tr>
        <th>Keyword
          <input name="txtKeyword" type="text" id="txtKeyword" value="<?php echo $strKeyword;?>">
        <input type="submit" value="Search"></th>
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
	
   $sql = "SELECT * FROM alumni_profile  WHERE AP_name LIKE '%".$strKeyword."%' ";

   $query = mysqli_query($conn,$sql);

?>
  <table width="900" border="1">
    <tr>
      <th width="80"> <div align="center">ชื่อ</div></th>
      <th width="80"> <div align="center">รหัสนักศึกษา</div></th>
      <th width="80"> <div align="center">E-mail </div></th>
      <th width="80"> <div align="center">เบอร์โทร</div></th>
      <th width="80"> <div align="center">Facebook</div></th>
      
      
    </tr>
    <br>
  <?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
    <tr>
      <td><div align="center"><?php echo $result["AP_name"];?></div></td>
      <td><div align="center"><?php echo $result["std_ID"];?></div></td>
      <td><div align="center"><?php echo $result["AP_email"];?></div></td>
      <td><div align="center"><?php echo $result["AP_tell"];?></div></td>
      <td><div align="center"><?php echo $result["AP_facebook"];?></div></td>
      
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
