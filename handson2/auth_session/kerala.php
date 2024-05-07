<?php
include 'auth.php';
?>

<html>
    <head>
        <title>Kerala</title>
        <style>
          body {
            background-size: cover;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: large;
            font-weight: bold;
          }

            .demo-bg {
            opacity: 0.5;
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: auto;
            }
            .demo-content {
            margin-top: 3%;
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
            color: darkred;
          }
        </style>
    </head>
    <body  align="center">
    <div class="inside">
        <img class="demo-bg" src="kerala.jpg" alt="">
        <h1 class="demo-content">Kerala Tourism</h1>
        <article class="desc demo-content">
            Kerala, located on the south-western tip of India, enjoys unique geographical features that have made it one of the most sought-after tourist destinations in Asia. Fondly referred to as ‘God’s Own Country’, Kerala was selected by the National Geographic Traveller as one of the 50 destinations of a lifetime and one of the thirteen paradises in the world.
            An equable climate, serene beaches, tranquil stretches of backwaters, lush hill stations and exotic wildlife are the major attractions of this land.  A unique advantage of Kerala is that most of the destinations here are only a two - four hour drive from the other.<br><br>
            Classical art forms, colourful festivals, exotic cuisine are some of the cultural marvels that await travellers. Ayurveda, the ancient Indian system of medicine and Panchakarma, the rejuvenation therapy in Ayurveda have also helped Kerala to gain a pan-global reputation as a worth-visit destination.
            Season never ends in Kerala, thanks to the year-long moderate climate and numerous festivals and events. 
        </article>
        <aside class="demo-content">
            <img src="kathakali.jpg">
        <aside>
        </div>
    </body>
</html>