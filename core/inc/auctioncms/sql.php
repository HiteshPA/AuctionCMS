<?php

// Initializing optional params, if they don't exist yet due to older install
	!empty($auctioncms["config"]["db"]["host"]) || $auctioncms["config"]["db"]["host"] = null;
	!empty($auctioncms["config"]["db"]["port"]) || $auctioncms["config"]["db"]["port"] = 3306;
	!empty($auctioncms["config"]["db"]["socket"]) || $auctioncms["config"]["db"]["socket"] = null;

	if (isset($auctioncms["config"]["sql_interface"]) && $auctioncms["config"]["sql_interface"] == "mysqli") {

		function auction_setup_connection() {
			global $auctioncms;

			
				$connection = new mysqli(
					$auctioncms["config"]["db"]["host"],
					$auctioncms["config"]["db"]["user"],
					$auctioncms["config"]["db"]["password"],
					$auctioncms["config"]["db"]["name"],
					$auctioncms["config"]["db"]["port"],
					$auctioncms["config"]["db"]["socket"]
				);
				//$connection->query("SET NAMES 'utf8'");
				//connection->query("SET SESSION sql_mode = ''");
				// Remove BigTree connection parameters once it is setup.
				

				unset($auctioncms["config"]["db"]["user"]);
				unset($auctioncms["config"]["db"]["password"]);
				
				echo "CON SET";
				return $connection;
		}
		
	}


	function resultToArray($result) {
	    $rows = array();
	    while($row = mysqli_fetch_assoc($result)) {
		array_push($rows,$row);
	    }
	    return $rows;
	}


	function get_rows($conn,$table,$params,$order){

		$query = "SELECT ".implode(",",$params)." from ".$table." order by ".$order;
		$result = mysqli_query($conn,$query);
		$rows = resultToArray($result);

		mysqli_free_result($result);
		return($rows);
	}


	function get($conn,$table,$params){

		$query = "SELECT ".implode(",",$params)." from ".$table;
		$result = mysqli_query($conn,$query);

		$rows = "";
		if(mysqli_num_rows($result) > 0)
			$rows = resultToArray($result);
		else
			echo "ERROR: Could not able to execute $query " . mysqli_error($conn);

		mysqli_free_result($result);
		return($rows);
	}



	function get_rows_where($conn,$table,$params,$where){

		$query = "SELECT ".implode(",",$params)." from ".$table." where ".$where;
		$result = mysqli_query($conn,$query);
    		$rows = "";
	    	if(mysqli_num_rows($result) > 0)
	      		$rows = resultToArray($result);
		else
	      		echo "ERROR: Could not able to execute $query " . mysqli_error($conn);

	    

			mysqli_free_result($result);

			return($rows);
		}


	function add($conn,$table,$cols,$values){
		/*foreach($values as $value)
			$value = str_pad($value,strlen($value)+2,STR_PAD_BOTH);
		*/
		//$query = "INSERT INTO ".$table."(".implode(",",$cols).") VALUES(".implode(",",array_fill(0,$count($cols)-1,'?')).")";
		$query = "INSERT INTO ".$table."(".implode(",",$cols).") VALUES(".implode(",",$values).")";

		$result = mysqli_query($conn,$query);
//		echo "$query";
		if(mysqli_num_rows($result)>0){
			echo "Records added successfully.";

		} else{
			echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);

		}

	}
?>
