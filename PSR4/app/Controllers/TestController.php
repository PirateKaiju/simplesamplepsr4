<?php

    namespace App\Controllers;

    class TestController{


        public function __construct(){


            $this->model = new \App\Models\Test();

        }


        public function print_test(){
            echo "Test Controller Printing!";
        }

        public function test_model_inclusion(){


            $result = $this->model->test_model();

            //Simplest calling
            //Could also implement a class for view itself

            require_once("../app/Views/test.php");

        }



    }



?>