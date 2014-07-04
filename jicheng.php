<?php
$list_id='金橙';
$flag_order='visit';
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
        <h3>脐橙</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/jicheng.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：福建罗源</br>
		商品描述：4天以内食用口感最佳。</br>
		注意事项：胸膈满闷、恶心欲吐者，饮酒过多、宿醉未醒者尤宜食用。糖尿病患者忌食。喝牛奶前后1小时不宜食用脐橙，以防止橙子中酸性物质与牛奶中蛋白质发生反应，造成消化困难和营养成分浪费。</br>
		营养价值：脐橙，性微凉，味甘、酸，具有生津止渴、开胃下气的功效，主治食欲不振、胸腹胀满作痛、腹中雷鸣及便溏或腹泻。
		</li>
	</ul>  
	<p>价格：<span>￥3.50/斤</span></br>
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
