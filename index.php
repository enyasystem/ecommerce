<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>E-commerce Website</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <?php
    include('header.php');
  ?>

  <!-- Carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="path_to_image1.jpg" class="d-block w-100" alt="Featured Product 1">
        <div class="carousel-caption d-none d-md-block">
          <h5>Featured Product 1</h5>
          <p>Description of Featured Product 1</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="path_to_image2.jpg" class="d-block w-100" alt="Featured Product 2">
        <div class="carousel-caption d-none d-md-block">
          <h5>Featured Product 2</h5>
          <p>Description of Featured Product 2</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="path_to_image3.jpg" class="d-block w-100" alt="Featured Product 3">
        <div class="carousel-caption d-none d-md-block">
          <h5>Featured Product 3</h5>
          <p>Description of Featured Product 3</p>
          <a href="#" class="btn btn-primary">Buy Now</a>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- Product Filter Sidebar -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item list-group-item-action">Category 1</a>
          <a href="#" class="list-group-item list-group-item-action">Category 2</a>
          <a href="#" class="list-group-item list-group-item-action">Category 3</a>
          <a href="#" class="list-group-item list-group-item-action">Category 4</a>
        </div>
      </div>
      <div class="col-md-9">
        <h2>Product Listing</h2>
        <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="product1.jpg" class="card-img-top" alt="Product 1">
              <div class="card-body">
                <h5 class="card-title">Product 1</h5>
                <p class="card-text">Description of Product 1</p>
                <p class="card-text">$99.99</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="product2.jpg" class="card-img-top" alt="Product 2">
              <div class="card-body">
                <h5 class="card-title">Product 2</h5>
                <p class="card-text">Description of Product 2</p>
                <p class="card-text">$49.99</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="product3.jpg" class="card-img-top" alt="Product 3">
              <div class="card-body">
                <h5 class="card-title">Product 3</h5>
                <p class="card-text">Description of Product 3</p>
                <p class="card-text">$79.99</p>
                <a href="#" class="btn btn-primary">Add to Cart</a>
              </div>
            </div>
          </div>
          <!-- Add more product cards here -->
        </div>
      </div>
    </div>
  </div>

  <!-- Product Details Page -->
  <div class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <img src="product1.jpg" class="img-fluid" alt="Product 1">
      </div>
      <div class="col-md-6">
        <h2>Product 1</h2>
        <p>Description of Product 1</p>
        <p>Price: $99.99</p>
        <button class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
  </div>

  

<?php
include('footer.php');
?>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    $('.carousel').carousel();
  </script>
</body>
</html>
