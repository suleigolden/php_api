<?php 
//Set the file to return Json Object By setting the hearder to Json
header("Content-Type: application/json");
//Connect to db
$connecdata = mysqli_connect('localhost','root','');
$mydatabase = mysqli_select_db($connecdata,'api'); 
//Check User Request
if(isset($_GET['ClientRequest'])){
	getAllUsers($connecdata);
	
}
//Get all Users Method
function getAllUsers($connecdata){
$sqlQuery = mysqli_query($connecdata,"SELECT * FROM users");
	$userData = array();
	while($row = mysqli_fetch_array($sqlQuery)){
			$userData[] = $row;
}
$user_Data = json_encode($userData);
echo $user_Data;
}

?>

































<?php 
/*
header("Content-Type: application/json");
//Connect to db
$connecdata = mysqli_connect('localhost','root','');
$mydatabase = mysqli_select_db($connecdata,'api'); 

//call the passed in method

//call the passed in method
if(isset($_GET['method'])){
	$ClientRequest = $_GET['method'];
	if($ClientRequest=="getAllUsers"){
		getAllUsers($connecdata);
	}else{
		$errorFeddback = $_GET['method'];
	$error_feedback = '{
 "message":{"feedback":"'.$errorFeddback.'", "code":404, "message":"An access token is reqired for this resource"}
}';
echo $error_feedback;
	}
	
}else{
	$errorFeddback = $_GET['method'];
	$error_feedback = '{
 "message":{"feedback":"'.$errorFeddback.'", "code":404, "message":"An access token is reqired for this resource"}
}';
echo $error_feedback;
}
//passed in method
function getAllUsers($connecdata){

$sqlQuery = mysqli_query($connecdata,"SELECT * FROM users");
	$userData = array();
	while($row = mysqli_fetch_array($sqlQuery)){
			$userData[] = $row;
}
$user_Data = json_encode($userData);
echo $user_Data;
}

*/
?>
