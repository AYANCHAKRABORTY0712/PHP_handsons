<?php
include 'auth.php';
?>

<html>
    <head>
        <title>Main Page</title>
        <style>
            body {
            background-color: beige;
            font-family: 'Times New Roman', Times, serif;
            }
            h1 {
                color: lightgrey;
                background-color: darkcyan;
                padding: 5px;
            }
            ol{
                margin-left: 40%;
                font-size: large;
                font-weight: bold;
                color: palevioletred;
            }
        </style>
    </head>
    <body>
        <h1 align="center">Tour Packages for Customers</h1>
        <ol>
            <a href="kerala.php"><li>Incredible Kerala</li></a>
            <a href="ooty.php"><li>Ooty Queen of Hills</li></a>
            <a href="templetown.php"><li>Temple Town</li></a>
            <a href="logout.php"><li>Logout</li></a>
        </ol>
    </body>
</html>