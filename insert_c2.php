<?php
include('connectDB.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$job_name = $_REQUEST["job_name"];
	$job_position = $_REQUEST["job_position"];
	$job_address = $_REQUEST["job_address"];
	$job_district = $_REQUEST["job_district"];
    $job_citty = $_REQUEST["job_citty"];
    $job_addcode = $_REQUEST["job_addcode"];
    $job_tell = $_REQUEST["job_tell"];
    $job_fax = $_REQUEST["job_fax"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	//$sql = "INSERT INTO job (job_name, job_position, job_address, job_district, job_citty, job_addcode, job_tell, job_fax)
    //         VALUES('$job_name', '$job_position', '$job_address', '$job_district', '$job_citty', '$job_addcode', '$job_tell', '$job_fax')";
             
             

	
	
	//ปิดการเชื่อมต่อ database
	
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
    
        $sql = "INSERT INTO job (job_name, job_position, job_address, job_district, job_citty, job_addcode, job_tell, job_fax) 
        VALUES ('".$_POST["job_name"]."','".$_POST["job_position"]."','".$_POST["job_address"]."',
        '".$_POST["job_district"]."','".$_POST["job_citty"]."','".$_POST["job_addcode"]."',
        '".$_POST["job_tell"]."','".$_POST["job_fax"]."')";
	mysqli_query($conn, $sql);


	// if(mysqli_query($conn, "INSERT INTO job (job_name, job_position, job_address, job_district, job_citty, job_addcode, job_tell, job_fax) 
    // VALUES('" . $job_name . "','" . $job_position . "','" . $job_address . "', '" .$job_district . "', 
    //        '" . $job_citty . "', '" .$job_addcode . "', '" . $job_tell . "', '" . $job_fax . "')")){
    
   
    echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลเรียบร้อย');";
	echo "location = 'profession.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลล้มเหลว กรุณาลองใหม่อีกครั้ง');";
    echo "location = 'insert_c1.php'; ";
    echo "</script>";
    
    
    mysqli_close($conn);
}
?>