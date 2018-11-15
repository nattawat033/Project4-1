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
            <h2>Expertise</h2>
            
        </header>
        
                    </section>

                <form name="form1" method="post" action="insert_ex2.php">
  <div  align= "center" ><br>
  <table  width="800" border="1" style="width: 800px">
    <tbody>
      <tr> 
        <td width="125"> &nbsp;ด้านระบบคุณภาพ :</td>
        <td width="180">
          <input name="Prof_quality" type="text" id="Prof_quality" >
        </td>
      </tr>
      <tr>
        <td> &nbsp;ด้านบุคลิกภาพ/มารยาททางสังคม :</td>
        <td><input name="Prof_personal" type="text" id="Prof_personal">
        </td>
      </tr>
      <tr>
        <td> &nbsp;ด้านการวางแผน :</td>
        <td><input name="Prof_plan" type="text" id="Prof_plan">
        </td>
      </tr>
      <tr>
        <td>&nbsp;ด้านภาษา	 :</td>
        <td><input name="Prof_language" type="text" id="Prof_language" ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;ด้านคอมพิวเตอร์ :</td>
        <td><input name="Prof_computer" type="text" id="Prof_computer"  ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;ด้านทักษะวิชาชีพ/ประสบการณ์การทำงาน :</td>
        <td><input name="Prof_experience" type="text" id="Prof_experience" ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;ด้านสันทนาการ :</td>
        <td><input name="Prof_creation" type="text" id="Prof_creation" ></td>
      </tr>
      <tr>
      <tr>
        <td>&nbsp;ด้านอื่นๆ	:</td>
        <td><input name="Prof_other" type="text" id="Prof_other" ></td>
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