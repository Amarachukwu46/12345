<?php
    include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style> 
   body{
    background-color: bl;
   }
   table, th, td{
    border: 1px solid black;
    border-collapse: collapse;
    margin-top: 20px;
   }
  table, th{
    padding: 10px;
}
table, td{
    padding: 25px;
}
button{
    margin-top: 20px;
    background-color: black;
    border: none;
    border-radius: 20px;
    font-family: tahoma;
    height: 50px;
    color: white;
}
</style>
</head>
<body class="bg-light">
    <table style="width: 100%;">
        <tr>
            <th>COLOUR PREVIEW</th>
            <th>COLOUR NAME</th>
            <th>HEX VALUES</th>
        </tr>
        <tr>
            <td style="background-color:white;"></td>
            <td>WHITE</td>
            <td>#FFFFFF</td>
        </tr>

        <tr>
            <td style="background-color: yellow;"></td>
            <td>YELLOW</td>
            <td>#FFFF00</td>
        </tr>

        <tr>
            <td style="background-color: Fuchsia;"></td>
            <td>FUCHSIA</td>
            <td>#FF00FF</td>
        </tr>

        <tr>
            <td style="background-color: red;"></td>
            <td>RED</td>
            <td>#FF0000</td>
        </tr>

        <tr>
            <td style="background-color: silver;"></td>
            <td>SILVER</td>
            <td>#C0C0C0</td>
        </tr>

        <tr>
            <td style="background-color: gray;"></td>
            <td>GRAY</td>
            <td>#808080</td>
        </tr>

        <tr>
            <td style="background-color: olive;"></td>
            <td>OLIVE</td>
            <td>#808000</td>
        </tr>

        <tr>
            <td style="background-color: purple;"></td>
            <td>PURPLE</td>
            <td>#800080</td>
        </tr>

        <tr>
            <td style="background-color: maroon;"></td>
            <td>MAROON</td>
            <td>#800000</td>
        </tr>

        <tr>
            <td style="background-color: aqua;"></td>
            <td>AQUA</td>
            <td>#00FFFF</td>
        </tr>

        <tr>
            <td style="background-color: lime;"></td>
            <td>LIME</td>
            <td>#00FF00</td>
        </tr>

        <tr>
            <td style="background-color: teal;"></td>
            <td>TEAL</td>
            <td>#008080</td>
        </tr>

        <tr>
            <td style="background-color: green;"></td>
            <td>GREEN</td>
            <td>#008000</td>
        </tr>

        <tr>
            <td style="background-color: blue;"></td>
            <td>BLUE</td>
            <td>#0000FF</td>
        </tr>

        <tr>
            <td style="background-color: navy;"></td>
            <td>NAVY</td>
            <td>#000080</td>
        </tr>

        <tr>
            <td style="background-color: black;"></td>
            <td>BLACK</td>
            <td>#000000</td>
        </tr>
    </table>

    <a href="assignment11.php"><button>ASSIGNMENT2</button></a>

    <?php
    include 'footer.php'
    ?>
</body>
</html>