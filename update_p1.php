<!DOCTYPE html>
<html>
	<head>
		<title>Profile</title>
		<meta http-equiv="content-type" content="text/php; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body id="top">

		<!-- Header -->
		<?php include "headerout.php"; ?>


		<!-- Main -->
      <section id="main" class="wrapper style1">
				<header class="major">
					<h2>Profile</h2>

<?php  

$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect, "utf8");
 

$sql = 'SELECT AP_ID,AP_name,AP_nickname,AP_address,AP_district,AP_citty,AP_addcode,AP_tell,AP_lineID,AP_facebook,AP_email from alumni_profile WHERE AP_ID  = '.$_SESSION['user_id'].'';

$result = mysqli_query($connect,$sql);
if (!$result) {
  echo mysqli_error()."<br>";
  die('Cant access database!');
}
else{
echo '<table border = "3" cellpading = "0"  align = "center">';
    echo '<tr>';
	echo '<td>ID	</td>';
    echo '<td>ชื่อ	</td>';
    echo '<td>ชื่อเล่น	</td>';
    echo '<td>ที่อยู่	</td>';
	echo '<td>อำเภอ	</td>';
	echo '<td>จังหวัด	</td>';
	echo '<td>รหัสไปรษณี	</td>';
	echo '<td>เบอร์	</td>';
	echo '<td>Line	</td>';
	echo '<td>Facebook	</td>';
	echo '<td>E-mail	</td>';


    
    echo '</tr>';
  while($row = mysqli_fetch_assoc($result)){
    echo '<form name = "frmupdate" action= "update_p2.php" method = "post">';
    echo '<tr>';
    while(list($key,$value) = each($row)){
      if($value == ''){
        echo '<td align=center>'.'&nbsp;'.'</td>';
      }
      else{
        echo '<td align=center>'.'&nbsp;'.$value.'&nbsp;'.'</td>';
      }
  }
        echo '<input type="hidden" name = "pid" value = "'.$row['AP_ID'].'">';

        echo '<td align=center ><input type="submit" value="update"></td>';
        echo '</tr>';
        echo '</form>';
}
    echo '</table>';
    mysqli_close($connect);
	echo '<p align="center">';
	echo '<br><br>';
	echo '<a href="Profile.php">Back</a>';
  }
 ?>
</section>
	<!-- Footer -->
	<?php include "footer.php"; ?>

	</body>
</html>