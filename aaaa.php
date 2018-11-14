<form name="frminsert" action=" ชื่อหน้าต่อไป  .php" method="post">
        <input type="text" name=" ชื่อค่าที่จะส่ง " />
        <input type="submit" name="bbbbb" class="btn btn-primary btn-large"  value="ใส่ชื่อ">       
</form>  




=============================================================================================================


<?php
$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect, "utf8");
	  if (!isset($smtUpdate)) {

		  $sql = 'SELECT  บัตรประชาชน FROM  alumni_profile  ';
		  $result = mysqli_query($connect,$sql);
		  $numrows = mysqli_num_rows($result);
		  $numfields = mysqli_num_fields($result);
		  $path = 'images/';   // Path สำหรับเชื่อมไปยังที่เก็บไฟล์รูป
		  
	  if (!$result) {
		  echo '<b>Error</b>'.mysqli_error().'<br>';
	  } elseif ($numrows==0) {
		  echo '<b>Query executed successfully but no row returns!</b>';
	  }else { 
		  while ($row = mysqli_fetch_array($result)) {
                if($row !=  .$_POST[' ชื่อค่าที่รับมา ']. ){

                    <form role="form" action=" หน้า 3 " method="post" name="signupform">
                    <div class="top-row">
                        <div class="field-wrap">
                            <input type="text" name="firstname" placeholder="ชื่อ " required value="<?php if($error) echo $firstname; ?>" class="form-control" />
                            <span class="text-danger"><?php if (isset($firstname_error)) echo $firstname_error; ?></span>
                        </div>

                        <div class="field-wrap">
                            <input type="text" name="lastname" placeholder="นามสกุล " required value="<?php if($error) echo $lastname; ?>" class="form-control" />
                            <span class="text-danger"><?php if (isset($lastname_error)) echo $lastname_error; ?></span>
                        </div>
                    </div>

                        <div class="field-wrap">
                            <input type="text" name="email" placeholder="อีเมลล์ " required value="<?php if($error) echo $email; ?>" class="form-control" />
                            <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                        </div>
              
                        <div class="field-wrap">
                          <input type="password" name="password" placeholder="รหัสผ่าน " required class="form-control" />
                          <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                        </div>
          
                        <div class="field-wrap">
                          <input type="password" name="cpassword" placeholder="ยืนยันรหัสผ่าน " required class="form-control" />
                          <span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
                        </div>
          
                        <div class="field-wrap">
                          <input type="text" name="phone" placeholder="ระบุเบอร์โทรศัพท์ " required class="form-control" />
                          <span class="text-danger"><?php if (isset($phone_error)) echo $phone_error; ?></span>
                        </div>

                      <button type="submit" name="signup" class="button button-block"/>สมัครสมาชิก</button>
                </form>
                      <span class="text-success"><?php if (isset($successmsg)) { echo $successmsg; } ?></span>
                      <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>
  

          		  }
		}
	}
		

?>  



=============================================================================================================


<?php
$connect = mysqli_connect("localhost","root","","testp");
mysqli_set_charset($connect, "utf8");

              // รับค่า
           $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
            $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);
            $phone = mysqli_real_escape_string($con, $_POST['phone']);


            // ตรวจสอบค่า
            if (!preg_match("/^[a-zA-Z ก-ฮ]+$/",$firstname)) {
              $error = true;
              $firstname_error = "Name must contain only alphabets and space";
            }
            if (!preg_match("/^[a-zA-Z ก-ฮ]+$/",$lastname)) {
              $error = true;
              $lastname_error = "Name must contain only alphabets and space";
            }
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
              $error = true;
              $email_error = "Please Enter Valid Email ID";
            }
            if(strlen($password) < 6) {
              $error = true;
              $password_error = "Password must be minimum of 6 characters";
            }
            if($password != $cpassword) {
              $error = true;
              $cpassword_error = "Password and Confirm Password doesn't match";
            }
            if (!preg_match("/^[0-9]+$/",$phone)) {
              $error = true;
              $phone_error = "Name must contain only alphabets and space";
            }
            if (!$error) {


            //  insert  
              if(mysqli_query($con, "INSERT INTO ชื่อตาราง(firstname,lastname,phone,email,password) 
              VALUES('" . $firstname . "','" . $lastname . "','" . $phone . "', '" . $email . "', '" . md5($password) . "')")) {
                
                 //  แจ้งเตือนสำเร็จ
                 '<script language="javascript" type="text/javascript"> 
                          alert("สมัครสมาชิกเรียบร้อยแล้ว !");
                          window.location = "index.php";
                      </script>';
              } else {
                   //  แจ้งเตือนผิดพลาด
                echo '<script language="javascript" type="text/javascript"> 
                          alert("ข้อมูลผิดพลาด ! กรุณาตรวจสอบใหม่อีกครั้ง");
                          window.location = "index.php";
                      </script>';
                     }
                         }
?>