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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

            </ul>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="login_system/login_form.php">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_system/register_form.php">Register</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- --------------------Car Carausol------------------ -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/car1.jpg" alt="Los Angeles" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/car2.jpg" alt="Chicago" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/car3.jpg" alt="New York" width="1100" height="500">
            </div>
            <div class="carousel-item">
                <img src="images/car4.jpg" alt="New York" width="1100" height="500">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
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

    <!-- ----------------------Services------------------------- -->

    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Our Services</h2>
        </div>


        <div class="form text-center mb-5">
            <div class="text">Our Varieties in Cars : </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input checked type="checkbox" class="form-check-input" value="">All
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Sadan
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">SUV
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" value="">Hetchback
                </label>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/car1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/car1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/car1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">John Doe</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ----------------------------------Gallery------------------------ -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Gallery</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img1.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img2.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img3.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img4.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img5.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img6.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img7.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/img8.jpg" class="img-fluid pb-3">
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/car3.jpg" class="img-fluid pb-3">
                </div>
            </div>
        </div>
    </section>

    <!-- -------------------------Form------------------------- -->
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">We always welcome your REVIEWS.</h2>
        </div>
        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email ID</label>
                    <input type="text" name="email" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" name="mobile" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </section>
    <footer>
        <p class="p-3 bg-dark text-white text-center">Enjoy your Car Adventures</h3>
    </footer>

    <!-- ------------------------------------------------------------------------------------------------------ -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>