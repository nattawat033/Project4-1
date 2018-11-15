<?php
include('connectDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$name = $_REQUEST["name"];
	$nickname = $_REQUEST["nickname"];
	$email = $_REQUEST["email"];
	$username = $_REQUEST["username"];
    $pass = $_REQUEST["pass"];
    $IdCard = $_REQUEST["IdCard"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO alumni_profile(AP_name, AP_nickname, AP_email,AP_username ,AP_password, AP_idcard)
			 VALUES('$name', '$nickname', '$email', '$username', '$pass','$IdCard')";

	//$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	$query = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 

	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	

    if (!$result) {
        echo mysqli_error();
    }
    else{
      echo '<table border = "1" align = "center" cellpading = "0" cellspacing = "0">';
       echo '<td align = center>&nbsp;&nbsp;Congratulation! The record is updated.&nbsp;&nbsp;</td>';
    }
     //echo '<p align="center"><br><br><br>';
    // echo '<a href="career.php">Back</a>' ;
    
    function phpAlert($msg) {
        echo '<script type="text/javascript">alert("' . $msg . '")</script>';
    }
    
    
     phpAlert(   "สมัครสมาชิกเรียบร้อยแล้ว"   ); 
     echo "<script>window.location='login.php'</script>";
    mysqli_close($connect);
     ?>