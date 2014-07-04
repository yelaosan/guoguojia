<?php
$mycookie_email=$_COOKIE['email'];
preg_match_all("/\+\+\+(.*?)\+\+\+/",$mycookie_email,$cookie_email);




$mysql = new SaeMysql();
		$sql = "SELECT * FROM `visit` WHERE  1";
		$data=$mysql->getData( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
		$a=0;
		$num_visit[$a] =$Loginback[num_visit];
		$num_buy[$a] =$Loginback[num_buy];
       foreach($data as $mydata)
       {
           $num_visit[$mydata[ID]]=$mydata[num];
           $num_buy[$mydata[ID]]=$mydata[buy];
           
       }


           
?>
<!DOCTYPE html>
<html>
<head>
<title>西电果果</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<link href="styles/NewGlobal.css" rel="stylesheet" />
</head>

<body>
 <div class="header">
	 <a href="login.php?order=gwc" class="home">
	   <span class="header-icon header-icon-home"></span>
	 </a>
	 <div class="title">首页</div>
 </div>  
 <h3>水果系列</h3>
<div class="container">
<ul class="giftlist">
 <li>
	<a href="pingguo.php"><img src="http://1.testbeta.sinaapp.com/images/luochuan.jpg"> </a> 
  <div class="desc">
	洛川苹果<br/>
	<em>价格  ￥3.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[1]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[11]?>次</em>
 </div>
 </li>
  <li>
	<a href="lugan.php"><img src="http://1.testbeta.sinaapp.com/images/lugan.jpg"> </a> 
  <div class="desc">
	罗源芦柑<br/>
	<em>价格 ￥3.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[9]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[9]?>次</em>
 </div>
 </li>
 <li>
	<a href="li.php"><img src="http://1.testbeta.sinaapp.com/images/li.jpg"> </a> 
 <div class="desc">
	雪花梨<br/>
	<em>价格 ￥3.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[8]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[8]?>次</em>
 </div>
 </li>
 <li>
	<a href="caomei.php"><img src="http://1.testbeta.sinaapp.com/images/caomei.jpg"> </a> 
  <div class="desc">
	草莓<br/>
	<em>价格 ￥6.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[1]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $um_visit[1]?>次</em>
 </div>
 </li>
 <li>
	<a href="xiangjiao.php"><img src="http://1.testbeta.sinaapp.com/images/xiangjiao.jpg"> </a> 
  <div class="desc">
	香蕉<br/>
	<em>价格 ￥3.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[16]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[16]?>次</em>
 </div>
 </li>
 <li>
	<a href="mihou.php"><img src="http://1.testbeta.sinaapp.com/images/mihou.jpg"> </a> 
  <div class="desc">
	猕猴桃<br/>
	<em>价格 ￥2.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[10]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[10]?>次</em>
 </div>
 </li>
 <li>
	<a href="pingguo2.php"><img src="http://1.testbeta.sinaapp.com/images/pingguo2.jpg"> </a> 
 <div class="desc">
	富士苹果<br/>
	<em>价格 ￥4.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[12]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[12]?>次</em>
 </div>
 </li>
 <li>
	<a href="xihongshi.php"><img src="http://1.testbeta.sinaapp.com/images/xihongshi.jpg"> </a> 
 <div class="desc">
	西红柿<br/>
	<em>价格 ￥2.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[15]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[15]?>次</em>
 </div>
 </li>
 <li>
	<a href="jicheng.php"><img src="http://1.testbeta.sinaapp.com/images/jicheng.jpg"> </a> 
 <div class="desc">
	脐橙<br/>
	<em>价格 ￥3.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[6]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[6]?>次</em>
 </div>
 </li>	 
</ul>
</div> 
    <div style="clear:both"><h3>干果系列</h3></div>
<div class="container">
<ul class="giftlist">
 <li>
	<a href="guazi.php"><img src="http://1.testbeta.sinaapp.com/images/guazi.jpg"> </a> 
  <div class="desc">
	瓜子<br/>
	<em>价格  ￥7.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[2]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[2]?>次</em>
 </div>
 </li>
  <li>
	<a href="huasheng.php"><img src="http://1.testbeta.sinaapp.com/images/huasheng.jpg"> </a> 
  <div class="desc">
	原味炒花生<br/>
	<em>价格 ￥7.50/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[5]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[5]?>次</em>
 </div>
 </li>
 <li>
	<a href="kaixinguo.php"><img src="http://1.testbeta.sinaapp.com/images/kaixinguo.jpg"> </a> 
 <div class="desc">
	开心果<br/>
	<em>价格 ￥18.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[7]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[7]?>次</em>
 </div>
 </li> 
   <li>
	<a href="putaogan.php"><img src="http://1.testbeta.sinaapp.com/images/putaogan.jpg"> </a> 
  <div class="desc">
	葡萄干<br/>
	<em>价格 ￥18.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[13]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[13]?>次</em>
 </div>
 </li>
   <li>
	<a href="zao.php"><img src="http://1.testbeta.sinaapp.com/images/zao.jpg"> </a> 
  <div class="desc">
	狗头枣<br/>
	<em>价格 ￥15.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[14]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[14]?>次</em>
 </div>
 </li>
   <li>
	<a href="hetao.php"><img src="http://1.testbeta.sinaapp.com/images/hetao.jpg"> </a> 
  <div class="desc">
	新疆核桃<br/>
	<em>价格 ￥20.00/斤</em><br/>
	<em class="black">订购<?php echo $num_buy[3]?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit[3]?>次</em>
 </div>
 </li>
</ul>
</div> 
    <?php
    
             //  echo "<h5>RSS:<strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;西电果果</strong></h5>";    
    //	echo "<form name='oeder_email' method='post' action='email.php?id=order'>
      //  Email:
    //		<input type='text' name='address' placeholder='请输入您常用的邮箱地址' value=$cookie_email[1][0] >
    //		<input type='submit'  name='sent_order'  value='订阅' />
		//	</form>";
//echo"你的邮箱只用于接收优惠信息，绝无广告，你也可以随时取消订阅。还等什么？<strong>赶快订阅吧</strong>！";

    
    ?> 
<div style="clear:both;text-align:center"><em>联系电话：18610895913	送货时间：6：30pm</em><div>

</body>
</html>
