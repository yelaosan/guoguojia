<?php
$flag_order='visit';
$list_id="草莓";
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
        <h3>草莓</h3>
        <p><img src="http://1.testbeta.sinaapp.com/images/caomei.jpg" ></p>
        <em><center>订购<?php echo $num_buy?>件&nbsp;&nbsp;&nbsp;浏览<?php echo $num_visit?>次</center></em>
	<p>商品描述：</p>
	<ul>
		<li>
		原产地：陕西长安</br>
		商品描述：24小时以内食用口感最佳。</br>
		注意事项：草莓性凉、味酸甘，入肺、脾经，有清暑解热、生津止渴、利尿止泻、利咽止咳的功效，主治风热咳嗽、口舌糜烂、咽喉肿毒、便秘、高血压等症。</br>
		营养价值：癌症，特别是鼻咽癌、肺癌、扁桃体癌、喉癌患者尤其适宜食用。痰湿内盛、肠滑便泻者、尿路结石病人不宜多食。
		</li>
	</ul>  
	<p>价格：<span>￥6.00/斤</span></br>
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
