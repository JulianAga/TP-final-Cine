<?php
require_once("Config\autoload.php");

use Config\Autoload as Autoload;

Autoload::Start();


use model\Post as Post;
use repository\PostsRepository as PostsRepository;


if($_POST){
    $newProd = new Post();
    $newProd->setAuthor($_POST['author']);
    $newProd->setTitle($_POST['title']);
   // $newProd->setID($_POST['id']);
   $newProd->setCategory($_POST['category']);
    $newProd->setDate($_POST['date']);
    $newProd->setDescription($_POST['description']);

   
    $repository = new PostsRepository();
  //  foreach($repository as $key => $value)
  if($repository->getByID($newProd->getID())== false)
    {
	$repository->add($newProd);
    echo "<script> alert('Producto agregado satisfactoriamente!');";
    echo "window.location = 'posts.php'; </script>";
    $successMje =  "Producto agregado satisfactoriamente!";
    }
  else
   {
       $errorMsj="Verifique que el producto no exista!";
        echo "<script> alert('Verifique que el producto no exista!');";
}
//	echo "window.location = '../list.php'; </script>";
}

 ?>