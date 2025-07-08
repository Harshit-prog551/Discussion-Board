<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="public/logo.png" alt=""></a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav"> 
        <!-- ./ mean load the current page again  -->
        <a class="nav-link active" href="./">Home</a>  
        <?php
        if(isset($_SESSION['user']['username'])){ ?>
             <a class="nav-link" href="./server/request.php?logout=true">LogOut</a>
             <a class="nav-link" href="?ask=true">Ask A Question</a> 
        <?php }  ?>

        <?php
        if(!isset($_SESSION['user']['username'])){ ?>
             <a class="nav-link" href="?login=true">Login</a> 
        <!-- sign up parameter and true is vlaue for get request -->
            <a class="nav-link" href="?signup=true">Sign Up</a> 
        <?php }  ?>
         
        <a class="nav-link" href="#">Catagory </a>
        <a class="nav-link" href="#">Latest Questions </a>
      </div>
    </div>
  </div>
</nav>