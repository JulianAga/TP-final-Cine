<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Cinemacenter UTN</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/examen_c1/posts.php">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/examen_c1/index.php">Logout</a>
            </li>
        </ul>
        <span class="navbar-text text-white">
            <strong>(Hola <?php 
         require_once("Config\autoload.php");

         use Config\Autoload as Autoload;

         Autoload::Start();
            session_start(); 
            if(isset($_SESSION['loggedUser'])){     
                          $user = $_SESSION['loggedUser'];        
            echo $user->getUsername(); 
            }
            else
            {
                header("location:index.php");
            }
            ?>)</strong>
        </span>
    </div>
</nav>