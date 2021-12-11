<?php 

    class Book {
        public $bookName;
        public $bookAuthor;
        public $bookDetails;

        public function __construct($bookName, $bookAuthor, $bookDetails)
        {
            $this->bookName= $bookName;
            $this->bookAuthor = $bookAuthor;
            $this->bookDetails = $bookDetails;
        }
    }