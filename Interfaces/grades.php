<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="../css/util.css">

    <title>Grades</title>
    <?php require_once '../Utilidades/scripts.php' ?>
  </head>
  <body >
    <nav class="navbar navbar-expand-md navbar-light bg-info sticky-top">

      <div class="container">
        <a class="navbar-brand" href="ingresasteOrejo.php"><b>ITMS</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsa" aria-controls="colapsa" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div  class="collapse navbar-collapse" id="colapsa">

          <ul class="navbar-nav mr-auto">

            <li class="nav-item">
              <a class="nav-link" href="courses.php" aria-selected="false">COURSES </a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="groups.php" aria-selected="false">GROUPS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="grades.php" aria-selected="true">GRADES</a>
            </li>
          </ul>
          <ul class="navbar-nav justify-content-end">

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i>
                Usuario
              </a>
              
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Your Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    
    <div class="index">
      <div class="d-flex" id="grades">
        
      </div>
  </div>
  </body>
  
</html>

