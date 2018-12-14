<?php
include('connectDB.php');
session_start();
  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
	//สร้างตัวแปรเก็บค่าที่รับมาจากฟอร์ม
	$major_name = $_REQUEST["major_name"];
	$fac_name = $_REQUEST["fac_name"];
    $univer = $_REQUEST["univer"];
    $county = $_REQUEST["county"];
    $ID = $_SESSION['user_id'];

	//เพิ่มเข้าไปในฐานข้อมูล
	$sql = "INSERT INTO edu_bg (Edu_ID,AP_ID, Edu_major, Edu_fac, Edu_univercitty, Edu_county)
            VALUES(1,'$ID','$major_name', '$fac_name', '$univer', '$county') ";
             
             

	
             $query = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 
           
    
             if (!$query) {
                echo mysqli_error();
            }
            else{
                function phpAlert($msg) {
                    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
                }
                
                
                 phpAlert(   "บันทึกข้อมูลเรียบร้อยแล้ว"   ); 
                 echo "<script>window.location='education.php'</script>";
                mysqli_close($conn);
    
            }
             //echo '<p align="center"><br><br><br>';
            // echo '<a href="career.php">Back</a>' ;
            
           
?>