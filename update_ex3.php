<?php

$pid = $_POST['pid'];
$quality = $_POST['quality'];
$personal = $_POST['personal'];
$plan = $_POST['plan'];
$language = $_POST['language'];
$computer = $_POST['computer'];
$experience = $_POST['experience'];
$creation = $_POST['creation'];
$other = $_POST['other'];


$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect,"utf8");
$sql = " update professional set Prof_quality = '$quality' , 
						Prof_personal = '$personal' ,
						Prof_plan = '$plan' ,
						Prof_language = '$language' ,
						Prof_computer = '$computer',
						Prof_experience = '$experience' ,
						Prof_creation = '$creation' ,
						Prof_other = '$other'  
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
 //echo '<a href="expertise.php">Back</a>' ;

 function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}


 phpAlert(   "อัพเดทข้อมูลความชำนาญเรียบร้อยแล้ว"   ); 
 echo "<script>window.location='expertise.php'</script>";

mysqli_close($connect);
 ?>
