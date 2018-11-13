<?php

$pid = $_POST['pid'];
$name = $_POST['name'];
$nickname = $_POST['nickname'];
$address = $_POST['address'];
$dis = $_POST['dis'];
$citty = $_POST['citty'];
$acode = $_POST['acode'];
$tell = $_POST['tell'];
$line = $_POST['line'];
$face = $_POST['face'];
$email = $_POST['email'];

$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect,"utf8");

$sql = " update alumni_profile set AP_name = '$name' , 
									AP_nickname = '$nickname' ,
									AP_address = '$address' ,
									AP_district = '$dis' ,
									AP_citty = '$citty' ,
									AP_addcode = $acode ,
									AP_tell = $tell ,
									AP_lineID = '$line' ,
									AP_facebook = '$face' ,
									AP_email = '$email' 
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
 //echo '<a href="Profile.php">Back</a>' ;


 function phpAlert($msg) {
    echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}


 phpAlert(   "อัพเดทข้อมูลส่วนตัวเรียบร้อยแล้ว"   ); 
 echo "<script>window.location='profile.php'</script>";

mysqli_close($connect);
 ?>







