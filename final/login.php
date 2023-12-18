<!-- <?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: login.php");
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>

            @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

            * {
            font-family: "Poppins", sans-serif;
            }
            body {
            padding: 50px;
            background-image: url('https://i.pinimg.com/originals/81/4b/91/814b91e1c05882fae89b2d9abca6bf5b.gif');
            background-repeat: no-repeat;
            background-size: cover;
            }


            .container {
            max-width: 600px;
            margin: auto;
            padding: 50px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-style: groove;
            border-radius: 10px;
            backdrop-filter: blur(8px);
            margin-top: 200px;
            color:azure;
            }

            .container2 {
            max-width: 600px;
            margin: auto;
            padding: 50px;
            box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
            border-style: groove;
            border-radius: 10px;
            backdrop-filter: blur(8px);
            margin-top: 150px;
            }


            .btn {
            float: right;
            }
            .form-group {
            margin-bottom: 30px;
            }

            .btn:hover{
            background: orangered;
            }

            h1 {
            text-align: center;
            color: white;
            margin-bottom: 20px;

            }


            .form-btn a {
            color: white;
            }

            h5, a {
            color: white;
            padding-top: 15px;
            }
    </style>
</head>
<body>
    <div class="container">
        <!-- <?php
        if (isset($_POST["login"])) {
           $username = $_POST["username"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE username = '$username'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: dashboard.php");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Username does not match</div>";
            }
        }
        ?> -->
      <form action="login.php" method="post">
        <h1>Login</h1>
        <div class="form-group">
            <input type="text" placeholder="Enter Username:" name="username" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Enter Password:" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Login" name="login" class="btn btn-primary">
        </div>
        <p>Not an admin ?<a href="index.php"> Go Back</a></p>
      </form>
    </div>


</body>
</html>