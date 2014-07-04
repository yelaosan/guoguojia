<?php
$flag_order='visit';
$list_id='芦柑';
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
        <h3>罗源芦柑</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/lugan.jpg"></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：福建罗源</br>
		商品描述：10-15度，48小时内食用口感最佳。</br>
		注意事项：风寒咳嗽、痰饮咳嗽者不宜食用。桔子含有丰富的果酸和维生素C，服用维生素K、磺胺类药物、安体舒通、氨苯喋啶和补钾药物时，均应忌食桔子。桔子含热量较多，如果一次食用过多，就会“上火”，促发口腔炎、牙周炎等症状。儿童尤其不宜多吃桔子。</br>
		营养价值：桔子性平，味甘酸，有生津止咳、和胃利尿、润肺化痰的功效，主治胃肠燥热、腹部不适、小便不利、肺热咳嗽等症。
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
