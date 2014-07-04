<?php header('Content-Type: text/html; charset=UTF-8');
	session_start();
	
	$mycookie=$_COOKIE['email'];
	$order=$_GET['order'];
	$id=$_GET['id'];
	$address=$_POST['address'];
if(empty($address))$address=$_GET['address'];


	if($mycookie!=$address)
	setcookie('email',$address,time()+(60*60*24*300));

//------------------------
if($id==order)
{
                 $mysql = new SaeMysql();
				 $sql = "SELECT * FROM `rss_order` WHERE  `rss_order`.`order_sure`='1' and `rss_order`.`address`='$address'";
				 $data=$mysql->getData( $sql );
     if(empty($data))
     {
             $order_sure=time();
             $mail = new SaeMail();
                 $msg="欢迎订阅果果周刊！\r\n";
                 $msg.="请点击打开以下链接来激活你的邮箱：\r\n";
			 	 $msg.="http://1.testbeta.sinaapp.com/email.php?order_sure=".$order_sure."\r\n";
                 $msg.="你收到这封邮件，是因为有人用$address订阅了果果周刊。 如果这不是你本人的行为，请不要点击上面的链接，并请把这封邮件删除，你的邮箱不会被注册。\r\n";
       		 $mail->quickSend( $address , '果果周刊' ,$msg , '18020878508@163.com' , '940525'); 
                $mysql = new SaeMysql();
				$sql = "INSERT  INTO `rss_order` (`ID`, `address`, `order_sure`) VALUES (NULL,'$address','$order_sure') ";
             	
				$mysql->runSql( $sql );
				if( $mysql->errno() != 0 )
				{
  	 		 		die( "Error:" . $mysql->errmsg() );
				}
				$mysql->closeDb();
                echo "<h1><center><strong>请前往邮箱激活！</strong></center></h1>";
                echo "<center><a href='index.php'>返回主页</a></center>";
    }
    else
    {
    			echo "<h1><center><strong>您已经订阅过果果周刊,无需重复订阅！</strong></center></h1>";
                echo "<center><a href='index.php'>返回主页</a></center>";
    }
    
}
//---------------------------------------------------
if($id==noorder)
{
				$order_id=$_GET['order_id'];
				$mysql = new SaeMysql();
				$sql = "UPDATE  `app_testbeta`.`rss_order` SET  `order_sure`='0'  WHERE  `rss_order`.`order_sure`='1'and  `rss_order`.`address`='$address' and  `rss_order`.`ID`='$order_id' ORDER BY  `rss_order`.`ID` DESC limit 1"; 
    			$mysql->runSql( $sql );
				if( $mysql->errno() != 0 )
				{
  	 		 		die( "Error:" . $mysql->errmsg() );
				}
				$mysql->closeDb();
    			echo "<h1><center><strong>您已经成功取消订阅果果周刊！</strong></center></h1>";
                echo "<h3><center>欢迎您向我们提供宝贵的意见和建议,我们会努力改进的!</center></h3>";
             
                echo "<center><a href='javascript:window.close();'>关闭</a></center>";
                

}
			if(!empty($_GET['order_sure']))
            {
               $order_sure= $_GET['order_sure'];
            $mysql = new SaeMysql();
			$sql = "SELECT * FROM `rss_order` WHERE  `rss_order`.`order_sure`='$order_sure'ORDER BY  `rss_order`.`ID` DESC limit 1 ";
			$data=$mysql->getData( $sql );
			if( $mysql->errno() != 0 )
			{
  	 		 	die( "Error:" . $mysql->errmsg() );
			}
			$mysql->closeDb();
            $order_id=$data[0][ID];
            $order_email=$data[0][address];
                if($data[0][order_sure]==$order_sure)
                {
                $mysql = new SaeMysql();
				$sql = "UPDATE  `app_testbeta`.`rss_order` SET  `order_sure`='1'  WHERE  `rss_order`.`order_sure`='$order_sure' ORDER BY  `rss_order`.`ID` DESC limit 1"; 
				$mysql->runSql( $sql );
				if( $mysql->errno() != 0 )
				{
  	 		 		die( "Error:" . $mysql->errmsg() );
				}
				$mysql->closeDb();
                
                
                    
                    
                    echo "<h1><center><strong>恭喜你成功订阅果果周刊！</strong></center></h1>";
                    echo "<center><a href='javascript:window.close();'>关闭</a></center>";
                    $mail = new SaeMail();
                    $msg="你已经成功订阅果果周刊，果果周刊是一份专为西电学子打造的果园。\r\n";
					$msg.="我们每周日发送，完全免费。\r\n";
                    $msg.="若是对我们的周刊不满意,可心随时取消订阅\r\n";
                    $msg.="http://www.testbeta.sinaapp.com/email.php?id=noorder&address=$order_email&order_id=$order_id"."\r\n";
                    $msg.="欢迎您向我们提供宝贵的意见和建议。\r\n";
                    $mail->quickSend( $data[0][address] , '恭喜你成功订阅果果周刊' ,$msg , '18020878508@163.com' , '940525'); 
                    
                    
                    
                    
                    
                    
                }
            }

?>

