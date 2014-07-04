<?php
$flag_order='visit';
$list_id='洛川苹果';
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
        <h3>洛川苹果</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/luochuan.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：陕西洛川</br>
		商品描述：常温，5天以内食用口感最佳。</br>
		注意事项：溃疡性结肠炎的、白细胞减少症的病人、前列腺肥大的病人、 冠心病、心肌梗塞、肾病、糖尿病患者慎吃。平时有胃寒症状者忌生食苹果。苹果不可与胡萝卜同食，易产生诱发甲状腺肿的物质。</br>
		营养价值：苹果，性平、味甘酸而微咸，无毒，具有生津止渴、益脾止泻、和胃降逆、润肺除烦、养心益气、润肠、止泻、解暑、醒酒等功效。
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
