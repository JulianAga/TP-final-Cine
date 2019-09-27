<?php 
include('header.php'); 
require_once "models/user.php";

use models\User as User;

session_start();
if(isset($_SESSION['loggedUser'])){
	$user = $_SESSION['loggedUser'];
	
?>
<div class="container mt-5">
	<h2 style="text-align: center;">Bienvenido</h2>
	<table class="table table-dark">
		<thead>
			<tr>
				<th scope="col">Usuario</th>
				<th scope="col">Contraseña</th>
				<th scope="col">Primer Nombre</th>
				<th scope="col">Apellido</th>
				<th scope="col">Mail</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th><?php echo $user->getUsername(); ?></th>
				<td><?php echo $user->getPassword(); ?></td>
				<td><?php echo $user->getFirstName(); ?></td>
				<td><?php echo $user->getLastName(); ?></td>
				<td><?php echo $user->getEmail(); ?></td>				
			</tr>
			
		</tbody>
	</table>
	<div class="container">
		<form action="posts.php" method="POST">
		<div class="row">
		<div class="col-md-10">
			<button name="do" value="continuar" class="btn btn-success">Continuar</button>
		</div>
		<div class="col-md-2">
			<button name="do" value="salir" class="btn btn-danger">Salir</button>
		</div>
		
	</div>
	</form>
	</div>
	

	
	
</div>
<?php }else{
	echo "<script> if(confirm('El usuario esta fuera de sesion, debe volver a loguearse.'));";
	echo "window.location = '../index.php';
		</script>";
}

?>

