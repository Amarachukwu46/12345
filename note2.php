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
    
        <h5>MEANING OF PHP</h5>
        <p>PHP is an open-source server-side scripting language that many devs use for web development.
          It is also a general-purpose language that you can use to make lots of projects, including Graphical 
          User Interfaces (GUIs).</p>

        <h5>ADVANTANGES OF PHP</h5>
        <p>
            1: PHP is an open-source server-side scripting language that many devs use for web development. It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs). <br>
            2: PHP is an open-source server-side scripting language that many devs use for web development. It is also a general-purpose language that you can use to make lots of projects, including Graphical User Interfaces (GUIs). <br>
            3: Easy to learn: PHP is not hard to learn for absolute beginners. You can pick it up pretty if you already have programming knowledge. <br>
            4: PHP syncs with all Databases: You can easily connect PHP to all Databases, relational and non-relational. So it can connect in no time to MySQL, Postgress, MongoDB, or any other database.
        </p>

        <h5>WHAT CAN PHP DO</h5>
        <p>
            1: PHP can generate dynamic page content. <br>
            2: PHP can create, open, read, write, delete, and close files on the server. <br>
            3: PHP can collect form data. <br>
            4: PHP can send and receive cookies. <br>
            5: PHP can add, delete, modify data in your database.
        </p>

        <h5>HOW TO USE PHP</h5>
        <P>
          1. PHP Parser: The parser takes PHP code and analyses it, outputting a respective syntax tree that puts the source into an easier to read format for machines to understand. <br>
          2. Web Server: The server is the program that will execute your PHP files to form webpages. <br>
          3. Web Browser: The browser will allow you to view the PHP page through the server, in the same way as with any other content on the web.
        </P>
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