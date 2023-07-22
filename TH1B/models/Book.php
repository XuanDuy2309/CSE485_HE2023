<?php
include('IBook.php'); // Include the interface

class Book implements IBook {
  // Class implementation for Book
  public $title;
  public $author;
  public $publisher;
  public $publicationYear;
  public $isbn;
  public $chapters;

  public function __construct($title, $author, $publisher, $publicationYear, $isbn, $chapters) {
    $this->title = $title;
    $this->author = $author;
    $this->publisher = $publisher;
    $this->publicationYear = $publicationYear;
    $this->isbn = $isbn;
    $this->chapters = $chapters;
  }

  public function getChapters() {
    return $this->chapters;
  }
}
?>
