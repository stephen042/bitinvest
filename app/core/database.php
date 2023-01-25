<?php

/**
 * data base handler C
 */
/**
 * 
 */

class Database 
{
	private function connect()
	{
		$str = DBDRIVER.":hostname=".DBHOST.";dbname=".DBNAME;
		$con = new PDO($str, DBUSER, DBPASS);
		return $con;
	}

	public function query($query, $data = [],$datatype = 'object')
	{
		$con = $this->connect();
		$stm = $con->prepare($query);
		if ($stm) 
		{
			$check = $stm->execute($data);
			if ($check) 
			{
				if ($datatype != 'object') {
					
					$type = PDO::FETCH_ASSOC;
				}else{
					$type = PDO::FETCH_OBJ;					
				}

				$result = $stm->fetchAll($type);

				if (is_array($result) && count($result) > 0) {
					
					return $result;
				}
			}
		}

		return false;
	}
}