<?php
$flag_order='visit';
$list_id='葡萄干';
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
        <h3>葡萄干</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/putaogan.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：新疆吐鲁番</br>
		商品描述：保质期12个月。</br>
		注意事项：无。</br>
		营养价值：葡萄干中含有一种称为白藜芦醇的成分，它能有效地防止细胞恶变或抑制恶性肿瘤的增长，而且能阻止白血病细胞的分裂。葡萄干中的纤维能防止果糖在血液中转化成三酸甘油酯———一种血液脂肪，从而降低罹患心脏病。
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
