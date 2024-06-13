<!DOCTYPE html>
<html lang = "en">
    <head>
            <title>Fitness Center</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <style>
                *{
                    margin:0;
                    padding:0;
                    
                }
                fieldset{
                    width:400px;
                    height:200px;
                    margin:200px 750px 700px;
                    padding:100px;
                    text-align:center;
                    line-height:2;
                    
                }
                input{
                    border:0;
                border-bottom: 1px solid black;
                padding: 10px 10px;
                margin : 10px 0px;
                width: 200px;
                }
                .id{
                    margin-left:68px;
                }
                .login{
                    margin-top:150px;
                }
                .pass{
                    margin-left:0;
                }
            </style>
    </head>

    <body>
    <?php include 'header.php'; ?>
    <fieldset>
    <form method = "post" action = "login.php">
        <p class = "id">ID:
        <input type = "text" name = "user" required/>
        </p>
        <p class = "pass">Password:
        <input type = "password" name = "pass" required/>
        </p>
        <p>
            <input class = "login" type = "submit" name = "submit" value = "Login"/>
        </p>
    </form>
 


<?php 
    
    if(isset($_POST['user']) && isset($_POST['pass'])) {

        $_SESSION['username'] = $_POST['user'];
        $_SESSION['userpass'] = $_POST['pass'];

        $userid = $_POST['user'];
        $userpass = $_POST['pass'];

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'fitness';

        $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");
        // Retrieve user data from database for the selected city
        $query = "SELECT id FROM member WHERE id='$userid' and S_pass='$userpass'" ;
        $result = mysqli_query($db, $query) or die(mysqli_error($db));

       
        if ($result->num_rows > 0) {
                echo "good";
                
                $_SESSION['userid'] = $_POST['user'];
                header("Location: main.php");
            
        } else {
            echo '<script> alert("Wrong Id or Password")';
         
            //location.replace('main.php');
            echo '</script>';
        }
        

        $db->close();
    }
?>
</fieldset>
    </body>

<html>
