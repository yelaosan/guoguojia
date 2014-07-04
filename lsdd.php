<?php

//-----------------历史订单----------  ------------------------------------------------------    
       $mysql = new SaeMysql();
		$sql = "SELECT * FROM `login` WHERE `login`.`ip`='$mycookie_password' ORDER BY  `login`.`ID` DESC ";
		$data=$mysql->getData( $sql );
		if( $mysql->errno() != 0 )
		{
  	 		 die( "Error:" . $mysql->errmsg() );
		}
		$mysql->closeDb();
    
        $show_prices[$i] =$Loginback[show_prices];
    	$show_order[$i] =$Loginback[show_order];
    	$show_order_time[$i] =$Loginback[show_order_time];
    	$min=time();
    	echo "<h2><center>".$cookie_name."的历史订单</center></h2>";
   		if(!empty($data))
         {
            echo "<p align='right'><a href='login.php?order=gwc&clear=1'>清空记录</a></p>";
		foreach($data as $mydata)
        {
            if($mydata[order]>=100)
            {  
               $show_order[$mydata[order]]=$mydata[order];
			   $show_prices[$mydata[order]]+=$mydata[list_prices];
               $show_order_time[$mydata[order]]=$mydata[time];
               $max=max($max,$mydata[order]);
               $min=min($min,$mydata[order]);
            }
            
            if($mydata[order]=='0')
            {
                $temp=1;
                $temp_time=$mydata[time];
                $temp_prices+=$mydata[list_prices];
            }	
            
        }
    
       
       echo "<div class='container'>
    			<ul class='giftlist unstyled'>";
    
       if($temp==1)
       {
       		echo "<li>";
	        echo "<div class='imgbox'>";
       		echo '添加时间:'.$temp_time.'<br/>';
            echo "订单状态:<strong>尚未提交</strong><br/>";
            echo '订单总计:'.$temp_prices.'元<br/>';
            echo "订单详情:<a href='login.php'>点击查看</a><br/>";
           	//echo "&nbsp;";
            echo "</div>";
            echo "</li>";
       		
       }
       for($i=$min;$i<=$max;$i++)
       {
           	
           
           
        	if(!empty($show_order[$i]))
            {
                echo "<li>";
	            echo "<div class='imgbox'>";
                
                echo "订单编号:<a href='buy.php?id=so&order=$i'>$i</a><br/>";
                echo '下单时间:'.date("Y-m-d H:i",$i).'<br/>';
                if($show_order_time[$i]>date("Y-m-d H:i",$i)&&$i!=100)
                {
                	echo '支付时间:'.$show_order_time[$i].'<br/>';
               	    echo "订单状态:<strong>交易完成</strong><br/>";
                }
                else
                {
                    if($show_order_time[$i]==0)
                    echo "订单状态:<strong>已取消</strong><br/>";
                    else
                    {
                	echo "订单状态:<strong>未付款</strong>"; 
                        echo "<a href='login.php?id=qxdd&order=gwc&order_qx=$i'>&nbsp;取消订单</a><br/>";
                    
                    }
                }
                echo '订单总计:'.$show_prices[$i].'元<br/>';
                echo "</div>";
                echo "</li>";
            }

           
           
       }
       echo"</ul></div> ";
        }
    else echo"<center>您没有历史订单</center>";
?>