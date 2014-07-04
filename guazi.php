<?php
$flag_order='visit';
$list_id='瓜子';
require("visit.php");
           
           
?>
<!DOCTYPE html>
<html>
<head>
<title>西电果果</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" /><meta content="yes" name="apple-mobile-web-app-capable" />
<link href="styles/NewGlobal.css" rel="stylesheet" />
</head>

<body>
 <div class="header">
	<a href="login.php?order=gwc" class="home">
	   <span class="header-icon header-icon-home"></span>
	</a>
	<div class="title">商品详情</div>
	<a href="javascript:history.go(-1);" class="back">
		<span class="header-icon header-icon-return"></span>
	</a>
 </div>  
<form name="aspnetForm" method="post" action="login.php?id=<?php echo $list_id?>" id="aspnetForm">
  <div class="container">
        <h3>瓜子</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/guazi.jpg"></p>
       <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：宁夏</br>
		商品描述：精选原味炒制，颗粒饱满，来自宁夏。</br>
		注意事项：磷脂对大鼠有预高血脂症和高胆固醇血症的作用。本品的脂肪油，特别是亚油酸部分，能抑制血栓形成。</br>
		营养价值：性能：味甘，性平。现代用以降低血脂，又能驱虫。
		</li>
	</ul>  
	<p>价格：<span>￥7.00/斤</span></br>
			口味:
		   <select  name="class" style="width:100px">
               <option value="原味">原味</option>
				<option value="奶油">奶油</option>
				<option value="干炒">干炒</option>
				<option value="五香">五香</option>
				<option value="草莓">草莓</option>
			</select>
		   数量：
			<select  name="number" style="width:100px">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
	</p>	
	</div>
   <div class="control-group tc">
	<input type="submit" name="order" value="加入购物车" id="gouwuche" class="btn-large green button width80"/>
	<input type="submit" name="order"  value="立即购买" id="goumai" class="btn-large green button width80"/>
	</div>
  </div>
</form> 
</body>
</html>
