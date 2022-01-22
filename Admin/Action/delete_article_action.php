<?php
	require_once("../config.php");
?>
<?php 

$id = $_GET['id'];
if($id == TRUE){
	$sql = "DELETE FROM articles WHERE id = $id";
	if($conn->query($sql) === TRUE){
		echo "Delete successfully";

	} else{
		echo "Error: ".$sql. "<br>" .$conn->error;
	}
}
header("refresh:0; url=../article.php");


 ?>