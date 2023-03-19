<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Hito Individual - Publicaciones</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light" id="nav1">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="blog.php">Hito Individual</a>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a href="formulario_nuevo_post.php" class="nav-link">Nueva Publicación</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <header class="header1">
            <div class="container">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="container">
                        <h1 id="inicio">publicaciones</h1>
                    </div>
                </div>
            </div>
        </header>
        <div class="container" id="cont-1">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php  
                    include_once '../controlador/controlador.php';
                    $c = new Controlador;
                    $c->select();
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="text-center text-muted">HITO INDIVIDUAL DE PROGRAMACIÓN</div>
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="small text-center text-muted fst-italic">Copyright &copy;Vladislav Slavev 2023</div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>