<?php
 include('header.php'); 
  ?>

     <main class="d-flex align-items-center justify-content-center height-100">
          <div class="content">
               <header class="text-center">
                    <h2>Cinema UTN</h2>
               </header>
               <form action="controllers/login.php" method="POST" class="login-form bg-dark-alpha p-5 text-white">
                    <div class="form-group">
                         <label for="">Usuario</label>
                         <input type="text" name="username" class="form-control form-control-lg" placeholder="Ingresar usuario">
                    </div>
                    <div class="form-group">
                         <label for="">Contraseña</label>
                         <input type="text" name="password" class="form-control form-control-lg" placeholder="Ingresar constraseña">
                    </div>
                    <button class="btn btn-dark btn-block btn-lg" type="submit">Iniciar Sesión</button>
               </form>
          </div>
     </main>

<?php
 //include('footer.php') //Quitar
?>
