<?php 
header('content-type:text/html;charset=utf-8');
if(empty($vcode) || empty($uname)){
	echo 403;
	exit;
}
		include 'dMail.php';
		$mail = new DMail();
		$mail->setServer();
		$mail->setReceiver($uname);
		$mail->setMail("动力欢迎您","你的邮箱验证码是：{$vcode}");
		if($mail->sendMail()){
		 	echo 1;
		}else{
			echo 500;
		}
?>