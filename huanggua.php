<?php
$flag_order='visit';
$list_id='黄瓜';
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
        <h3>黄瓜</h3>
        <p><img src="http://www.61856.com/images/201404/goods_img/433_G_1397607234402.jpg" ></p>
      <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：陕西</br>
		商品描述：3天以内食用口感最佳。</br>
		注意事项：黄瓜，性凉，味甘，有小毒；入肺、胃、大肠经，有清热利水，解毒消肿，生津止渴等功效。主治身热烦渴，咽喉肿痛，风热眼疾，湿热黄疸，小便不利等病症。</br>
		营养价值：不宜弃汁制馅食用。不宜多食偏食。不宜加碱或高热煮后食用。不宜和辣椒，菠菜，西红柿，同食。不宜与花菜、小白菜、柑桔同食。黄瓜不宜与花生同食。
		</li>
	</ul>  
	<p>价格：<span>￥2.00/斤</span></br>
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
