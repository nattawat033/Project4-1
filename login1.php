<?php
session_start();

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
		  $_SESSION["ReportError"]="Username or password is not correct";
	}

	if(isset($result[0])){
		header("location:home.php");
		$_SESSION["IDname"] = $result[0];
		$_SESSION["ReportError"]=null;
	}
										   
	// if ($err) 
	// {
	// 	echo +'Bad';
	// }
	// else {		
	// foreach ($result as $item) {
	// 	echo $item;
	// }
	// 	echo 'Good';
	// 	header("location:home.htm");
	// }

?>