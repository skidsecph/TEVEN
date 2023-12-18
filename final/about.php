<!-- 
<?php
    include("database.php");
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
                                body {
                    font-family: Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    height: 100px;
                    background-image: url("");
                }

                header {
                    background-color:rgb(206, 29, 206);
                color: #fff;
                    text-align: center;
                    padding: .1em;
                }

                section {
                    max-width: 600px;
                    margin: 6px auto;
                    background-color: #fff;
                    padding: 20px;
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                }

                h1, h2 {
                    color: #333;
                }

                p {
                    color: #666;
                }
                .profile {
                    background-color: grey;
                    color: black;
                }   

                a {
                    text-decoration: none;
                    color: black;
                    font-weight: bolder;
                }

                a:hover {
                    background-color: orangered;
                    color: white;
                }
    </style>
    <title>My Profile</title>
    
</head>
<body>

    <header class="profile">
        <h1>My Profile</h1>
    </header>

    <section>
        <img src="./img/profile.jpg" alt="Profile" style="max-width: 50%;">
        <h2>Teven John G Mantalaba</h2>
        <p><h4>Details:</h4></p>
        <p>Date of Birth: December 29, 2004</p>
        <p>Gender: Male</p>
        <p>Status: Single</p>
        <p> 
        <hr>
        <p><h4>Hobbies:</h4></p>
        <p>Playing Online Games</p>
        <p>Watching movies</p>
        <p>Playing basketball</p>
        <hr>
        <p><h4>Skills:</h4></p>
        <p>Cooking</p>
        <p>Basic Programming</p>
        <hr>
        <a href="index.php">HOME</a>
    <br>
    </section>

</body>
</html>