<?php
session_start();
?>

<!DOCTYPE html>
<html lang = "en">
    <head>
            <title>Fitness Center</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <style>
                *{
                    padding:0;
                    margin:0;
                    font-family:Arial, Helvetica, sans-serif;
                }
                header{
                    display:flex;
                    border-bottom:1px solid black;
                }
       
                nav {
                    display:flex;
                    width:150%;
                }
                header a{
                    padding-right: 50px;
                    padding-top:5px;
                    text-decoration: none;
                    color: black;
                    font-size:25px;
                }
                header a:hover{
                    text-decoration: underline;
                    color: blue;
                }
                nav + div{
                    padding-left: 50px;
                    width:20%;
                    display:flex;
                    
                }
                .log_nav>p{
                    
                    margin-right :20px;
                }
                p{
                    font-size:20px;
                }
            </style>
    </head>

    <header>
                <nav>
                    <a href= "main.php"><img src = "https://dummyimage.com/100x50/000/fff&text=Fitness"></a>
                    <a href = "purchase.php">Purchase</a>
                    <a href = "management.php">Profile</a>
                   
                    <?php
                    if( isset($_SESSION['userid']) && $_SESSION['userid']=='admin'){
                                echo "<a href = 'admin.php'>Admin page</a>";
                            }
                    ?>
                </nav>
                <div class = "log_nav">
                    <?php
                        if(isset($_SESSION['userid'])){
                            $name = $_SESSION['userid'];
                            echo '<p> Hi, ';
                            echo $name;
                            echo '</p>';
                            echo '<a href = "logout.php">logout</a>';              
                        }
                        else{
                            echo '<a href = "login.php">login</a>';
                            echo '<a href = "register.php">register</a>';
                        }
                    ?>
                    
                </div>
    </header>
</html>
