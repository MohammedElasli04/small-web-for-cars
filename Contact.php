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
    <?php
        include_once 'footer.html' ;
    ?>
    <script src="script.js"></script>  
    <script src="js/bootstrap.min.js"></script> 
</body>
</html>