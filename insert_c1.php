<!DOCTYPE html>
<html lang="en">
<head>
		<title>Profession</title>
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
<body id = "top">
    <!-- Header -->
		<?php include "headerout.php"; ?>

<!-- Main -->
    <section id="main" class="wrapper style1">
        <header class="major">
            <h2>Profession</h2>
            
        </header>
        
                    </section>

                <form name="form1" method="post" action="insert_c2.php">
  <div  align= "center" ><br>
  <table  width="800" border="1" style="width: 800px">
    <tbody>
      <tr> 
        <td width="125"> &nbsp;ชื่อหน่วยงานที่ทำ :</td>
        <td width="180">
          <input name="job_name" type="text" id="job_name" >
        </td>
      </tr>
      <tr>
        <td> &nbsp;ตำแหน่งงาน :</td>
        <td><input name="job_position" type="text" id="job_position">
        </td>
      </tr>
      <tr>
        <td> &nbsp;ที่อยู่ที่ทำงาน :</td>
        <td><input name="job_address" type="text" id="job_address">
        </td>
      </tr>
      <tr>
        <td>&nbsp;อำเภอ	 :</td>
        <td><input name="job_district" type="text" id="job_district" ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;จังหวัด :</td>
        <td><input name="job_citty" type="text" id="job_citty"  ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;รหัสไปรษณีย์ :</td>
        <td><input name="job_addcode" type="text" id="job_addcode" ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;เบอร์โทร :</td>
        <td><input name="job_tell" type="text" id="job_tell" ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;โทรสาร	:</td>
        <td><input name="job_fax" type="text" id="job_fax" ></td>
      </tr>
      <tr>
       
</td>
      </tr>
    </tbody>
  </table>
  </div>
  <br>
  <div  align= "center" >
  <input type="submit" name="Submit" value="Save">
  </div>
</form>    



</body>
</html>