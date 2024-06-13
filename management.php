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
                   
                    height:500px;
                    margin:200px 0px 500px 580px;
                    padding:100px;
                    text-align:left;
                    line-height:2;
                    display:flex;
                    flex-wrap:wrap;
                }
                fieldset section{
                    flex-basis:50%;
                    margin-right:auto;
                    margin-left:0;
                    margin-bottom:0px;
                }
                input{
                    border:0;
                    border-bottom: 1px solid black;
                    padding: 10px 10px;
                    margin : 10px 0px;
                    width: 200px;
                }
                label{
                    font-size:20px;
                    line-height:3;
                }
                .btn_container{
                
                  width:700px;
                  text-align:center;
                }
                button{
                  font-size:30px;
                  padding:0px 20px;
                
                }
                button:hover{
                  background:beige;
                }
                button:active{
                  background:#fafac3;

                }
                a{
                  text-decoration:none;
                  color:black;
                }
            </style>
    </head>

    <body>
    <?php include 'header.php'; ?>
    <?php
      if(isset($_POST['id'])){
        
        $userid = $_POST['id'];
        $userpass = $_POST['pass'];
        $username1 = $_POST['name'];
        $userage = $_POST['age'];



        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'fitness';

        $current_id = $_SESSION['userid'];

        if($_SESSION['userid']!=$_POST['id']){
          $_SESSION['userid']=$_POST['id'];
        }

        $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");
        // Retrieve user data from database for the selected city
  
          $query = "UPDATE member SET id='$userid', S_pass = '$userpass', S_name = '$username1', age = '$userage' where id='$current_id'";
          mysqli_query($db, $query) or die(mysqli_error($db));
        
        

        $db->close();
      }

      

    ?>
    <h1 style = "text-align:center;">Your Info</h1>
   
     

    <fieldset>
        <section>
          <div>
            <label for = "id" >ID: </label>
          </div>

          <div>
            <label for = "password" >Password: </label>
           
          </div>

          <div>
            <label for = "name" >Name: </label>
           
          </div>

          <div>
            <label for = "age" >Age: </label>
          </div>
          <div>
            <label for = "Register" >Register: </label>
          </div>
          <div>
            <label for = "EndDate" >EndDate : </label>
          </div>
        </section>
        <section>
        <?php 
          if(isset($_SESSION['userid'])){
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $dbname = 'fitness';
                $userid = $_SESSION['userid'];
                // Create connection
                $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");

                // Retrieve user data from database for the selected city
                
                
                $query = "SELECT * FROM member LEFT OUTER JOIN membership ON member.id = membership.member_id WHERE id= '$userid'";
                $result = mysqli_query($db, $query) or die(mysqli_error($db));
                if ($result->num_rows > 0) {
                    while($row = mysqli_fetch_array($result)) {
                        echo "<label>".$row["id"] . "</label><br><label>". $row["S_pass"]. "</label><br><label>" . $row["S_name"] .
                        "</label><br><label>". $row['age']. "</label><br><label>".$row["register"] . "</label><br><label>" .$row["enddate"] ;
                    }
                } else {
                    echo "<tr><td colspan='3'>No data available</td></tr>";
                }

          }  
            ?>
        </section>    
        <div class="btn_container">
          <?php 
          if(isset($_SESSION['userid']))
          echo '<button><a href = "edit.php">Edit</a></button>';
        ?>
              </div>    
    </fieldset>
         
         
    </body>
</html>
