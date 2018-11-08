<!DOCTYPE html>
<html>
	<head>
		<title>Expertise</title>
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
		<?php include "header.php"; ?>


		<!-- Main -->
      <section id="main" class="wrapper style1">
				<header class="major">
					<h2>Expertise</h2>


          <?php
$connect = mysqli_connect("localhost","root","","testp");
$sql = "select  AP_ID,Prof_quality,Prof_personal,Prof_plan,Prof_language,Prof_computer,
					  Prof_experience,Prof_creation,Prof_other   from professional";

$result = mysqli_query($connect,$sql);
if (!$result) {
  echo mysqli_error()."<br>";
  die('Cant access database!');
}
else{
echo '<table border = "3" cellpading = "0"  align = "center">';
    echo '<tr>';
	echo '<td>AP_ID	</td>';
	echo '<td>ด้านระบบคุณภาพ	</td>';
	echo '<td>ด้านบุคลิกภาพ/มารยาททางสังคม</td>';
	echo '<td>ด้านการวางแผน</td>';
    echo '<td>ด้านภาษา	</td>';
    echo '<td>ด้านคอมพิวเตอร์</td>';
	echo '<td>ด้านทักษะวิชาชีพ/ประสบการณ์การทำงาน</td>';
	echo '<td>ด้านสันทนาการ</td>';
	echo '<td>ด้านอื่นๆ</td>';
    
    echo '</tr>';
  while($row = mysqli_fetch_assoc($result)){
    echo '<form name = "frmupdate" action= "update_ex2.php" method = "post">';
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
	echo '<a href="expertise.php">Back</a>';
  }
 ?>
</section>
	<!-- Footer -->
	<?php include "footer.php"; ?>

	</body>
</html>