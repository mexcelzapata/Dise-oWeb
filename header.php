<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/bb72043d80.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="stylee.css" type="text/css" >



</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light static" style="background-color: #e3f2fd;">
    <a class="navbar-brand" href="#">
    <img src="logoG2.svg" width="80" height="80" alt="g-rosse"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
        aria-expanded="false" aria-label="Toggle navigation"></button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Outfit</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
                <div class="dropdown-menu" aria-labelledby="dropdownId">
                    <a class="dropdown-item" href="cat.php?key=5eace3164e48b4f238931f49">Botines</a>
                    <a class="dropdown-item" href="cat.php?key=5eace3334e48b4f238931f4a">Ropa-USA</a>
                    <a class="dropdown-item" href="cat.php?key=5eace33c4e48b4f238931f4b">Accesorios</a>
                </div>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="buscar">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">buscar</button>
        </form>
    </div>
</nav>
</body>
