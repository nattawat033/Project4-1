<?php
include('connectDB.php');
session_start();
  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$Prof_quality = $_REQUEST["Prof_quality"];
	$Prof_personal = $_REQUEST["Prof_personal"];
	$Prof_plan = $_REQUEST["Prof_plan"];
	$Prof_language = $_REQUEST["Prof_language"];
    $Prof_computer = $_REQUEST["Prof_computer"];
    $Prof_experience = $_REQUEST["Prof_experience"];
    $Prof_creation = $_REQUEST["Prof_creation"];
    $Prof_other = $_REQUEST["Prof_other"];
	
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = 'INSERT INTO joprofessionalb (Prof_quality, Prof_personal, Prof_plan, Prof_language, Prof_computer, Prof_experience, Prof_creation, Prof_other)
            VALUES("$Prof_quality", "$Prof_personal", "$Prof_plan", "$Prof_language", "$Prof_computer", "$Prof_experience", "$Prof_creation", "$Prof_other") 
            WHERE AP_ID  = '.$_SESSION['user_id'].'';
             
             

	
	
	//ปิดการเชื่อมต่อ database
	
	//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
    
        // $sql = "INSERT INTO professional (Prof_quality, Prof_personal, Prof_plan, Prof_language, Prof_computer, Prof_experience, Prof_creation, Prof_other) 
        // VALUES ('".$_POST["Prof_quality"]."','".$_POST["Prof_personal"]."','".$_POST["Prof_plan"]."',
        // '".$_POST["Prof_language"]."','".$_POST["Prof_computer"]."','".$_POST["Prof_experience"]."',
        // '".$_POST["Prof_creation"]."','".$_POST["Prof_other"]."')";
	mysqli_query($conn, $sql);


	// if(mysqli_query($conn, "INSERT INTO job (job_name, job_position, job_address, job_district, job_citty, job_addcode, job_tell, job_fax) 
    // VALUES('" . $job_name . "','" . $job_position . "','" . $job_address . "', '" .$job_district . "', 
    //        '" . $job_citty . "', '" .$job_addcode . "', '" . $job_tell . "', '" . $job_fax . "')")){
    
    if($result){
    echo "<script type='text/javascript'>";
	echo "alert('บันทึกข้อมูลเรียบร้อย');";
	echo "location = 'profession.php'; ";
	echo "</script>";
	}
	else{
	echo "<script type='text/javascript'>";
    echo "alert('บันทึกข้อมูลล้มเหลว กรุณาลองใหม่อีกครั้ง');";
    echo "location = 'insert_ex1.php'; ";
    echo "</script>";
    
    
    mysqli_close($conn);
}
?>