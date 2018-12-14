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
	$ID = $_SESSION['user_id'];
	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO professional (AP_ID,Prof_quality, Prof_personal, Prof_plan, Prof_language, Prof_computer, Prof_experience, Prof_creation, Prof_other)
            VALUES('$ID','$Prof_quality', '$Prof_personal', '$Prof_plan', '$Prof_language', '$Prof_computer', '$Prof_experience', '$Prof_creation', '$Prof_other') ";
             
             

	
             $query = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 
           
    
             if (!$query) {
                echo mysqli_error();
            }
            else{
                function phpAlert($msg) {
                    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                }
                
                
                 phpAlert(   "บันทึกข้อมูลเรียบร้อยแล้ว"   ); 
                 echo "<script>window.location='expertise.php'</script>";
                mysqli_close($conn);
    
            }
             //echo '<p align="center"><br><br><br>';
            // echo '<a href="career.php">Back</a>' ;
            
           
?>