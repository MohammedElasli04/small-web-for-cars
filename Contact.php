<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="stayle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
        include "nav.html" ;
    ?>
   <div class="container position-relative text-center mt-4">
    <h1>Contact Us</h1>
    <p>we do our best to rspond within i working day.<br>
       Need help? Fill in the form below as soon as possible
    </p>
   </div>
    <div class="container">
   <form>
    <div class="form-group">
      <div class="row">
        <div class="col">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" placeholder="First Name" id="firstName" name="firstName">
        </div>
        <div class="col">
            <label for="LastName">Last Name</label>
            <input type="text" class="form-control" placeholder="Last Name" id="LastName" name="LastName">
        </div>
      </div>
    </div>
     <div class="form-group">
         <label for="email">Email address</label>
         <input type="email" class="form-control" id="email" placeholder="name@gmail.com" name="email">
     </div>
     <div class="form-group">
        <label for="product">Model</label>
        <select name="" class="form-control" id="product">
            <option value="" selected>Bmw m5 competition</option>
            <option value="">Bmw m4</option>
            <option value="">Bmw m3 cs</option>
        </select>
     </div>
     <div class="form-group">
        <label for="message">Question</label>
        <textarea class="form-control" name="" id="message" name="message" rows="3"></textarea>
     </div>
     <div class="form-group mt-3">
        <button class="btn btn-secondary" type="submit" value="submit" name="submit" id="btnsubmit">
            Submit
        </button>
     </div>  
  </form>
</div>
   <div class="container footer">
    <footer class="d-flex justify-content-between my-5 text-start flex-wrap">
        <ul class="nav flex-column">
            <li class="fw-bold nav-items">
                <a href="Home.html" class="nav-link text-muted">
                    <img src="download.jpg" height="100">
                </a>
            </li>
            <li class="fw-bold nav-items">
                <p class="text-dark mt-3">
                    Copyright BMW , designed with love by Mohammed Elasli
                </p>
            </li>
        </ul >
        <ul class="nav flex-column">
            <li class="fw-bold nav-items">
                <a href="#" class="nav-link text-dark">
                    Pages
                </a>
            </li>
            <li class=" nav-items">
                <a href="Home.html" class="nav-link text-dark">
                    Home
                </a>
            </li>
            <li class=" nav-items">
                <a href="product.html" class="nav-link text-dark">
                    Product
                </a>
            </li>
            <li class=" nav-items">
                <a href="about.html" class="nav-link text-dark">
                    About
                </a>
            </li>
            <li class=" nav-items">
                <a href="Contact.html" class="nav-link text-dark">
                    Contact
                </a>
            </li>
        </ul>
    </footer>
    <script src="script.js"></script>  
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>