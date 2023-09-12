<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300&family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Open+Sans:wght@300&family=Oswald&family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">RentalCars</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- JUMBOTRON -->
    <div class="jumbotron">
        <h1>CarRentals</h1>
        <p>Know about our company here...</p>
    </div>

    <!-- -------------------------About Us------------------------ -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">About Us</h2>
        </div>
    </section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/car4.jpg" alt="gird_image" class="img-fluid aboutimg">
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4"> I am Aayush Kumar.</h2>
                <p class="py-3">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Modi eveniet vitae
                    tenetur? Voluptatum, mollitia ab? Labore, nulla
                    assumenda error animi cumque a doloribus eos, iusto,
                    amet deleniti qui sapiente accusantium?
                </p>
                <a href="about.php" class="btn btn-success">About Me</a>
            </div>
        </div>
    </div>


    <footer>
        <p class="p-3 bg-dark text-white text-center">Enjoy your Car Adventures</h3>
    </footer>

    <!-- ------------------------------------------------------------------------------------------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>