<?php
include 'auth.php';
?>

<html>
    <head>
        <title>Ooty</title>
        <style>
          body {
            background-size: cover;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: large;
            font-weight: bold;
          }

            .demo-bg {
            opacity: 0.6;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            ;
            }
            .demo-content {
                margin-top: 5%;
                position: relative;
            }
          #inside {
            margin-top: 10%;
            border-color: darkred;
            border-style: groove;
            border-radius: 20px;
          }
          article{
            width: 50%;
            float: left;
            margin-left: 10%;
            text-align: justify;
          }
          aside{
            width: 40%;
            float: right;
          }
          h1{
            color: darkgreen;
          }
        </style>
    </head>
    <body  align="center">
    <div class="inside">
        <img class="demo-bg" src="ooty.jpg" alt="">
        <h1 class="demo-content">Ooty Queen of Hills</h1>
        <article class="desc demo-content">
            Ooty (short for Udhagamandalam) is a resort town in the Western Ghats mountains, in southern India's Tamil Nadu state. Founded as a British Raj summer resort, it retains a working steam railway line. Other reminders of its colonial past include Stone House, a 19th-century residence, and the circa-1829 St. Stephen’s Church. Its 55-acre Government Botanical Garden lies on the slopes of Doddabetta Peak.
        </article>
        <aside class="demo-content">
            <img src="kathakali.jpg">
        <aside>
        </div>
    </body>
</html>


        
    </body>
</html>