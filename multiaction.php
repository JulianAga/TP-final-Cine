<?php

require_once("Config\autoload.php");

use Config\Autoload as Autoload;

Autoload::Start();


use models\Post as Post;
use repositories\PostsRepository as PostsRepository;

$lista = new PostsRepository();

function trash($params = false) {
    if($params) {
        $mje = "success";
        return 'Articulos eliminados';        
    } else {
        return 'Olvidaste seleccionar articulos a eliminar';
    }
}

function enable($params = false) {
    if($params) {
        return 'Articulos habilitados';
    } else {
        return 'Olvidaste seleccionar articulos a habilitar';
    }
}

function disable($params = false) {
    if($params) {
        return 'Articulos inhabilitados';
    } else {
        return 'Olvidaste seleccionar articulos a inhabilitar';
    }
}

?>


<?php include('header.php') ?>
<main>
    <div class="container">
        <div class="card text-center my-5">
            <div class="card-body">
                <?php ?>
            </div>
        </div>
    </div>
</main>
<?php include('footer.php') ?>