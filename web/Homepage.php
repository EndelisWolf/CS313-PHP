<!DOCTYPE html>
<html>

<head>
    <title>My Homepage</title>
    <link rel="stylesheet" type="text/css" href="Homepage.css">
    <script src="Homepage.js">

    </script>
</head>
<div>
    <?php
    //date_default_timezone_set("America/ Utah");
    $welcome = date("m/d/Y");

    echo "<h1>Welcome to My Homepage!<br> You arrived here at: $welcome</h1>"

    ?>
    <h1>Who am I?</h1>
    <p>
        First of all, it is nice you meet you. As for myself, I am Michael Wilkins. Currently, I am a junior, majoring in
        Software Engineering. While I am not the most proficient in coding, I enjoy learning new languages, and often
        take a much longer time than necessary to try and understand the content.
    </p>
    <br>
    <h2>My Interests</h2>
    <p>
        I promise my interests are somewhat interesting. At times. Though I will break into three main concepts:
        <br>
        <ol>
            <li onclick="clicked()">Dogs & Wolfs</li>
            <div><img id="doggo" src="./puppy3.jpg"></div>
            <li onclick="clicked2()">Gaming</li>
            <div><img id="game" src="./game.JPG"></div>
            <li onclick="clicked3()">Interacting with friends</li>
            <div><img id="friend" src="./friends.JPG"></div>
        </ol>
        <br>
        To expalin each briefly:
        <br>
        <ol>
            <li id="hov1">
                I have aways found Dogs and & Wolfs absolutely amazing to watch. They act in manners that are to get
                closer to their owners or to support one another, and tend to make sure that those that they care about
                are taken care of. Another point is that Dogs really are intelligent, and are able tell if you are sad,
                happy, or need a way to get rid of excess energy and are willing to help you everyday no matter way.
            </li>
            <li id="hov2">
                I love playing games, they are able to put you in another world and interact with it, though its even
                better with friends as it will allow you to play with friends that are gone over extremely long
                distances if you play games online. It removes barriers that were once there for when an individual
                would move.
            </li>
            <li id="hov3">
                People are social creatures, and even for someone as shy as me, we have to interact with others. The
                significance for myself is tha tI am able to open up, and find new parts of my own life that I never
                knew because my friends allow me to bring them out without worry in the end. It's a giant blessing when
                one really looks at it.
            </li>
        </ol>

    </p>
</div>

</html>