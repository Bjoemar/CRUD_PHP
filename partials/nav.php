
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="navbar-brand" href="#">Joemar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">Register</a>
    </li>
    <li class="nav-item">
      <?php if(isset($_SESSION['log_in_user'])) { ?>

         <a class="nav-link" href="logout.php">logout</a>

      <?php } else { ?>

         <a class="nav-link" href="index.php">Login</a>
      <?php } ?>
     
    </li>

       <li class="nav-item">
      <a class="nav-link" href="artist.php">Artist</a>
    </li>

  </ul>
</nav>