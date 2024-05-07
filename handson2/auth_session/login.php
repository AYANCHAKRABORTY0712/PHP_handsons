<?php
session_start();
$users=array(
    "daviddsuza"=>54321,
    "ravindraR"=>98765,
    "adelAli"=>13269
);
?>
<html>
    <head>
        <title>Login</title>
        <style>
            body {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: lightcyan;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            margin: 0;
            }
            #login {
            background-color: palegoldenrod;
            border-color: saddlebrown;
            border-radius: 5px;
            border-style: groove;
            padding: 10px;
            }
            input {
                margin: 4px;
            }
        </style>
    </head>
    <body>
        <div id="login">
        <form id="form" action="#" method="POST">
        <h1>Login</h1>
            <label>Username</label>
            <input type="text" name="username"><br>
            <label>Password</label>
            <input type="password" name="password"><br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
        if(isset($_POST["submit"]))
        {
            $username=$_POST["username"];
            $password=$_POST["password"];
            $list_of_users=array_keys($users);
            if(in_array($username,$list_of_users)){
                if($password==$users[$username])
                {
                    $_SESSION["user"]=$username;
                    $_SESSION["pass"]=$password;
                    header("Location: main.php");
                }
                else{
                    $_SESSION["user"]=$username;
                    $_SESSION["pass"]=null;
                    echo "Incorrect Password Entered!";
                }
            }
            else{
                $_SESSION["user"]=null;
                $_SESSION["pass"]=null;
                echo "User not registered!";
            }
        }
        ?>
        </div>
    </body>
</html>