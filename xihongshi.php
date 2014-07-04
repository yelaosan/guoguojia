<?php
$flag_order='visit';
$list_id="西红柿";
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
        <h3>西红柿</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/xihongshi.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：陕西</br>
		商品描述：4天内食用口感最佳。</br>
		注意事项：不宜生吃。尤其是脾胃虚寒及月经期间的妇女。番茄可能引起胃肠胀满、疼痛等不适症状。不宜长时高温加热。烹调时应避免长时间高温加热。不宜空腹吃。不宜吃未成熟的青色番茄。</br>
		营养价值：番茄，味酸、甘，性微寒，有生津止渴、健胃消食的功效。适宜于热性病发热、口渴、食欲不振、习惯性牙龈出血、贫血、头晕、心悸、高血压、急慢性肝炎、急慢性肾炎、夜盲症和近视眼者食用。
		</li>
	</ul>  
	<p>价格：<span>￥2.50/斤</span></br>
		   数量：
			<select name="number" style="width:100px">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select>
	</p>	
	</div>
   <div class="control-group tc">
	<input type="submit" name="order"  value="加入购物车" id="gouwuche" class="btn-large green button width80"/>
	<input type="submit" name="order"   value="立即购买" id="goumai" class="btn-large green button width80"/>
	</div>
  </div>
</form> 
</body>
</html>
