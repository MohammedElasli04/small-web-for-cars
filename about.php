<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="stayle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        include "nav.html" ;
    ?>
    <div class="container mt-5">
        <h1 class="text-center mb-4">About Us</h1>
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Brand</h3>
                <p class="card-text">BMW (Bayerische Motoren Werke AG)</p>
                <h3 class="card-title">Founded</h3>
                <p class="card-text">March 7, 1916</p>
                <h3 class="card-title">Headquarters</h3>
                <p class="card-text">Munich, Germany</p>
                <h3 class="card-title">Known For</h3>
                <p class="card-text">Luxury vehicles, motorcycles, and engines</p>
                <h3 class="card-title">Popular Models</h3>
                <ul class="list-group">
                    <li class="list-group-item">BMW 3 Series</li>
                    <li class="list-group-item">BMW 5 Series</li>
                    <li class="list-group-item">BMW X5</li>
                    <li class="list-group-item">BMW i8</li>
                    <li class="list-group-item">BMW M3</li>
                </ul>
                <h3 class="card-title mt-4">Fun Fact</h3>
                <p class="card-text">BMW started as an aircraft engine manufacturer.</p>
            </div>
        </div>
    </div>
    <?php
        include "footer.html" ;
    ?>
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>   
</body>
</html>