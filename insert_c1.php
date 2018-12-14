<!DOCTYPE html>
<html lang="en">
<head>
		<title>Position</title>
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
            <h2>Position</h2>
            
        </header>
        
                    </section>

                <form name="form1" method="post" action="insert_c2.php">
  <div  align= "center" ><br>
  <table  width="800" border="1" style="width: 800px">
    <tbody>
    <!-- <tr> 
        <td width="125"> &nbsp;AP_ID :</td>
        <td width="180">
          <input name="AP_ID" type="hidden" id="AP_ID"  >
        </td>
      </tr> -->

      <tr> 
        <td width="125"> &nbsp;ชื่อหน่วยงานที่ทำ :</td>
        <td width="180">
          <input name="job_name" type="text" id="job_name" >
        </td>
      </tr>


      <tr>

        <td> &nbsp;ตำแหน่งงาน :</td>
        <!-- <td><input name="job_position" type="text" id="job_position"> -->
        <td>
        <select name="job_position">
	        <option value="งานดูแลระบบ NetWork">งานดูแลระบบ NetWork</option>
          <option value="งานดูแลเว็บไซด์ งานSEO">งานดูแลเว็บไซด์ งานSEO</option>
          <option value="งานที่ปรึกษาไอที">งานที่ปรึกษาไอที</option>
          <option value="web develooper">web develooper</option>
          <option value="งานโปรแกรมเมอร์">งานโปรแกรมเมอร์</option>
          <option value="Game programmer">Game programmer</option>
          <option value="Quality Assurance">Quality Assurance</option>
          <option value="Creative Content Manager">Creative Content Manager</option>
          <option value="งาน Application NetWork">งาน Application NetWork</option>
          <option value="งาน Database">งาน Database</option>
          <option value="Online Service Technician">Online Service Technician</option>
          <option value="งาน HardWare">งาน HardWare</option>
          <option value="งาน IT Audit">งาน IT Audit</option>
          <option value="IT Helpdesk">IT Helpdesk</option>
          <option value="Project co-ordinate">Project co-ordinate</option>
          <option value="งาน IT Project">งาน IT Project</option>
          <option value="งาน IT Security">งาน IT Security</option>
          <option value="งาน IT Support">งาน IT Support</option>
          <option value="งาน MIS">งาน MIS</option>
          <option value="งาน MObile">งาน MObile</option>
          <option value="Price authentication controller">Price authentication controller</option>
          <option value="งาน Wireless Communications">งาน Wireless Communications</option>
          <option value="งาน Software">งาน Software</option>
          <option value="งาน Software Tester">งาน Software Tester</option>
          <option value="งาน ออกแบบ UI/UX">งาน ออกแบบ UI/UX</option>
          <option value="นักวิทยาศาสตร์ข้อมูล">นักวิทยาศาสตร์ข้อมูล</option>
          <option value="งาน Business Developments">งาน Business Development</option>
          <option value="งาน การตลาด- Product management">งาน การตลาด- Product management</option>
          <option value="งาน บริหาร/นักวิเคราะห์ธุรกิจ">งาน บริหาร/นักวิเคราะห์ธุรกิจ</option>
          <option value="งาน Supply Chanin">งาน Supply Chain</option>
          <option value="Marketing communication">Marketing communication</option>
          <option value="Digital marketing & PR officer">Digital marketing & PR officer</option>
          <option value="งาน อีคอมเมอร์ซ">งาน อีคอมเมอร์ซ</option>
          <option value="Marketing Coordinator">Marketing Coordinator</option>
          <option value="Business Analyst">Business Analyst</option>
          <option value="กราฟิกดีไซต์">กราฟิกดีไซต์</option>
          <option value="ผู้จัดการทั่วไป">ผู้จัดการทั่วไป</option>
          <option value="บัญชี">บัญชี</option>
          <option value="Reservation Officer">Reservation Officer</option>
          <option value="เลขานุการฝ่ายโรงแรม">เลขานุการฝ่ายโรงแรม</option>
          <option value="Admin/ธุรการ">Admin/ธุรการ</option>
          <option value="เจ้าหน้าที่เทคนิค">เจ้าหน้าที่เทคนิค</option>
          <option value="อื่นๆ">อื่นๆ</option>
          <option value="ว่างงาน">ว่างงาน</option>
        </select></td>


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