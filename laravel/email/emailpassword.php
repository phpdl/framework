<?php
 
header('content-type:text/html;charset=utf-8');

		include 'dMail.php';
		$mail = new DMail();
		$mail->setServer();
		$mail->setReceiver("58427111@qq.com");
		$mail->setMail("动力密码重置提醒","你的密码重置为：123456 登录后请务必修改你的密码方便记忆和安全");
		if($mail->sendMail()){
		 	echo 1;
		}else{
			echo 0;
		}
?>