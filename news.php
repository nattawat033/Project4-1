<!DOCTYPE html>
<html lang="en">
<head>
        <title>NEWS</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
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
     <style>

         /* Rules for sizing the icon. */
.material-icons.md-18 { font-size: 18px; }
.material-icons.md-24 { font-size: 24px; }
.material-icons.md-36 { font-size: 36px; }
.material-icons.md-48 { font-size: 48px; }
.material-icons.md-78 { font-size: 78px; }
 
/* Rules for using icons as black on a light background. */
.material-icons.md-dark { color: rgba(0, 0, 0, 0.54); }
.material-icons.md-dark.md-inactive { color: rgba(0, 0, 0, 0.26); }
 
/* Rules for using icons as white on a dark background. */
.material-icons.md-light { color: rgba(255, 255, 255, 1); }
.material-icons.md-light.md-inactive { color: rgba(255, 255, 255, 0.3); }
 
.material-icons.orange600 { color: #FB8C00; }

     #test {
	background: #CCFFFF;
    color: #000080;
    padding: 6em 0 4em 0;
    
}


</style>
        
</head>
<body>
            <section id="main" class="wrapper style1">
				<header class="major">
					<h2>ข่าวประชาสัมพันธ์ / กิจกรรม</h2>
					
				</header>
				
            </section>
        



    <section id="two" class="wrapper style1">
        <div align = "right">
        
    <a href="add_news1.php"class="button " > <i class="material-icons">library_add</i> &nbsp เพิ่มกิจกรรม ข่าวประชาสัมพันธ์ </a>
        </div>
        </section>
    
    <?php
    include "headeradmin.php";
    ?>
    <?php
    include "connectDB.php";
    mysqli_set_charset($conn,"utf8");
	
    $sql = 'SELECT * FROM articles ORDER BY  datesave DESC   ';
    $query = mysqli_query($conn,$sql);
    $numrows = mysqli_num_rows($query);
    $numfields = mysqli_num_fields($query);
    
    ?>  



<!-- ทดลอง -->
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
<section id="test"  >
				<header class="major">
					<h2></h2>
					<p></p>
				</header>
				<div class="container">
					<div class="row">
						<div class="6u">
							<section class="special">
                                <img src="img/<?php echo $result["img"];?>" width="800px" height = "500px">
								<h2><?php echo $result["title"];  ?></h2>
								<p></p>
								<ul class="actions">
									<h2>รายละเอียดข่าว / กิจกรรม  </h2> <h3><?php echo $result["txtMessage"];  ?></h3><br>
									<li>ผู้โพส :<?php echo $result["AP_name"];  ?> &nbsp <?php echo $result["AP_Lname"]?> &nbsp เวลาที่โพส :  <?php echo $result["datesave"]?>  </li>
									
								</ul>
								
								<?php echo "<a href='delete-new.php?a_id=$result[a_id]'class='button ' >ลบข่าวประชาสัมพันธ์ </a>"?>
							</section>
							
						</div>
						
			</section>



<?php
}
?>




	<!-- Footer -->
    <?php include "footer.php"; ?>  
</body>
</html>