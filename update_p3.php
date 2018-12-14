<?php

$pid = $_POST['pid'];
$name = $_POST['name'];
$lname = $_POST['lname'];
$nickname = $_POST['nickname'];
$address = $_POST['address'];
$dis = $_POST['dis'];
$citty = $_POST['citty'];
$acode = $_POST['acode'];
$tell = $_POST['tell'];
$line = $_POST['line'];
$face = $_POST['face'];
$email = $_POST['email'];

$ext = pathinfo(basename($_FILES['img_pro']['name']),PATHINFO_EXTENSION);
$new_imgname =  'img_'.uniqid().".".$ext;
$img_path = "up_pro/";
$uploadpath = $img_path.$new_imgname;


move_uploaded_file($_FILES['img_pro']['tmp_name'],$uploadpath);

$img_pro = $new_imgname;


$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect,"utf8");

$sql = " update alumni_profile set AP_name = '$name' ,
									AP_Lname = '$lname',
									AP_nickname = '$nickname' ,
									img_pro = '$img_pro' ,
									AP_address = '$address' ,
									AP_district = '$dis' ,
									AP_citty = '$citty' ,
									AP_addcode = '$acode' ,
									AP_tell = '$tell' ,
									AP_lineID = '$line' ,
									AP_facebook = '$face' ,
									AP_email = '$email' 
									where AP_ID = $pid ";



$result = mysqli_query($connect,$sql);




if (!$result) {
    echo mysqli_error();
}
else{
  


	function phpAlert($msg) {
		echo '<script type="text/javascript">alert("' . $msg . '")</script>';
}


 phpAlert(   "อัพเดทข้อมูลส่วนตัวเรียบร้อยแล้ว"   ); 
 echo "<script>window.location='profile.php'</script>";

}

mysqli_close($connect);
 ?>







