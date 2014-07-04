<?php
$flag_order='visit';
$list_id='猕桃';
require("visit.php");
           
           
?>
<!DOCTYPE html>
<html>
<head>
<title>叶记</title>
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
        <h3>猕猴桃</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/mihou.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：陕西户县</br>
		商品描述：72小时内食用口感最佳。</br>
		注意事项：未成熟的猕猴桃含有破坏蛋白质的分解酶，会对皮肤产生破坏作用，要注意多放两天吃。脾虚便溏者、风寒感冒、疟疾、寒湿痢、慢性胃炎、痛经、闭经、小儿腹泻者不宜食用。猕猴桃不能空腹吃。</br>
		营养价值：猕猴桃味甘酸、性寒，有调中理气，生津润燥，解热除烦的功效，主治消化不良，食欲不振，呕吐，烧烫伤等症。
		</li>
	</ul>  
	<p>价格：<span>￥2.50/斤</span></br>
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
