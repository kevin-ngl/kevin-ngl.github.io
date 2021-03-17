<?php 
    session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Website</title>
    <style>
        body{
            background-image: url("img/background.jpg");
            background-repeat: no-repeat;
            width: auto;
            height: auto;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <!--HEADER-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="container">
                <div class="row">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <div class="col-3">
                    <li class="nav-item">
                        <a class="navbar-brand" href="index.php">Tr0j4n</a>
                    </li>
                    </div>
                    <div class="col-4">
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Me</a>
                    </li>
                    </div>
                    <div class="col-4">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle "  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contact Me
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="https://www.instagram.com/kevin.ngl/" target="_blank">Instagram</a></li>
                        <li><a class="dropdown-item" href="https://www.facebook.com/nainggolan.kevin/" target="_blank">Facebook</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="https://www.linkedin.com/in/kevin-nainggolan-56ba92174/" target="_blank">Linkedin</a></li>
                        </ul>
                    </li>
                    </div>
                        <?php
                            if (isset($_SESSION["useruid"])) {
                                echo "<div class='col-4'>";
                                    echo "<li class='nav-item'>";
                                        echo "<a class='btn btn-outline-light' href='profile.php' role='button'>Profile Page</a>";
                                        echo "<a class='btn btn-outline-light' href='includes/logout.inc.php' role='button'>LOGOUT</a>";
                                    echo "</li>";
                                echo "</div>";
                            } else{
                                echo "<div class='col-4'>";
                                    echo "<li class='nav-item'>";
                                        echo "<a class='btn btn-outline-light' href='signup.php' role='button'>SIGNUP</a>";
                                        echo "<a class='btn btn-outline-light' href='login.php' role='button'>LOGIN</a>";
                                    echo "</li>";
                                echo "</div>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
          </div>
        </div>
      </nav>
    <!--END OF HEADER-->