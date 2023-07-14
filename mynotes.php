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
    <h5>OPP "OBJECT ORIENTED PROGRAMMING"</h5>
    <p>
     Object-oriented programming (OOP) is a style of programming
     characterized by the identification of classes of objects closely 
     inked with the methods (functions) with which they are associated.
     It also includes ideas of inheritance of attributes and methods.
   </p>
   
    <h5>BASIC TERMINOLOGIES</h5>
    <p><span>Class:</span> A class is a data type that provides a framework for creating objects. You can define a class to create multiple objects without writing additional code.</p>
    <p><span>Object:</span> In OOP, an object represents an instance, or creation, of a class. Objects define specific data, such as properties and behaviors, to implement code.</p>
    <p><span>Method:</span> A method is a function that performs a task or action. For example, a method may return information about an object's data.</p>
    <p><span>Attribute:</span> This structure stores information about an object and defines its state. You can define an attribute as part of the class.</p>

     <h5>CONCEPT OF OOP</h5>
     <p><span>1. Encapsulation:</span>
        Encapsulation means to enclose data by containing it within an object.
       In OOP, encapsulation forms a barrier around data to protect it from the rest of the code. 
       You can perform encapsulation by binding the data and its functions into a class. 
       This action conceals the private details of a class and only exposes the functionality 
       essential for interfacing with it. When a class doesn't allow direct access to its private data,
       it's well-encapsulated.</p>
     <p><span>2. Abstraction:</span>
        Abstraction refers to using simplified classes, rather than complex implementation code, 
        to access objects. Often, it's easier to design a program when you can separate the interface of a 
        class from its implementation. In OOP, you can abstract the implementation details of a class and present a
        clean, easy-to-use interface through the class member functions. Abstraction helps isolate the impact of changes
        made to the code so if an error occurs, the change only affects the implementation details of a class and not
        the outside code.</p>
     <p><span>3. Inheritance:</span>
        Most object-oriented languages support inheritance, which means a new class automatically
        inhabits the same properties and functionalities as its parent class. Inheritance allows you 
        to organize classes into hierarchies, where a class might have one or more parent or child classes. 
        If a class has a parent class, it means the class has inherited the properties of the parent. 
        The child class can also modify or extend the behavior of its parent class. 
        Inheritance allows you to reuse code without redefining the functions of a child class.</p>
     <p><span>4. Polymorphism:</span>
        Polymorphism refers to creating objects with shared behaviors. In OOP, 
        polymorphism allows for the uniform treatment of classes in a hierarchy. 
        When you write code for objects at the root of the hierarchy, any objects created by a 
        child class within the hierarchy have the same functions. Depending on the type of object, 
        it may execute different behaviors.</p>

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