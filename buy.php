<?php
	$mycookie=$_COOKIE['email'];
	preg_match_all("/\+\+\+(.*?)\+\+\+/",$mycookie,$cookie_address);
	$cookie_address=$cookie_address[1][0];
	if(empty($cookie_address))$cookie_address='';

	preg_match_all("/\!(.*?)\!/",$_COOKIE['user'],$cookie_name);
	if(!empty($_COOKIE['user']))
          $cookie_name=$cookie_name[1][0];
	else $cookie_name="我";


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
		$time=date("Y-m-d H:i");
        $id=$_GET['id'];
		$getip=$_SERVER["REMOTE_ADDR"];
if(empty($_COOKIE['mycookie_password']))
    {
	setcookie('mycookie_password',rand(100,time()),time()+(60*60*24*300));
    }
	$mycookie_password=$_COOKIE['mycookie_password'];
    	$order_time=time();
		$order=$_POST['order'];
		if(empty($order))
		$order=$_GET['order'];
		echo $mycookie_IP;
if($id==1)
{
		echo "
    	<div class='header'>
        <a href='login.php?order=gwc' class='home'>
   		<span class='header-icon header-icon-home'></span>
		</a>
		<div class='title' id='titleString'>下单成功</div>
		</div>";
		require("show_list.php");
    	echo "<div style='clear:both;text-align:center;font-weight:bold'> 总计:".$all_prices."元</div>";
    echo "<div style='clear:both;text-align:left'>";
        echo "姓名: ".$data[0][name]."<br/>";
	    echo "地址: ".$data[0][address]."<br/>";
        echo "电话:".$data[0][phone]."<br/>"; 
        echo "<strong>订单编号:".$order_time."</strong><br/></div>"; 
    /*
    	echo"发送订单详情到我邮箱";
    	echo "<form name='oeder_email' method='post' action='email.php?order=$order_time'>
    		<input type='text' name='address' placeholder='请输入邮箱地址' value=$cookie_address >
    		<input type='submit'  name='sent_order'  value='发送' />
			</form>";
            */
    //----------------测试-----------------------------------
    //   echo "<div class='control-group tc'>";
   //    echo "<p class='red'></p>";
    //   echo "<input type='button' name='tjdd' onclick=\"window.location.href='pay.php?order=$order_time'\" value='模拟付款完成,查看订单状态' id='goumai' class='btn-large green button width80'/>";
    //   echo "</div>";
    //-------------------------------------------------------
		$mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `order` = '$order_time' WHERE  `login`.`IP` ='$mycookie_password' and `login`.`order` ='0' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
 
foreach($data as $mydata)
{    
$list_id=$mydata[list_id];
$flag_order='buy';
require('visit.php');
}  
    
    
    
			
		     $mail = new SaeMail();
             $msg="http://1.testbeta.sinaapp.com/buy.php?id=so&order=$order_time";
       		 $mail->quickSend( 'xdxjj@189.cn' , '订单-'.$data[0][name] ,$msg , '18020878508@163.com' , '940525'); 
}
if($id==22)
{
    	echo "
    	<div class='header'>
       <a href='login.php?order=gwc' class='home'>
   <span class='header-icon header-icon-home'></span>
</a>
		<div class='title' id='titleString'>取消成功</div>
		</div>";
        echo "<div class='container'>
    			<ul class='giftlist unstyled'>";
        echo"</ul></div> ";
        $mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `time`='0'  WHERE  `login`.`IP` ='$mycookie_password' and `login`.`order` ='$order' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
}
if($id==2)
{
    	echo "
    	<div class='header'>
        <a href='login.php?order=gwc' class='home'>
   		<span class='header-icon header-icon-home'></span>
		</a>
		<div class='title' id='titleString'>取消成功</div>
		<a href='javascript:history.go(-1);' class='back'>
    	<span class='header-icon header-icon-return'></span>
		</a>
		</div>";
    	echo "<div class='container'>
    			<ul class='giftlist unstyled'>";
       echo"</ul></div> ";
        $mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `order` = 'fail',`time`='&time'  WHERE  `login`.`IP` ='$mycookie_password' and `login`.`order` ='0' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
     require("lsdd.php");
}
if($id==3)
{
    echo "
    	<div class='header'>
        <a href='login.php?order=gwc' class='home'>
   <span class='header-icon header-icon-home'></span>
</a>
		<div class='title' id='titleString'>购物车已清空</div>
		</div>";
    	echo "<div class='container'>
    			<ul class='giftlist unstyled'>";
        echo"</ul></div> ";
    	$mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `order` = 'clear' WHERE  `login`.`IP` ='$mycookie_password' and `login`.`order` ='0' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
}
//--------------------------------------------------------------------------
if($id==so)
{
echo "
    	<div class='header'>
        <a href='login.php?order=gwc' class='home'>
   <span class='header-icon header-icon-home'></span>
</a>
		<div class='title' id='titleString'>订单详情</div>
		<a href='javascript:history.go(-1);' class='back'>
    	<span class='header-icon header-icon-return'></span>
		</a>
		</div>";

    	require("show_buy.php");
    /*
    	echo"发送订单详情到我邮箱";
    	echo "<form name='oeder_email' method='post' action='email.php?order=$order_time'>
    		<input type='text' name='address' placeholder='请输入邮箱地址' value=$cookie_address >
    		<input type='submit'  name='sent_order'  value='发送' />
			</form>";

*/
}
?>
    <!--
    <form name="so" method="post" action="buy.php?id=so" >
    <input type="text" name="order" placeholder="请输入订单编号">
    <input type="submit"  name="so"  value="搜索" />
    </form>
	-->
    <div class="header">
    <div class="title" id="titleString"><a href="index.php">返回首页</a></div>

</div>
</body>
</html>
