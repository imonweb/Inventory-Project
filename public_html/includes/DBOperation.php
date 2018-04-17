<?php 
/*   */
class DBOperation 
{
	private $con;

	function __construct()
	{
		include_once("../database/db.php");
		$db = new Database();
		$this->con = $db->connect();
	}

	public function addCategory($parent, $cat)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `categories`( `parent_cat`, `category_name`, `status`) VALUES (?,?,?)");
		$status = 1;
		$pre_stmt->bind_param("isi",$parent,$cat,$status);
		$result =  $pre_stmt->execute() or die($this->con->error);
		if($result){
			return "CATEGORY_ADDED";
		} else {
			return 0;
		}
	}

	public function addBrand($brand_name)
	{
		$pre_stmt = $this->con->prepare("INSERT INTO `brands`( `brand_name`, `status`) VALUES (?,?)");
		$status = 1;
		$pre_stmt->bind_param("si",$brand_name,$status);
		$result =  $pre_stmt->execute() or die($this->con->error);
		if($result){
			return "BRAND_ADDED";
		} else {
			return 0;
		}
	}


	public function getAllRecord($table)
	{
		$pre_stmt = $this->con->prepare("SELECT * FROM ".$table);
		$pre_stmt->execute() or dire($this->con->error);
		$result = $pre_stmt->get_result();
		$rows = array();
		if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$rows[] = $row;
			}
			return $rows;
		}
		return "NO_DATA";
	}


} // class DBOperation End

// $opr = new DBOperation();
// echo $opr->addCategory(0,"Tablets");
// echo "<pre>";
// print_r($opr->getAllRecord("categories"));
// echo "</pre>";

 ?>