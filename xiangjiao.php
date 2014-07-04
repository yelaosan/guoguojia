<?php
$flag_order='visit';
$list_id='香蕉';
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
        <h3>香蕉</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/xiangjiao.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：陕西</br>
		商品描述：10-15度，48小时内食用口感最佳。
		注意事项：过量吃香蕉引起胃肠功能紊乱和情绪波动过大。未熟透的香蕉易致便秘。不宜空腹吃。香蕉中有较多的镁元素，对心血管产生抑制作用。畏寒体弱和胃虚的人不宜多吃。香蕉不宜芋头同食。</br>
		营养价值：香蕉味甘性寒，具有较高的药用价值。主要功用是清肠胃，治便秘，并有清热润肺、止烦渴、填精髓、解酒毒等功效。由于香蕉性寒，故脾胃虚寒、胃痛、腹泻者应少食，胃酸过多者最好不吃。
		</li>
	</ul>  
	<p>价格：<span>￥3.50/斤</span></br>
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
	<input type="submit" name="order"  value="加入购物车" id="gouwuche" class="btn-large green button width80"/>
	<input type="submit" name="order"   value="立即购买" id="goumai" class="btn-large green button width80"/>
	</div>
  </div>
</form> 
</body>
</html>
