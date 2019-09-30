
<?php
  use models\User as User;
  use repositories\PostsRepository as PostsRepository;

include('header.php');
    include('nav.php');
    ?>

    <main class="p-5">
        <div class="container">

            <h1 class="mb-5">CINEMAS</h1>


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
                            <th>Cine</th>
                            <th>Direccion</th>
                            <th>Capacidad</th>
                            <th>Valor de entrada</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $products = new PostsRepository();
                   //$categories = new CategoriesRepository();
                                       $productsArray = $products->getAll(); ?>

                                
                                <?php foreach ($productsArray as $key => $value) {
			            	        $Cine = $value;
                                    ?>


                            <tr>
                            <td><input type="checkbox" name="userschecked[]" /></td>
                                <td><?php  echo $Cine->getID(); ?></td>
                                    
                                <td><?php  echo $Cine->getNombre(); ?></td>
                                <td><?php  echo $Cine->getDireccion(); ?></td>
                                <td><?php  echo $Cine->getCapacidad(); ?></td>
                                <!--       <td><?php // echo $Post->getDate(); ?></td> -->
                                <td><?php  echo $Cine->getValor_entrada(); ?></td>
                              
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
                    <h5 class="modal-title">Añadir Cine</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">

                     <div class="form-group">
                        <label>Id del Cine</label>
                        <input type="text" class="form-control" name="ID" required>
                    </div>

                    <div class="form-group">
                        <label>Nombre del Cine</label>
                        <input type="text" class="form-control" name="title" required/>
                    </div>

                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="author" required>
                    </div>

                    <div class="form-group">
                        <label>Valor de Entrada</label>
                        <input type="number" class="form-control" name="category" required>
                    </div>

                    <div class="form-group">
                        <label>Capacidad</label>
                        <input type="number" class="form-control" name="description" required>
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