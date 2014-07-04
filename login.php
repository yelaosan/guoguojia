<?php 


	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	$mycookie=$_COOKIE['user'];
	preg_match_all("/\!(.*?)\!/",$mycookie,$cookie_name);
	preg_match_all("/\`(.*?)\`/",$mycookie,$cookie_phone);
	preg_match_all("/\^(.*?)\^/",$mycookie,$cookie_adr);
	$cookie_name=$cookie_name[1][0];
	$cookie_phone=$cookie_phone[1][0];
	$cookie_adr=$cookie_adr[1][0];

	$tel=$_POST['tel'];
if(empty($tel))$tel=$cookie_phone;
	$adr=$_POST['adr'];
if(empty($adr))$adr=$cookie_adr;
	$name=$_POST['name'];
if(empty($name))$name=$cookie_name;
    $number=$_POST['number'];
	$list_id=$_GET['id'];
	$list_class=$_POST['class'];
	
	$list_id.=$list_class;
	require("price.php");
	$prices=$number*$price; 
	$time=date("Y-m-d H:i");
	$getip=$_SERVER["REMOTE_ADDR"];
	$order=$_POST['order'];
	if(empty($order))
	$order=$_GET['order'];

	if(!empty($tel)&&!empty($adr)&&!empty($name))
    {	
        $mycookie='!'.$name.'!^'.$adr.'^`'.$tel.'`['.time().']';
		setcookie('user',$mycookie,time()+(60*60*24*300));
    }
	if(empty($_COOKIE['mycookie_password'])||$_GET['clear']==1)
    {
    $mycookie_password=rand(100,time());
	setcookie('mycookie_password',$mycookie_password,time()+(60*60*24*300));
    }
	else $mycookie_password=$_COOKIE['mycookie_password'];

	
	preg_match_all("/\!(.*?)\!/",$mycookie,$cookie_name);
	if(!empty($mycookie))
          $cookie_name=$cookie_name[1][0];
	else $cookie_name="我";
    
?>
<!DOCTYPE html>
<html>
<head>
<title>交易</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<link href="styles/bootstrap.min.css" rel="stylesheet" />
<link href="styles/NewGlobal.css" rel="stylesheet" />
</head>
<body> 
    
<?php 

