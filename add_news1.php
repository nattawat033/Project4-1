<!DOCTYPE html>
<html>
<head>
        

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ADD NEWS</title>
	<!--bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- ckeditor-->
<script src="//cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>


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


</head>
<body>

<?php include "headeradmin.php"; 
    ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
        <br><br><br>
    <form action="add_news2.php" method="POST" enctype="multipart/form-data"  name="addform" class="form-horizontal" id="addform">
    	<div class="form-group">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
       <h2> เพิ่มข่าวประชาสัมพันธ์  </h2>
       </div>
       </div>
       <div class="form-group">
       	<div class="col-sm-2" align="right"> หัวข้อข่าว : </div>
          <div class="col-sm-8" align="left">
            <input  name="title" id="title" type="text" required class="form-control"  placeholder="หัวข้อข่าว"/>
          </div>
      </div>
        
        <div class="form-group">
        <div class="col-sm-2" align="right">รายละเอียด</div>
          <div class="col-sm-8" align="left">
           <textarea name="txtMessage" id="txtMessage" class="ckeditor" cols="69" rows="5"></textarea>
          </div>
        </div>
        
        
        <div class="form-group">
        <div class="col-sm-2" align="right">ไฟล์ประกอบ</div>
          <div class="col-sm-7" align="left">
            <input type="file" name="img" id="img" required accept= "image/jpeg ">
          </div>
        </div>
        
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <button type="submit" class="btn btn-primary" id="btn"> บันทึก
           </button>
          </div>
           
      </div>
      </form>
</div>
</div>
</div>	
</body>
</html>