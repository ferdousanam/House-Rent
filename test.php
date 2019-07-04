<?php 

// $db = new PDO("mysql:host=localhost;dbname=hf", "root", "");
include 'lib/Database.php';

// $result = $result->fetch();
// while ($result = $result->fetch_assoc()) {
// 	print_r($result);
// }


/**
 * Ferdous Anam
 */
class City
{
	public $db;
	
	function __construct()
	{
		$this->db = new Database();
	}

	public function get()
	{
		$query = "SELECT * FROM city";
		$result = $this->db->select($query);
		return $result;
	}
}

$city = new City();

$result = $city->get();
echo "<pre>";
print_r($result);

while ($res = $result->fetch(PDO::FETCH_ASSOC)) {
	print_r($res);
}



?>