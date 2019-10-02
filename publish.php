<?php
require_once("Config\autoload.php");

use Config\Autoload as Autoload;

Autoload::Start();


use models\Cine as Cine;
use repositories\PostsRepository as PostsRepository;


if($_POST){
    $newProd = new Cine();
    $newProd->setDireccion($_POST['direccion']);
    $newProd->setNombre($_POST['cine']);
    $newProd->setID($_POST['ID']);
   $newProd->setValor_entrada($_POST['valor']);
    //$newProd->setDate($_POST['date']);
    $newProd->setCapacidad($_POST['capacidad']);

   
    $repository = new PostsRepository();
  //  foreach($repository as $key => $value)
 // if($repository->getByID($newProd->getID())== false)
   // {
	$repository->add($newProd);
    echo "<script> alert('Cine agregado satisfactoriamente!');";
    echo "window.location = 'posts.php'; </script>";
    $successMje =  "Cine agregado satisfactoriamente!";
   // }
  //else
   //{
     //  $errorMsj="Verifique que el producto no exista!";
   //     echo "<script> alert('Verifique que el producto no exista!');";
//}
//	echo "window.location = '../list.php'; </script>";
}

 ?>