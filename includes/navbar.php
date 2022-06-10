<nav class="navbar navbar-light bg-light justify-content-between p-3 mb-4">
  <a class="navbar-brand">Navbar</a>
  <form class="form-inline" action="includes/view.inc.php" method="POST">
    <input class="form-control mr-sm-2" type="search" name="email" placeholder="Search" aria-label="Search">
  </form>
  <a href="./signup.php" class="navbar-brand">Sign Up</a>
  <?php if(isset($_SESSION['is_logged'])): ?>
    <a href="./logout.php" class="navbar-brand">Log out</a>
  <?php elseif(!isset($_SESSION['is_logged'])) : ?>
    <a href="./login.php" class="navbar-brand">Log in</a>
  <?php endif ?>
</nav>