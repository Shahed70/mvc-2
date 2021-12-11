<?php 

        include "Book.php";

    class Model {

        public function getBookDetails () {

                return array(
                    "React"=> new Book("React", "Facebook", "React is ausome"),
                    "Laravel" => new Book("Laravel", "Php team", "Laravel is good")
                );
        }

        public function getBook ($bookName){
            $allBooks = $this->getBookDetails();
            return $allBooks[$bookName];
        }

    }