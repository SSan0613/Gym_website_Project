<!DOCTYPE html>
<head>
    <title>Edit page</title>
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
                .submit{
                    border:1px solid black;
                    padding: 0px 10px;
                    margin : 10px 0px;
                    width: 120px;
                    font-size:30px;
                }
                label{
                    font-size:20px;
                    line-height:3;
                }
                input{
                    font-size:20px;
                    line-height:3;
                    border:0;
                    border-bottom:1px solid purple;

                }
                .btn_container{
                
                  width:700px;
                  text-align:center;
                }
                button{
                  font-size:30px;
                  padding:0px 20px;
                
                }
                .submit:hover{
                  background:beige;
                }
                .submit:active{
                  background:#fafac3;

                }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>
    <h1 style = "text-align:center;">Edit Page</h1>
    <form method = "post" action = "management.php">
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
                        $id = $row['id'];
                        $pass = $row['S_pass'];
                        $name = $row['S_name'];
                        $age = $row['age'];
                        $register = $row['register'];
                        $enddate = $row['enddate'];


                        echo "<input type = 'text' name = 'id' value = $id><br>";
                        echo "<input type = 'text' name = 'pass' value = $pass><br>";
                        echo "<input type = 'text' name = 'name' value = $name><br>";
                        echo "<input type = 'text' name = 'age' value = $age><br>";
                        echo "<label>$register</label><br>";
                        echo "<label>$enddate</label><br>";
                    }
                } else {
                    echo "<tr><td colspan='3'>No data available</td></tr>";
                }

            ?>
            
        </section>    
        <div class="btn_container">
       <input class = "submit" type = "submit" value = "Submit">
              </div>    
    </fieldset>
            </form>
         
         
    </body>
</html>
