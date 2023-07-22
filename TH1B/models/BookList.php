<?php
include('Book.php'); // Include the Book class

class BookList {
  // Class implementation for BookList
  private $books = array();

  public function addBook($book) {
    $this->books[] = $book;
  }

  public function getBooks() {
    return $this->books;
  }

  public function sortBooks($option) {
    usort($this->books, function($a, $b) use ($option) {
      return strnatcmp($a->$option, $b->$option);
    });
  }
}
?>
