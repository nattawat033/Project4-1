<?php
	session_start();
	$serverName = "localhost";
	$userName = "root";
	$userPassword = "";
	$dbName = "testp";

	$objCon = mysqli_connect($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($objCon, "utf8");

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
		$_SESSION['user_lname'] = $row['AP_Lname'];
		$_SESSION['user_name'] = $row['AP_name'];

		if($row["Status"] == "ADMIN")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:home.php");
			}
	}	
		

	
	//echo  $row["AP_ID"];
    //   header("location:home.php");
	// }
	mysqli_close($objCon);
?>