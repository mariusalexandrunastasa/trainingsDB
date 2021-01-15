<?php
try{
	$db = NEW PDO('mysql:host=localhost;dbname=trainings','root','masterrc');
}catch(PDOException $e){
	die($e->getMessage());
}
?>