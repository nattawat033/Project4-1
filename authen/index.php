<?php
// ------------------------------------ �ѧ���� 㹡����ա�� PSU PASSPORT ------------------------------
/* Load factory class */

require_once("libraries/nusoap.php");   // ------------------------------------ Class 㹡�����¡�� ����ͧ任�Ѻ������ ------------------------------

$proxyhost = '';$proxyport ='';

     $client = new nusoapclient("http://passport.psu.ac.th/authentication/authentication.asmx",false,$proxyhost, $proxyport);
	$client->soap_defencoding = 'utf-8';
	$params = array(
            'username' =>  $_POST['txtUserId'],
            'password' =>  $_POST['txtPassword']
        );
        
 $result = $client->call('GetUserDetails', $params, 'http://tempuri.org/', 'http://tempuri.org/GetUserDetails', false, false, 'rpc', 'literal');

		$err = $client->getError();
		
		if($err){
      $message = "wrong ID or PASSWORD";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("location:signin.php");
    }
  
    if(isset($result[0])){
      header("location:home.php");
      $_SESSION["IDname"] = $result[0];
    }

?>







<!doctype html>
<html>
<head>

<title>Untitled Document</title>
</head>

<body>
	<form class="signin" method="post">
  <fieldset class="common-form standard-form">
    <table cellspacing="0" width="95%">
      <tr>
        <th><label for="txtUserId">Username</label></th>

        <td><input id="txtUserId" name="txtUserId" type="text" value="" /></td>
      </tr>
      <tr>
        <th><label for="txtPassword">Password</label></th>
        <td><input id="txtPassword" name="txtPassword" type="password" value="" /></td>
      </tr>
           
      <tr>
        <th></th>
        <td><input class="btn btn-m" id="signin_submit" name="commit" type="submit" value="Sign In" /></td>
      </tr>
    </table>

  </fieldset>
</form>

<?
for ($i = 0; $i <= 20; $i++) 
					{
  					echo $result[$i]."<br/>";
					}
?>


</body>
</html>
