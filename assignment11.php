<?php
include "header.php"

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* div{
            justify-content: center;
            align-items: center;
        } */
        /* form{
            margin-top: 30px;
           margin-right: 50px;
        } */
        input{
            border: 1px solid black;
            height: 50px;
            border-radius: 10px;
            width: 10px;
        }
        select{
            border: none;
            margin-left: 10px;
            background-color: gray;
            padding: 5px;
            border-radius: 10px;
            color: burlywood;
        }
        button{
            border: none;
            height: 30px;
            margin-top: 10px;
            background-color: grey;
            color: burlywood;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-light">
    <a href="assignment.php"><i class="fa-solid fa-arrow-left"></i></a>
    <div class="container mt-5 p-5">
    <div class="row mt-5">
    <form>
        <div class="col-lg-4 input-group mb-3">
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="num1">
        </div>
        <div class="col-lg-4 input-group mb-3">
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="num2">
        </div>
       <div class="col-lg-4">
       <select name="operator">
            <option>None</option>
            <option>Add</option>
            <option>Subtract</option>
            <option>Multiply</option>
            <option>Divide</option>
            <option>Remainder</option>
        </select>
       </div>
        <br>
        <button type="submit" name="submit" value="submit">calculate</button>
    </form>
    </div>
    
    <p>The answer is:</p>
    </div>
    <?php

         if(isset($_GET['submit'])) {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operator'];
            switch ($operator) {
                case "None":
                    echo "ERRO";
                break;
                case "Add":
                    echo $result1 + $result2;
                break;
                case "Subtract":
                    echo $result1 - $result2;
                break;
                case "Multiply":
                    echo $result1 * $result2;
                break;
                case "Divide":
                    echo $result1 / $result2;
                break;
                case "Remainder":
                    echo $result1 % $result2;
                break;
            }

         };
    
         include 'footer.php';
    ?>

</body>
</html>