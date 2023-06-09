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

  <?php
// Include the file with the database connection code
include 'db_connection.php';

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result && mysqli_num_rows($result) > 0) {
    // Initialize the $products array
    $products = array();

    // Fetch each row from the result set and add it to the $products array
    while ($row = mysqli_fetch_assoc($result)) {
        $products[] = $row;
    }
}

// Close the database connection
mysqli_close($conn);
?>

<!-- Display the products on the webpage -->
<div class="container">
    <h2>Product Listing</h2>
    <div class="row">
        <?php if (!empty($products)) : ?>
            <?php foreach ($products as $product) : ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="<?php echo $product['image']; ?>" class="card-img-top" alt="<?php echo $product['name']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product['name']; ?></h5>
                            <p class="card-text"><?php echo $product['description']; ?></p>
                            <p class="card-text">$<?php echo $product['price']; ?></p>
                            <a href="#" class="btn btn-primary">Add to Cart</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <p>No products found.</p>
        <?php endif; ?>
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
