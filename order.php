<?php 
	$mycookie=$_COOKIE['user'];
	preg_match_all("/\!(.*?)\!/",$mycookie,$cookie_name);
	preg_match_all("/\`(.*?)\`/",$mycookie,$cookie_phone);
	preg_match_all("/\^(.*?)\^/",$mycookie,$cookie_adr);
	if(empty($_COOKIE['mycookie_password']))
    {
	setcookie('mycookie_password',rand(100,time()),time()+(60*60*24*300));
    }
$cookie_name=$cookie_name[1][0];
$cookie_phone=$cookie_phone[1][0];
$cookie_adr=$cookie_adr[1][0];
?>
<!DOCTYPE html>
<html>
<head>
<title>叶记</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
<meta content="yes" name="apple-mobile-web-app-capable" />
<link href="styles/bootstrap.min.css" rel="stylesheet" />
<link href="styles/NewGlobal.css" rel="stylesheet" />
</head>
<body>
 <div class="header">
     <a href='login.php?order=gwc' class='home'>
   <span class='header-icon header-icon-home'></span>
</a>
<div class="title" id="titleString">确认信息</div>

</div>  
   
    <div class="container width80 pt20">
 <form name="aspnetForm" method="post" action="login.php?id=return" id="aspnetForm" class="form-horizontal">
<div>
<input type="hidden" name="__EVENTTARGET" id="__EVENTTARGET" value="" />
<input type="hidden" name="__EVENTARGUMENT" id="__EVENTARGUMENT" value="" />
<input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKLTE4MTUwOTMzMA9kFgJmD2QWAgIBD2QWAgIBD2QWAgILDxYCHgRocmVmBSwvUmVnLmFzcHg/UmV0dXJuVXJsPSUyZk1lbWJlciUyZkRlZmF1bHQuYXNweGQYAQUeX19Db250cm9sc1JlcXVpcmVQb3N0QmFja0tleV9fFgEFJmN0bDAwJENvbnRlbnRQbGFjZUhvbGRlcjEkY2JTYXZlQ29va2ll5P758eqt18XT06y04yVxkKJyzYw=" />
</div>
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>
<div>

	<input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION" value="/wEWBQLZmqilDgLJ4fq4BwL90KKTCAKqkJ77CQKI+JrmBdPJophKZ3je4aKMtEkXL+P8oASc" />
</div>
     <?php 
echo "
<table>
   <tr><th align=right>姓    名:</th><td><input name='name' type='text' id='name' class='input' value=$cookie_name ></td></tr>
   <tr><th>联系方式:</th><td><input name='tel' type='text' id='tel' class='input' value=$cookie_phone ></td></tr>
   <tr><th>收货地址:</th>
	<td>
	<select  name='adr' value=$cookie_adr style='width:100px'>
		<option value='丁香'>丁香</option>
		<option value='海棠'>海棠</option>
		<option value='竹园'>竹园</option>
		<option value='家属区'>家属区</option>
		<option value=其他'>其他</option>
	</select>
	</td>
	</tr>
  </table>";

/*
	echo "
    
   <div class='control-group'>
    <input name='name' type='text' id='name' class='input width100 ' placeholder='请输入您的姓名' value=$cookie_name >
  </div>
  <div class='control-group'>
      <input name='tel' type='text'  id='tel' class='input width100 ' placeholder='请输入您的电话号码' value=$cookie_phone >
  </div>
  <div class='control-group'>
      <input name='adr' type='text'  id='adr' class='width100 input' placeholder='请输入您的收获地址(线下交易免输)' value=$cookie_adr >
  </div>
     <div class='control-group'>
       <span class='red'></span>
   </div> "*/ 
     ?>
  <div class="control-group">
         <button onClick="__doPostBack('ctl00$ContentPlaceHolder1$btnOK','')" id="ctl00_ContentPlaceHolder1_btnOK" class="btn-large green button width100">
         <?php
            if(empty($mycookie))echo"确认提交"; 
        	else echo"保存"; 
             
         ?>
      </button>
  </div>
</form>
  </div>
</body>
</html>
