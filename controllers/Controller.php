<?php

    include "./models/Model.php";

    class Controller {
        
        public $model;

        function __construct()
        {
            $this->model= new Model();
        }


        function invoke () {

            if(!isset($_GET['book'])){
                $books = $this->model->getBookDetails();
                include "./views/booklist.php";
            }else{
                $book = $this->model->getBook($_GET['book']);
                include "./views/viewBook.php";
            }
            
        }


    }
