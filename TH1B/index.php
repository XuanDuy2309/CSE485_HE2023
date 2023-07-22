<?php
include('../TH1B/controllers/BookController.php'); // Include the BookController

// Create a new instance of the BookController
$bookController = new BookController();

// Call the index method to handle the request
$bookController->index();
?>
