<?php
	session_start();
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "testp";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);

	$strSQL = "SELECT * FROM alumni_profile WHERE AP_username = '".mysqli_real_escape_string($objCon,$_POST['txtUserId'])."' 
	and AP_password = '".mysqli_real_escape_string($objCon,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($objCon,$strSQL);
	$row = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$row)
	{
        function phpAlert($msg) {
            echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        }
        
        
         phpAlert(   "Username or Password Error !!! Please again"   ); 
         echo "<script>window.location='login.php'</script>";
	}
	else
	{
	
	$_SESSION['user_id'] = $row['AP_ID'];

	//echo  $row["AP_ID"];
      header("location:home.php");
	}
	mysqli_close($objCon);
?>