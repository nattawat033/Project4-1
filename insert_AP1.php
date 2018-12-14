<?php
session_start();
include('connectDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
    $name =  $_SESSION['STD_Fname_Thai'];
    $lname = $_SESSION['STD_Lname_Thai'];
	$nickname = $_REQUEST["nickname"];
	$email = $_REQUEST["email"];
	$username = $_REQUEST["username"];
    $pass = $_REQUEST["pass"];
    $IdCard = $_SESSION['Citizen_ID'];
    $fac_name = $_SESSION['Fac_name_Thai'];
    $major_name = $_SESSION['Major_name_Thai'];
    $grup_id = $_SESSION['Grup_ID'];
    $std_id = $_SESSION['Student_ID'];
    
    $check = "SELECT * FROM alumni_profile WHERE AP_idcard = '$IdCard'";
    $result1 = mysqli_query($conn,$check);
    $num=mysqli_num_rows($result1);

    if($num > 0){
        function phpAlert($msg) {
            echo '<script type="text/javascript">alert("' . $msg . '")</script>';
        }
        
        
         phpAlert(   "บัตรประชาชนนี้ได้ใช้สมัครแล้ว"   ); 
         echo "<script>window.location='login.php'</script>";
        mysqli_close($conn);

    } else{


   


	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO alumni_profile(AP_name, AP_Lname, AP_nickname,Grup_ID,major_name,fac_name, AP_email,AP_username ,AP_password, AP_idcard,std_ID)
			 VALUES('$name', '$lname', '$nickname','$grup_id','$fac_name','$major_name', '$email', '$username', '$pass','$IdCard',$std_id)";

	//$result = mysqli_query($conn, $sql) or die ("Error in query: $sql " . mysqli_error());
	$query = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 

	//ปิดการเชื่อมต่อ database
	mysqli_close($conn);
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
	

    if (!$query) {
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
    mysqli_close($conn);
}
     ?>