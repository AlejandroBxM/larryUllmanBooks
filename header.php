<?php
ini_set('display_errors', 1); // Let me learn from my mistakes!
error_reporting(E_ALL);       // Show all possible problems!
ob_start(); // Turn on output buffering:
session_start();
?>

<!DOCTYPE html>
<html lang = 'es'>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        
        <!-- Bootstrap 5 CSS (nuevo) -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
        
        <!-- Bootstrap Icons (opcional pero chimba) -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <link rel="stylesheet" type="text/css" href="estilos.css" />

        <title> 
            <?php // Print the page title. 
        if (defined('TITLE')) { // Is the title defined?
           print TITLE;
        } else { // The title is not defined.
          print 'Raise High the Roof Beam! A J.D. Salinger Fan Club';
        }
         ?> 
         </title>
    </head>
    <body>

<header>
    <div class="topbar-wrapper" style="z-index: 5;">
         <div class="topbar">
              <div class="container fixed">
                   <h4><a class="logo" href="">Cover your page</a></h4>
                       
                       <!-- Navbar convertida a Bootstrap 5 -->
                       <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link active" href="index.php"> Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="calendar.php"> Calendar </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="Calculator.php"> Calculator </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php"> Register </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="comments.php"> Comments </a>
                            </li>
                          <!--  <li> <a class="nav-link" href="mysqli.php">View Comments</a> </li>
                            <li> <a class="nav-link" href="change_password.php"> Change Password </a> </li>
                            <li> <a class="nav-link"href="view_users.php">View Users</a> </li>
                            <li> <a class="nav-link active" href="images.php"> Images </a> </li>
                            <li> <a class="nav-link" href="upload_image.php"> Upload Images </a> </li>
                            <li> <a class="nav-link" href="view_urls.php"> Views URLs </a> </li>
                            <li> <a class="nav-link" href="add_url.php"> Add To Url </a> </li>
                            <li> <a class="nav-link" href="view_files.php">Views Files</a> </li>
                            <li> <a class="nav-link" href="add_file.php" >Add File</a> <l/i>
                            <li> <a class="nav-link" href="files.php" > Files </a> </li>
                            <li> <a class="nav-link" href="read_files.php" > Read Files </a> </li>
                            <li> <?php
                                      if (isset($_SESSION['nickName']) AND ( substr($_SERVER['PHP_SELF'], -10) != 'logout.php')) {
                                          echo '<a class="nav-link" href="logout.php">Logout</a>';
                                       } else {
                                          echo '<a class="nav-link" href="login.php">Login</a>';
                                        }
                            ?> </li> -->
                        
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Secondary link</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Another link</a></li>
                                </ul>
                            </li>
                       
<li>
                        <!-- Formulario de búsqueda con clases Bootstrap 5 -->
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Buscar</button>
                        </form>
</li>
                         </ul> 
              </div>
         </div>
     </div>
</header>

