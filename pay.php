<?php
if(empty($_COOKIE['mycookie_password']))
    {
    $mycookie_password=rand(100,time());
	setcookie('mycookie_password',$mycookie_password,time()+(60*60*24*300));
    }
	else $mycookie_password=$_COOKIE['mycookie_password'];
?>
<!DOCTYPE html>
<html>
<head>
<title>叶记</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<link href="styles/bootstrap.min.css" rel="stylesheet" />
<link href="styles/NewGlobal.css" rel="stylesheet" />
</head>
<body>
<?php	
		$order=$_GET['order'];
		$time=date("Y-m-d H:i:s");
		$mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `time`='$time' WHERE  `login`.`IP` ='$mycookie_password'and `login`.`order`='$order' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();	
	echo '支付完成！<br/>';
echo "<a href='login.php?order=gwc'>历史订单</a>";

?>
</body>
</html>