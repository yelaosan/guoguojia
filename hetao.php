<?php
$flag_order='visit';
$list_id='核桃';
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
        <h3>新疆核桃</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/hetao.jpg" ></p>
         <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：新疆</br>
		商品描述：新疆薄皮，直径约10cm,一斤约40个，大个头。</br>
		注意事项：核桃技对多种肿瘤，如食道癌、胃癌、鼻咽癌、肺癌、甲状腺癌、淋巴肉瘤等都有一定的抑制作用。此外，核桃对癌症患者还有镇痛，提升白细胞及保护肝脏等作用。</br>
		营养价值：核桃可以减少肠道对胆固醇的吸收，对动脉硬化、高血压和冠心病人有益，核桃有温肺定喘和防止细胞老化的功效，还能有效地改善记忆力、延缓衰老并润泽肌肤。核桃树叶中含有抗生物质，因此也有杀菌作用。
		</li>
	</ul>  
	<p>价格：<span>￥20.00/斤</span></br>
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
