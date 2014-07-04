<?php
include('base.php');
$mysql = new SaeMysql();
		$sql = "SELECT * FROM `login` WHERE `login`.`ip`='$mycookie_password'and `login`.`order`='0' ORDER BY  `login`.`ID` DESC ";
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
        {
            
		foreach($data as $mydata)
				{
            	
				$all_prices+=$mydata[list_prices];
				show($mydata[list_id],$mydata[list_id],$mydata[list_num],$mydata[list_prices]);
				$i=$i+1;
				}
            
        }
		else echo"<center><h3>没用任何东西</h3></center>";
		
       echo"</ul> ";
?>