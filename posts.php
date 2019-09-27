
<?php
  use models\User as User;
  use repositories\PostsRepository as PostsRepository;

include('header.php');
    include('nav.php');
    ?>

    <main class="p-5">
        <div class="container">

            <h1 class="mb-5">Peliculas en Cartel</h1>


            <form class="form-inline" action="multiaction.php" method="POST">

                <div class="form-group mb-4">
                    <button type="button" class="btn btn-light mr-4" data-toggle="modal" data-target="#create-post">
                        <object type="image/svg+xml" data="icons/plus.svg" width="16" height="16"></object>
                    </button>

                    <label for="">Accion múltiple</label>
                    <select name="action" class="form-control ml-3">
                        <option value="trash">Eliminar</option>
                        <option value="enable">publicar</option>
                        <option value="disable">despublicar</option>
                    </select>
                    <button type="submit" class="btn btn-dark ml-3">Enviar</button>

                    
                </div>
                

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th></th>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Categoría</th>
                            <th>Fecha de estreno</th>
                            <th>Texto</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $products = new PostsRepository();
                   //$categories = new CategoriesRepository();
                                       $productsArray = $products->getAll(); ?>

                                
                                <?php foreach ($productsArray as $key => $value) {
			            	        $Post = $value;
                                    ?>


                            <tr>
                            <td><input type="checkbox" name="userschecked[]" /></td>
                                <td><?php  echo $Post->getID(); ?></td>
                                    
                                <td><?php  echo $Post->getTitle(); ?></td>
                                <td><?php  echo $Post->getAuthor(); ?></td>
                                <td><?php  echo $Post->getcategory(); ?></td>
                                <td><?php  echo $Post->getDate(); ?></td>
                                <td><?php  echo $Post->getDescription(); ?></td>
                              
                                <td>
                                    <a class="btn btn-light" name="btnRemove">
                                        <object type="image/svg+xml" data="icons/trash-2.svg" width="16" height="16">
                                            Your browser does not support SVG
                                        </object>
                                    </a>
                                </td>
                            </tr>
                                <?php } ?>

                    </tbody>
                </table>
            </form>

            <!-- Esto como si no existiera -->
            <?php if(isset($successMje) || isset($errorMje)) { ?>
                <div class="alert <?php if(isset($successMje)) echo 'alert-success'; else echo 'alert-danger'; ?> alert-dismissible fade show mt-3" role="alert">
                    <strong><?php if(isset($successMje)) echo $successMje; else echo $errorMje; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            <?php } ?>
        </div>
    </main>

    <!--
        CREATE POSTS
    -->
    <div class="modal fade" id="create-post" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog" role="document">

            <form class="modal-content" action="publish.php" method="POST">

                <div class="modal-header">
                    <h5 class="modal-title">Crear Post</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="form-group">
                        <label>Título</label>
                        <input type="text" class="form-control" name="title" />
                    </div>

                    <div class="form-group">
                        <label>Autor</label>
                        <input type="text" disabled value="<?php echo $user->getUserName(); ?>" class="form-control">
                        <input type="hidden" name="author" value="<?php echo $user->getUserName(); ?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Categoría</label>
                        <select type="text" class="form-control" name="category">
                            <option value="1">Acción</option>
                            <option value="2">Drama</option>
                            <option value="3">Policiales</option>
                            <option value="4">Documentales</option>
                            <option value="5">Terror</option>
                            <option value="6">Suspenso</option>
                        </select>

                    </div>
                    
                    <div class="form-group">
                        <label>Fecha</label>
                        <input type="date" class="form-control" name="date" />
                    </div>

                    <div class="form-group">
                        <label>Texto</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-dark">Publicar</button>
                </div>
            </form>

        </div>
    </div>

    <?php include('footer.php'); ?>