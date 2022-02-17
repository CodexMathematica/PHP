<?php

include 'classes/calc.php';

if(isset($_POST['op'])) {


    $calculate = new Calc($_POST['num1'], $_POST['num2'], $_POST['op'] );
    $result = $calculate->calculator();
    header("Location:index.php?result=$result");
}