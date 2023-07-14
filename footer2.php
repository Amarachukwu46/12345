<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        footer{
            position: sticky;
            top: 100%;
            border-top: 5px solid black;
        }
    </style>
</head>
<body>
<a href="#" class="to-top">
   <i class="fa-solid fa-arrow-up"></i>
   </a>
    
    <footer class=" py-3 border-1" >
        <div class="container text-center border-1">
            <p class="display-5 mb-3">MayaTech</p>
            <small class="">&copy; copyright by MayaTech. All rights reserved</small>
        </div>
    </footer>

    <script>
        const toTop = document.querySelector(".to-top")
        window.addEventListener("scroll", () =>{
            if (window.pageYOffset > 100) {
                toTop.classList.add("active");
            }else{
                toTop.classList.remove("active");
            }
        });

        function myfunction() {
            var element = document.body;
            element.dataset.bsTheme =
            element.dataset.bsTheme == "light" ? "dark" : "light";
        }
    </script>


<script src="js/jquery3.7.0.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>