if(!empty($list_id))
{
//------------------------------------------------立即购买------------------------------------------------
if($order=='立即购买')
{
    		echo "
    		<div class='header'>
            <a href='login.php?order=gwc' class='home'>
   			<span class='header-icon header-icon-home'></span>
			</a>
			<div class='title' id='titleString'>购物详情</div>
			<a href='javascript:history.go(-1);' class='back'>
    		<span class='header-icon header-icon-return'></span>
			</a>
			</div>";
			$mysql = new SaeMysql();
			$sql = "INSERT  INTO `login` (`ID`, `name`, `time`, `phone`, `address`,`list_id`,`list_num`,`list_prices`,`IP`,`order`) VALUES (NULL,'$name','$time','$tel','$adr','$list_id','$number','$prices','$mycookie_password','0') ";
        	$mysql->runSql( $sql );
			if( $mysql->errno() != 0 )
			{
  	 		 	die( "Error:" . $mysql->errmsg() );
			}
			$mysql->closeDb();	

       		require("show_list.php");
       		
   	 		if(!empty($cookie_phone)&&!empty($cookie_adr)&&!empty($cookie_name))
            {		  
                	  $mysql = new SaeMysql();
					  $sql = "UPDATE  `app_testbeta`.`login` SET  `name` =  '$cookie_name',`phone`='$cookie_phone',`address`='$cookie_adr',`time`='$time' WHERE  `login`.`IP` ='$mycookie_password'and `login`.`order` ='0' ORDER BY  `login`.`ID` DESC "; 
					  $mysql->runSql( $sql );
					 if( $mysql->errno() != 0 )
					  {
  	 					 die( "Error:" . $mysql->errmsg() );
					  }
					  $mysql->closeDb();	
                echo "<div >";
                	  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                echo "<div style='clear:both;text-align:center;font-weight:bold'> 总计:".$all_prices."元<br/></div>";
                echo "<div style='clear:both;text-align:left'>";
                echo " 姓名: ".$cookie_name."<br/>";
                echo " 地址: ".$cookie_adr."<br/>";
                echo " 电话:".$cookie_phone."<br/>";
                echo "</div>";
                echo "<a href='order.php'>修改个人信息</a></div>";
                echo "<div class='control-group tc'>";
       			echo "<p class='red'></p>";
       			echo "<input type='button' name='tjdd' onclick=\"window.location.href='buy.php?id=1'\" value='提交订单' id='goumai' class='btn-large green button width80'/>";
      			echo "<input type='submit' name='xdd'  onclick=\"window.location.href='buy.php?id=2'\" value='取消订单' id='goumai' class='btn-large green button width80'/>";
       			echo "</div>";
            }
            else
            {
            echo "<p> 总计:".$all_prices."元</p></div>";
	   		echo "<div class='control-group tc'>";
       		echo "<p class='red'></p>";
       		echo "<input type='button' name='tjdd' onclick=\"window.location.href='order.php'\" value='下订单' id='goumai' class='btn-large green button width80'/>";
      		echo "<input type='submit' name='xdd'  onclick=\"window.location.href='buy.php?id=2'\" value='不买了' id='goumai' class='btn-large green button width80'/>";
       		echo "</div></div>";
            }
            
		
}
//---------------------------------------------加入购物车-------------------------------------------------
   
   if($order=="加入购物车"||$order=="jrgwc")
{	
    		if($_GET['clear_gwc']=='1')
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
                	 require("lsdd.php");//-----------------历史订单----------  ----
             }
       	else
       		{
                
    		echo "
    		<div class='header'>
            
			<div class='title' id='titleString'>".$cookie_name."的购物车</div>
			<a href='javascript:history.go(-1);' class='back'>
    		<span class='header-icon header-icon-return'></span>
			</a>
			</div>";
    		if(!empty($list_id))
        	{
				$mysql = new SaeMysql();
				$sql = "INSERT  INTO `login` (`ID`, `name`, `time`, `phone`, `address`,`list_id`,`list_num`,`list_prices`,`IP`,`order`) VALUES (NULL,'$name','$time','$tel','$adr','$list_id','$number','$prices','$mycookie_password','0') ";
				$mysql->runSql( $sql );
				if( $mysql->errno() != 0 )
				{
  	 		 		die( "Error:" . $mysql->errmsg() );
				}
				$mysql->closeDb();		
        	}
    		echo "<p align='right'><a href='login.php?order=jrgwc&clear_gwc=1&id=179'>清空购物车</a></p>";
      	    require("show_list.php");
            echo "<div style='clear:both;text-align:center;font-weight:bold'> 总计:".$all_prices."元</div>";
   	   
	  	    echo "<div class='control-group tc'>";
       		echo "<p class='red'></p>";
       		if(!empty($cookie_phone)&&!empty($cookie_adr)&&!empty($cookie_name))
       			echo "<input type='button' name='tjdd' onclick=\"window.location.href='login.php?id=return'\" value='下订单' id='goumai' class='btn-large green button width80'/>";
            else
                echo "<input type='button' name='tjdd' onclick=\"window.location.href='order.php'\" value='下订单' id='goumai' class='btn-large green button width80'/>";
       		echo "<input type='button' name='jxdd' onclick=\"window.location.href='index.php'\" value='继续添加' id='goumai' class='btn-large green button width80'/>";
       		
       		echo "</div></div>";
	   	}
}
//------------------------------------------------查看购物车--------------------------------------------------------------
}
if($order==gwc)
{
    	echo "
    	<div class='header'>
		<div class='title' id='titleString'>".$cookie_name."的购物车</div>
		<a href='javascript:history.go(-1);' class='back'>
    	<span class='header-icon header-icon-return'></span>
		</a>
		</div>";
       
       require("show_list.php");
       if(!empty($data))
       {
           echo "<p align='right'><a href='buy.php?id=3'>清空购物车</a></p>";
        echo "<div style='clear:both;text-align:center;font-weight:bold'> 总计:".$all_prices."元</div>";
	   echo "<div class='control-group tc'>";
       echo "<p class='red'></p>";
           if(!empty($cookie_phone)&&!empty($cookie_adr)&&!empty($cookie_name))
       echo "<input type='button' name='tjdd' onclick=\"window.location.href='login.php?id=return'\" value='下订单' id='goumai' class='btn-large green button width80'/>";
           else
       echo "<input type='button' name='tjdd' onclick=\"window.location.href='order.php'\" value='下订单' id='goumai' class='btn-large green button width80'/>";
       echo "<input type='button' name='jxdd' onclick=\"window.location.href='index.php'\" value='继续添加' id='goumai' class='btn-large green button width80'/>";
       
       echo "</div></div>";
       }
      else
      {
      echo "<div class='control-group tc'>";
       echo "<p class='red'></p>";
       
       echo "<input type='button' name='jxdd' onclick=\"window.location.href='index.php'\" value='去购物' id='goumai' class='btn-large green button width80'/>";
       
       echo "</div>";
      }
      if($list_id=='qxdd')
      { 
      	$order_qx=$_GET['order_qx'];
        $mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `time`='0'  WHERE  `login`.`IP` ='$mycookie_password' and `login`.`order` ='$order_qx' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
      }
      require("lsdd.php");//-----------------历史订单----------  ----
}	
//-----------------------------------------------下单填写地址后返回--------------------------------------------------------------
    
if($list_id=='return')
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
        $mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`login` SET  `name` =  '$name',`phone`='$tel',`address`='$adr',`time`='$time' WHERE  `login`.`IP` ='$mycookie_password'and `login`.`order` ='0' ORDER BY  `login`.`ID` DESC "; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();	
	   
	  require("show_list.php");
    echo "<div style='clear:both;text-align:center;font-weight:bold' > 总计:".$all_prices."元</div>";
    echo "<div style='clear:both;text-align:left'>";
    echo " 姓名: ".$data[0][name]."<br/>";
    echo " 地址: ".$data[0][address]."<br/>";
    echo " 电话:".$data[0][phone]."<br/>";
   	  echo "<a href='order.php'>修改个人信息</a></div>"; 
	   echo "<div class='control-group tc'>";
       echo "<p class='red'></p>";
       echo "<input type='button' name='tjdd' onclick=\"window.location.href='buy.php?id=1'\" value='确认提交' id='goumai' class='btn-large green button width80'/>";
       echo "<input type='button' name='jxdd' onclick=\"window.location.href='buy.php?id=2'\" value='取消订单' id='goumai' class='btn-large green button width80'/>";
       echo "</div></div>";
}

?>   
<div class='header'>
<div class="title" id="titleString"><a href="index.php">返回首页</a></div>
</div>
</body>
</html>