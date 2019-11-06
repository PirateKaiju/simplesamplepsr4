<?php

    require_once "../vendor/autoload.php";

    $tc1 = new \App\Controllers\TestController();

    $tc1->print_test();

    $pc1 = new \App\Controllers\Person\PersonController();

    $pc1->test_person();

    $tc1->test_model_inclusion();



?>