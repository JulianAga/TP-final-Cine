<?php 
namespace process;
require_once "../models/user.php";
use models\User as User;

$users = array();

$user1 = new User('Flor', 'asd123', 'Florencia', 'Excoffon', 'florencia@utn.com');
$users[] = $user1;
$user2 = new User('Juli', 'asd123', 'Julián', 'Aga', 'julian@utn.com');
$users[] = $user2;
$user3 = new User('Quimey', 'asd123', 'Quimey', 'Varela', 'quimey@utn.com');
$users[] = $user3;

$loggedUser = NULL;
if($_POST){
	foreach ($users as $key => $value) {
		if($_POST['username'] == $value->getUsername()){
			if($_POST['password'] == $value->getPassword()){
				$loggedUser = $value;
			}
		}
	}
}
if($loggedUser != NULL){
	session_start();
	$_SESSION['loggedUser'] = $loggedUser;
	header("location:../welcome.php");
	
}else{
	echo "<script> if(confirm('Verifique que los datos ingresados sean correctos'));";
	echo "window.location = '../index.php';
		</script>";
}
 ?>