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
