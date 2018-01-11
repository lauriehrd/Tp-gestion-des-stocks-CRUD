<?php



ini_set('display_startup_errors', 1);
ini_set('display_errors',1);
error_reporting(-1);

include "utility.php";

$db = connectDB("localhost", "gestion-des-stocks-CRUD", "root", "laurie");
$users = getUsers();
debug($db);


function getProduct($id){
	
	global $db;
	$sql ="SELECT * FROM product WHERE id= :id";
	$statement = $db->prepare($sql);
	$statement-> bindParam(":id", $id, PDO:: PARAM_INT);
	$check = $statement->execute();
	return $statement->fetch(PDO::FETCH_OBJ);

}

function getProduct(){

	global $db;
	$sql ="SELECT * FROM product";
	$exec = $db->query($sql);
	return $exec->fetchAll(PDO:: FETCH_OBJ);

}

if(isset($_GET["get_product"])){
}

if(isset($_GET["id"])){
	$user = getUser($_GET["id"]);
}

if(isset($_POST["create_product"])){
	createUser();
}

if(isset($_POST["update_product"])){
	updateUser();
}


if(isset($_POST["delete_product"])){	

debug($_POST);

		foreach ($_POST["delete_product_id"] as $key => $id) {
			debug($key);
			debug($id);

			$sql="DELETE FROM users WHERE id = :id";
			$statement= $db->prepare($sql);
			$statement->bindParam(":id", $id, PDO :: PARAM_INT);
			$res=$statement->execute();
		}

		header('location:http://localhost/exo-coorection/tp-gestion-des-stocks-CRUD/index.php');

}

function createUser(){
	global $db;

		$sql ="INSERT INTO users (name, prix, description)
			   VALUES(:name, :prix, :description)";

	$statement = $db->prepare($sql);
	$statement->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
	$statement->bindParam(":prix",$_POST["prix"], PDO::PARAM_INT);
	$statement->bindParam(":description", $_POST["description"], PDO::PARAM_STR);
	$res=$statement->execute();
	$msg_crud=($res===true)? "insertion ok" : "soucis à l'insertion";
	header("Location:index.php");
}

?>