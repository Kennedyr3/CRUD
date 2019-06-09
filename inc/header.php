<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>CRUD com Bootstrap</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            /* padding-top: 10px; */
            padding-bottom: 0px;
            margin-bottom: 1px;
        }

    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" role="navigation">
      <div class="container">
        <div class="navbar">

          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a>
          <ul class="nav">          
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Clientes <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item"  href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                    <li><a class="dropdown-item"  href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
      
      </div>
    </nav>

    <main class="container">