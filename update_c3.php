<?php

$pid = $_POST['pid'];
$name = $_POST['name'];
$position = $_POST['position'];
$address = $_POST['address'];
$dis = $_POST['dis'];
$citty = $_POST['citty'];
$acode = $_POST['acode'];
$tell = $_POST['tell'];
$fax = $_POST['fax'];

$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect,"utf8");

$sql = " update job set job_name = '$name' , 
						job_position = '$position' ,
						job_address = '$address' ,
						job_district = '$dis' ,
						job_citty = '$citty' ,
						job_addcode = $acode ,
						job_tell = $tell ,
						job_fax = $fax
								where AP_ID = $pid ";

//$sql = 'update alumni_profile set AP_name = "'.$_POST['pname'].'" where AP_ID = "'. $_POST['pid'].'"';
//$result = mysqli_query($connect,$sql);

//$sql = 'update alumni_profile set std_ID = "'.$_POST['price'].'" where AP_ID = "'. $_POST['pid'].'"';
$result = mysqli_query($connect,$sql);



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


 phpAlert(   "อัพเดทข้อมูลที่ทำงานเรียบร้อยแล้ว"   ); 
 echo "<script>window.location='profession.php'</script>";
mysqli_close($connect);
 ?>
