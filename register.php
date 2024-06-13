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
                    width:700px;
                    height:700px;
                    margin:200px 550px 500px;
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
                .btn{
                  font-size:30px;
                  border : 1px solid black;
                  padding:10px;
                  margin-top:150px;
                  background: white;
                }
            </style>
    </head>

    <body>
    <?php include 'header.php'; ?>
    
    <form action = "" method="post">
            <fieldset>
          <div>
            <label for = "id" >ID: </label><br/>
            <input type = "text" name = "id" id ="id" placeholder="Your ID" required />
          </div>

          <div>
            <label for = "password" >Password: </label><br/>
            <input type = "password" name = "pass" id ="password" placeholder="Your password"  required/>
          </div>

          <div>
            <label for = "name" >Name: </label><br/>
            <input type = "text" name = "name" id ="name" placeholder="Your Name"  required/>
          </div>

          <div>
            <label for = "age" >Age: </label><br/>
            <input type = "text" name = "age" id ="age" placeholder="Your age"  required/>
          </div>

          <button class = "btn" type = "submit">Register</button>
          
          <?php 
          if(isset($_POST['id']) && isset($_POST['pass'])) {
            $userid = $_POST['id'];
            $userpass = $_POST['pass'];
            $username1 = $_POST['name'];
            $userage = $_POST['age'];


            $servername = 'localhost';
            $username = 'root';
            $password = '';
            $dbname = 'fitness';

            $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");
            // Retrieve user data from database for the selected city
            $query = "SELECT id FROM member WHERE id ='$userid'";
            $result = mysqli_query($db, $query) or die(mysqli_error($db));

          
            if ($result->num_rows == 0) {
                $query = "INSERT INTO member (id, S_pass, S_name, age) VALUES ('$userid', '$userpass', '$username1','$userage')";
                mysqli_query($db, $query) or die(mysqli_error($db));
                echo '<script>';
                echo 'alert("successfully sign up")';
              
                echo '</script>';
            } else {
                echo "<script>alert('Someone already using Id!')</script> ";
            }
            

            $db->close();
          }
          ?>
        </fieldset>
       
        </form>
    </body>
</html>
