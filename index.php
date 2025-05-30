<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="stayle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        include "nav.html" ;
    ?>
    <div class="container position-relative text-center">
    <header class="position-relative text-center text-white mb-5">
        <img src="3371863.jpg" alt="banner" class="w-100">
        <div class="position-absolute top-50 start-50 translate-middle-x w-100 px-3">
            <h1 class="display-3">The New Bmw m5 Competition</h1>
            <a href="product.php" class="btn btn-light">
                Buy Now
            </a>
        </div>
    </header>

    <h2 class="display-5 py-5">
        New Models
    </h2>
    <div class="d-flex justify-content-between align-items-center flex-column flex-lg-row my-5" id="new">
        <div class="card m-2" id="shadow">
            <a href="product.php">
                <img src="3371863.jpg" alt="Product" class="card-img-top" height="200">
            </a>
            <div class="card-body">
                <p class="card-text fw-bold">
                    Bmw m5 competition
                </p>
                <small class="text-secondary">
                    from USD 100.000$
                </small>
            </div>
            <a href="product.php" class="btn btn-light">
                Buy Now
            </a>
        </div>
        <div class="card m-2" id="shadow">
            <a href="product.php">
                <img src="10519567.jpg" alt="Product" class="card-img-top" height="200">
            </a>
            <div class="card-body">
                <p class="card-text fw-bold">
                    Bmw m4
                </p>
                <small class="text-secondary">
                    from USD 80.000$
                </small>
            </div>
            <a href="#" class="btn btn-light disabled" >
                Temporary Unvailable
            </a>
        </div>
        <div class="card m-2" id="shadow">
            <a href="product.php">
                <img src="8282384.jpg" alt="Product" class="card-img-top" height="200">
            </a>
            <div class="card-body">
                <p class="card-text fw-bold">
                    Bmw m3 cs
                </p>
                <small class="text-secondary">
                    from USD 60.000$
                </small>
            </div>
            <a href="#" class="btn btn-light disabled" >
                Temporary Unvailable
            </a>
        </div>
    </div>
    <div class="row text-start align-items-center gy-5 my-5">
        <div class="col-12 col-md-6">
            <img src="8282391.jpg" class="w-100 h-100">
        </div>
        <div class="col-12 col-md-6">
            <h2 class="display-3">
                The New Design
            </h2>
            <p>
                Design is essential for highly
                trditional luxury brands. our
                cleints not only buy cars, they
                get a luxury experience in the 
                style of our premises - the 
                Sensual purity
            </p>
        </div>
    </div>
    <div class="row text-start align-items-center gy-5 my-5">
        <div class="col-12 col-md-6">
            <h2 class="display-3">
                50 years of the 116 sries
            </h2>
            <p>
                Design is essential for highly
                trditional luxury brands. our
                cleints not only buy cars, they
                get a luxury experience in the 
                style of our premises - the 
                Sensual purity
            </p>
        </div>
        <div class="col-12 col-md-6">
            <img src="851027.jpg" class="w-100 h-100">
        </div>
    </div>
    <section class="my-5 mx-auto py-5" id="ContactButton">
        <h2>Contact Us</h2>
        <a href="Contact.html" id="con" class="btn btn-light">
            Click here to fill in the contact form
        </a>
    </section>
    </div>
    <?php
        include_once 'footer.html' ;
    ?>
    <script src="script.js"></script>  
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>