<?php
$flag_order='visit';
$list_id='梨';
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
        <h3>雪花梨</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/li.jpg" ></p>
       <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：河北赵县</br>
		商品描述：常温保存，3天内食用口感最佳。</br>
		注意事项：脾胃虚寒、畏冷食者应少吃。梨含果酸较多，胃酸多者，不可多食。梨有利尿作用，夜尿频者，睡前少吃梨。梨含有糖量高，糖尿病者当慎。慢性肠炎、胃寒病患者忌食生梨。梨与螃蟹同吃，容易引起腹泻。吃梨时喝热水、食油腻食品会导致腹泻。</br>
		营养价值：梨含有大量蛋白质、脂肪、钙、磷、铁和葡萄糖、果糖、苹果酸、胡萝卜素及多种维生素。梨还是治疗疾病的良药，民间常用冰糖蒸梨治疗喘咳，“梨膏糖”更是闻名中外。
		</li>
	</ul>  
	<p>价格：<span>￥3.00/斤</span></br>
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
	<input type="submit" name="order" value="加入购物车" id="gouwuche" class="btn-large green button width80"/>
	<input type="submit" name="order"  value="立即购买" id="goumai" class="btn-large green button width80"/>
	</div>
  </div>
</form> 
</body>
</html>
