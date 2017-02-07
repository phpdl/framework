<?php
header('content-type:text/html;charset=utf-8');
#$pwd1 = 123456;
#$url = 'http://localhost/?id=666';
#$demail = '584271086@qq.com';
//发送邮件
		include 'dMail.php';
		$mail = new DMail();
		$mail->setServer();
		$mail->setReceiver($demail);
		$mail->setMail("账号激活","请点击下面链接激活你的账号：<a href='{$url}'>{$url}</a>");
		if($mail->sendMail()){
		 	echo 1;
		}else{
			echo 0;
		}
?>