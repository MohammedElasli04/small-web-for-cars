<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="stayle.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
       include "nav.html" ;
    ?>
   <div class="row py-5 g-5">
     <div class="col-12 col-lg-6">
         <img src="3371863.jpg" alt="" class="m-1 w-100 sliderMainImage" data-bs-toggle="Modal" data-bs-target="#imageModal">
      <div>
        <img src="P90390715-the-new-bmw-m5-competition-06-2020-600px.jpg" width="60" alt="" class="m-1" slinderThumb>
        <img src="maxresdefault.jpg" width="60" alt="" class="m-1" slinderThumb>
      </div>
     </div>
     <div class="col-12 col-lg-6">
        <h2 id="productname">
            Bmw m5 Competition
        </h2>
        <small class="text-muted">
            Type: W177
        </small>
        <h4 class="my-4">
            from USD
        <SPan id="price">100.000</SPan>
        $
        </h4>
        <label for="selectmodel" class="text-muted">
            Model
        </label>
        <select class="form-select" name="selectmodel" id="Model">
            <option value="">First Edition</option>
            <option value="" selected>black series</option>
            <option value="">Luxury Line</option>
            <option value="">Business Line</option>
        </select>
        <div class="d-grid m-4">
            <button class="btn btn-lg btn-dark" type="button" id="purchasebtn">
                Purchase Now
            </button>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Description
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                     The BMW M5 is a high-performance luxury sports sedan that combines exceptional power, 
                     precision engineering, and luxurious comfort. Part of BMW's iconic 5 Series lineup, 
                     the M5 is developed by the brand's performance division, BMW M GmbH, and is celebrated 
                     for its blend of everyday usability and track-ready capabilities.
                </div>
              </div>
            </div>      
          </div>
     </div>
   </div>
    <?php
        include_once 'footer.html' ;
    ?>
    <script src="script.js"></script>   
    <script src="js/bootstrap.min.js"></script>
</body>
</html>