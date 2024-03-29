<?php
    include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NOTES</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
    h5{
        text-align: center;
        font-weight: 800;
    }
    </style>
</head>
<body>
    
<div class="container lead justify-content-center p-5">
    <h5>ERROR REPORTING IN PHP</h5>
    <p>
    The PHP error reporting allows you to display or record only your preferred error types. Consequently, 
    the said functionality helps in getting the errors that are urgent and critical based on your program expectations. 
    Hence, this article contains the necessary information to turn on error reporting, display errors, 
    and get familiar with various types of errors.
   </p>
   
    <h5 class="text-uppercase">Predefined Error Constants for PHP Error Reporting</h5>
    <p>
      1: E_ERROR or 1: This constant refers to the fatal run-time errors that aren’t expected to be recovered. <br>
      2: E_WARNING or 2: It represents non-fatal run-time errors usually labeled as warnings that don’t stop the execution of the script. <br>
      3: E_PARSE or 4: The E_PARSE constant denotes the compile-time parsing errors generated by the parser. <br>
      4: E_NOTICE or 8: This constant refers to the run-time notices that may or may not indicate errors. <br>
      5: E_CORE_ERROR or 16: The given constant resembles the E_ERROR except for the fact that the former is produced by the core of PHP during PHP’s initial startup. <br>
      6: E_CORE_WARNING or 32: This constant is the same as the E_WARNING except for the fact that the former is produced by the core of PHP during PHP’s initial startup. <br>
      7: E_COMPILE_ERROR or 64: It indicates fatal compile-time errors similar to the E_ERROR but produced by the Zend Scripting Engine. <br>
      8: E_COMPILE_WARNING or 128: It signifies compile-time non-fatal warnings similar to the E_WARNING but produced by the Zend Scripting Engine. <br>
      9: E_USER_ERROR or 256: It indicates user-generated error messages generated by calling the trigger_error() function; otherwise, it is similar to the E_ERROR. <br>
      10: E_USER_WARNING or 512: It represents user-generated warning messages generated by calling the trigger_error() function; otherwise, it is similar to the E_WARNING. <br>
      11: E_USER_NOTICE or 1024: It denotes user-generated notice messages generated by calling the trigger_error() function; otherwise, it is similar to the E_NOTICE. <br>
      13: E_STRICT or 2048: The stated constant can be enabled to get code suggestions from PHP for the forward compatibility and best interoperability of your code. <br>
      15: E_RECOVERABLE_ERROR or 4096: This constant indicates an E_ERROR that can be caught by a user-defined error handler. <br>
      16: E_DEPRECATED or 8192: It denotes run-time notices that can be enabled to get warnings about the code that won’t have any effect in the future versions of PHP. <br>
      17: E_USER_DEPRECATED or 16384: It represents warning messages generated by users by calling the trigger_error() function; otherwise, it is similar to the E_DEPRECATED. <br>
      18: E_ALL or 32767: The E_ALL constant represents all errors, notices, and warnings
    </p>

</div>

<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="mynotes.php">1</a></li>
    <li class="page-item"><a class="page-link" href="note2.php">2</a></li>
    <li class="page-item"><a class="page-link" href="note3.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<?php
    include 'footer.php'
?>
</body>
</html>