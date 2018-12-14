<?php
include('connectDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี

session_start();
    //สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม 
    $ID = $_SESSION['user_id'];
	$job_name = $_REQUEST["job_name"];
	$job_position = $_REQUEST["job_position"];
	$job_address = $_REQUEST["job_address"];
	$job_district = $_REQUEST["job_district"];
    $job_citty = $_REQUEST["job_citty"];
	$job_addcode = $_REQUEST["job_addcode"];
	$job_tell = $_REQUEST["job_tell"];
	$job_fax = $_REQUEST["job_fax"];
   
    
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO job(AP_ID,job_name, job_position, job_address,job_district ,job_citty, job_addcode, job_tell, job_fax)
			 VALUES('$ID','$job_name', '$job_position', '$job_address', '$job_district', '$job_citty','$job_addcode','$job_tell','$job_fax') ";

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
    
    
     phpAlert(   "บันทึกข้อมูลเรียบร้อยแล้ว"   ); 
     echo "<script>window.location='profession.php'</script>";
    mysqli_close($conn);
     ?>