<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <a href="#" onclick="opensidemenu()">
      <i class="fa fa-bars mb-2 " aria-hidden="true"></i>
      <a href="dashboard.php" class="navbar-brand">
         <h2 >MPIS</h2>
      </a>
   </a>
   <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
   </button> -->

   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        
        
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php echo $_SESSION['user'] ;  ?>
            </a>
            <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
              
               <!-- <div class="dropdown-divider"></div> -->
               <a class="dropdown-item text-secondary" href="logout.php">Logout</a>
               <!-- <div class="dropdown-divider"></div> -->
               <!-- <a class="dropdown-item" href="#">Something else here</a> -->
            </div>
         </li>
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
         <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
         <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
      </form> -->
   </div>
</nav>




