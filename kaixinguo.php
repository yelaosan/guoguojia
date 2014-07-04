<?php
$flag_order='visit';
$list_id='开心果';
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
        <h3>开心果</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/kaixinguo.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：美国加州</br>
		商品描述：原味无漂白，自然开口，绿头。</br>
		注意事项：开心果中含有丰富的油脂，有润肠通便的作用，助于机体排毒。开心果 又是滋补食药，它味甘无毒，温肾暖脾，补益虚损，调中顺气，能治疗神经衰弱、浮肿、贫血、营养不良、慢性泻痢等症。</br>
		营养价值：高血脂、肥胖者不宜多食。性温，味辛，涩，无毒。主治诸痢，去冷,治腰冷，阴肾虚弱，房中术多用之。
		</li>
	</ul>  
	<p>价格：<span>￥18.00/斤</span></br>
		   数量：
			<select name="number"  style="width:100px">
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
