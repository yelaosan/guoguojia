<?php
include('base.php');
$mysql = new SaeMysql();
		$sql = "SELECT * FROM `login` WHERE `order` LIKE '$order'"; 
		$data=$mysql->getData( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();
		echo "<div class='container'>
    			<ul class='giftlist unstyled'>";
		$i=0;
		$all_prices=0;
		if(!empty($data))
		foreach($data as $mydata)
				{
            	if($data[0][time]==0)$data[0][time]=date("Y-m-d H:i",$data[0][order]);
				$all_prices+=$mydata[list_prices];
				show($mydata[list_id],$mydata[list_id],$mydata[list_num],$mydata[list_prices]);
				$i=$i+1;
				}
		else echo"noting!";
        echo"</ul></div> ";
		echo "<p> 总计:".$all_prices."</p>";
		echo "<p> 订单编号:".$data[0][order]."</p>";
		echo "<p> 下单时间: ".$data[0][time]."</p>";
	    echo "<p> 姓名: ".$data[0][name]."</p>";
	    echo "<p> 地址: ".$data[0][address]."</p>";
  	    echo "<p> 电话:".$data[0][phone]."</p>"; 
		
?>