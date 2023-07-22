<?php
include('../TH1B/models/BookList.php'); // Include the BookList model

class BookController {
  public function index() {
    // Create the book list and add books (you can replace these static data with data from a database)
    $bookList = new BookList();
    $bookList->addBook(new Book("Sách A", "Tác giả A", "Nhà xuất bản X", "2022", "ISBN123", array("Chương 1", "Chương 2")));
    $bookList->addBook(new Book("Sách B", "Tác giả B", "Nhà xuất bản Y", "2021", "ISBN456", array("Chương 1", "Chương 2", "Chương 3")));
    $bookList->addBook(new Book("Sách C", "Tác giả C", "Nhà xuất bản Z", "2023", "ISBN789", array("Chương 1")));

    // Check if the form was submitted to add a new book
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['addBook'])) {
      // Get the form data
      $title = $_POST['title'];
      $author = $_POST['author'];
      $publisher = $_POST['publisher'];
      $publicationYear = $_POST['publicationYear'];
      $isbn = $_POST['isbn'];
      $chapters = explode(', ', $_POST['chapters']);

      // Create a new book and add it to the book list
      $newBook = new Book($title, $author, $publisher, $publicationYear, $isbn, $chapters);
      $bookList->addBook($newBook);
    }

    // Get the sorted list of books based on user selection
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['sortOption'])) {
        $sortOption = $_POST['sortOption'];
        $bookList->sortBooks($sortOption);
      }
    }

    // Get the sorted list of books or default list
    $books = $bookList->getBooks();

    // Include the view to display the list of books
    include('../TH1B/views/book_list.php');
  }
}
?>
