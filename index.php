<?php 
    include_once 'header.php';
?>

<div class="transisi">
    <?php 
    if (isset($_SESSION["useruid"])) {
      echo "<div class='jumbotron jumbotron-fluid'>";
      echo "<div class='container'>";
      echo "<h1 class='display-4 text-light'>Hello"." ". $_SESSION["useruid"]."</h1>";
      echo "<p class='lead text-light'>This is my first website which built using <a href='https://www.php.net/manual/en/migration70.new-features.php' style='text-decoration: none;'>PHP 7</a> and <a href='https://getbootstrap.com/docs/5.0/getting-started/introduction/' style='text-decoration: none;'>Bootstrap 5.</a></p>";
      echo "</div>";
      echo "</div>";
    }else {
      echo "<div class='jumbotron jumbotron-fluid'>";
      echo "<div class='container'>";
      echo "<h1 class='display-4 text-light'>Hello World"."</h1>";
      echo "<p class='lead text-light'>This is my first website which built using <a href='https://www.php.net/manual/en/migration70.new-features.php' style='text-decoration: none;'>PHP 7</a> and <a href='https://getbootstrap.com/docs/5.0/getting-started/introduction/' style='text-decoration: none;'>Bootstrap 5.</a></p>";
      echo "</div>";
      echo "</div>";
    }
    ?>
</div>

<?php 
    include_once 'footer.php';
?>

//