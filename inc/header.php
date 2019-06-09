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

        /* Main Navigation */
nav {
    background: rgb(11, 39, 66);
    width: 100%;
    height:50px;
}

nav ul {
    padding: 0;
    margin: 0;
}

nav ul li {
    /* position: relative; */
    /* display: inline-block; */
    list-style-type: none;
    top:-13px;
    margin: 0;
    padding: 10px 0;
    border-radius: 5px;
}
    nav ul li:hover {
        background: black;
    }

nav ul li a {
    color: #03ADDF;
    text-decoration: none;
    padding: 12px;
}
    nav ul li a:hover {
        color: #fff;
        text-decoration: none;
    }

/* Sub Menu */
nav ul li.parent ul.child {
    display: none; /* Hide Sub Menu */
}
nav ul li.parent:hover ul.child {
    display: block; /* Show Sub Menu on Hover */
    position: absolute;
    top: 40px;
    background: black;
}

nav ul li.parent ul.child li {
    width: 9em;
    padding: 0;
}
nav ul li.parent ul.child li:hover {
    /* background: #008FBA; */
}
nav ul li.parent ul.child li a {
    display: block;
}
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar" role="navigation">
      <div class="container">
        <div class="navbar">
          
          <a href="<?php echo BASEURL; ?>index.php" class="navbar-brand">CRUD</a>
          <ul class="nav">          
            <li class="dropdown">
                <a href="#" class="parent"class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Clientes <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>customers">Gerenciar Clientes</a></li>
                    <li><a href="<?php echo BASEURL; ?>customers/add.php">Novo Cliente</a></li>
                </ul>
            </li>
          </ul>
        </div><!--/.navbar-collapse -->
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
      
      </div>
    </nav>

    <main class="container">