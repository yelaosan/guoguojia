<?php	
		if($flag_order=='visit')
        {
		$mysql = new SaeMysql();
		$sql = "SELECT * FROM `visit` WHERE `visit`.`list_id`='$list_id' ORDER BY  `visit`.`ID` DESC ";
		$data=$mysql->getData( $sql );
		if( $mysql->errno() != 0 )
		{
  	 		 die( "Error:" . $mysql->errmsg() );
		}
		$mysql->closeDb();

		$num_visit=$data[0][num]+1;
		$num_buy=$data[0][buy];
		$mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`visit` SET  `num`='$num_visit' WHERE  `visit`.`list_id`='$list_id'"; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();	
        }



		if($flag_order=='buy')
        {
        
        $mysql = new SaeMysql();
		$sql = "SELECT * FROM `visit` WHERE `visit`.`list_id`='$list_id' ORDER BY  `visit`.`ID` DESC ";
		$data=$mysql->getData( $sql );
		if( $mysql->errno() != 0 )
		{
  	 		 die( "Error:" . $mysql->errmsg() );
		}
		$mysql->closeDb();

		$num_buy=$data[0][buy]+1;

		$mysql = new SaeMysql();
		$sql = "UPDATE  `app_testbeta`.`visit` SET  `buy`='$num_buy' WHERE  `visit`.`list_id`='$list_id'"; 
		$mysql->runSql( $sql );
		if( $mysql->errno() != 0 )
			{
  	 		 die( "Error:" . $mysql->errmsg() );
			}
		$mysql->closeDb();	

        }


?>