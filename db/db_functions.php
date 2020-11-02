<?php


function get_all_data_from_table($table){
		
	$data = array();
	$host = "localhost";
		$user = "root";
		$password  ="";
		$database= "mpis";

		$conn = mysqli_connect($host, $user, $password);
		mysqli_select_db($conn, $database);
		
	$query = "SELECT * FROM `".$table."` order by id desc";
	if ($result = mysqli_query($conn,$query)) {
	//echo "successfully fetch data from Database";
	while ($row = mysqli_fetch_assoc($result)) {
		$data[] = $row;
	}
}
else{
	echo "Unable to fetch data from Database";
}

return $data;
}

function get_all_data_from_table1($table){
		
		$data = array();
		$host = "localhost";
			$user = "root";
			$password  ="";
			$database= "mpis";

			$conn = mysqli_connect($host, $user, $password);
			mysqli_select_db($conn, $database);
			
		$query = "SELECT * FROM `".$table."` where not uuid='superadmin' order by id desc";
		if ($result = mysqli_query($conn,$query)) {
		//echo "successfully fetch data from Database";
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
	}
	else{
		echo "Unable to fetch data from Database";
	}

	return $data;
}
function get_data_by_id($table,$id){
		
		$data = array();
		$host = "localhost";
			$user = "root";
			$password  ="";
			$database= "mpis";

			$conn = mysqli_connect($host, $user, $password);
			mysqli_select_db($conn, $database);
			
		$query = "SELECT * FROM `".$table."` WHERE id ='".$id."' order by id desc limit 1";
		if ($result = mysqli_query($conn,$query)) {
		//echo "successfully fetch data from Database";
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
	}
	else{
		echo "Unable to fetch data from Database";
	}

	return $data;
}
function get_data_from_key($val,$table){
		$data = array();
		$host = "localhost";
			$user = "root";
			$password  ="";
			$database= "mpis";

			$conn = mysqli_connect($host, $user, $password);
			mysqli_select_db($conn, $database);
			  
		$query = "SELECT * FROM `".$table."` WHERE id ='".$val."'";
		if ($result = mysqli_query($conn	,$query)) {
		//echo "successfully fetch data from Database";
		while ($row = mysqli_fetch_assoc($result)) {
			$data[] = $row;
		}
	}
	else{
		echo "Unable to fetch data from Database";
	}
	

	return $data;
}
function check_validation($str){

	if(preg_match_all('#[^A-Za-z0-9-,\s]#is', $str, $match)){
		return '0';
	}
	else{
		return '1';
	}

}


?>