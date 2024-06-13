

<!DOCTYPE html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <style>
            *{
                margin: 0px;
                padding:0px;
            }
               fieldset{
                    text-align:center;
                  
                    display:grid;
                    grid-template-columns: auto auto;
                    padding:50px;
                }
                .product-card{
                    border:1px solid black;   
                    margin: 20px 50px 20px 50px;
                }
                .product-card p{
                    line-height:1.2;
                }
                .originalprice{
                    text-decoration:line-through;
                }
                .sellingprice{
                    color:red;
                }
                form {
                    text-align:center;
                }
                form input{
                    font-size:30px;
                    padding:10px;
                    background:skyblue;
                }
                .month{
                    font-size:20px;
                }
                
        </style>
    </head>


    <body>
        <script>
            var year = mew Date();

        </script>
        <?php include 'header.php'; ?>
        <h2 style ='text-align:center;';>Membership Purchase</h2> 
      
       
                
            <form action = "" method="post">
            <fieldset>
                <div class = "product-card">
                   
                    <h1>3 Month</h1>
                    <p class = "originalprice"> original price: 150,000</p>
                    <p class = "sellingprice"> selling price  : 100,000</p>   
                    <input class = month type = "radio" name = "membership" value = "3" required/>3 Month
                </div>
                <div class = "product-card">
                   
                <h1>6 Month</h1>
                    <p class = "originalprice"> original price: 300,000</p>
                    <p class = "sellingprice"> selling price  : 150,000</p>   
                    <input  class = month type = "radio" name = "membership" value = "6" required/>6 Month

                </div>
                <div class = "product-card">
                 
                <h1>9 Month</h1>
                    <p class = "originalprice"> original price: 450,000</p>
                    <p class = "sellingprice"> selling price  : 200,000</p>      
                    <input  class = month type = "radio" name = "membership" value = "9" required/>9 Month

                </div>

                <div class = "product-card">
                <h1>12 Month</h1>
                    <p class = "originalprice"> original price: 600,000</p>
                    <p class = "sellingprice"> selling price  : 300,000</p>   
                    <input  class = month type = "radio" name = "membership" value = "12" required/>12 Month

                </div>
            </fieldset>
                <input type = "submit" name = "submit" value = "Purchase"/>

                <?php 
                    if(!isset($_SESSION['userid'])){
                        echo '<script>';
                        echo 'alert("You must login to purchase membership")';
                        //location.replace('main.php');
                        echo '</script>';
                    }
                    //echo $_SESSION['userid'];
                    if(isset($_POST['membership']) && isset($_SESSION['userid'])) {
                      
                        $userid = $_SESSION['userid'];
                        
                        $membership = $_POST['membership'];
                        $year1 = date("Y");
                        $month1 = date("m");
                        $day1 = date("d");

                        $servername = 'localhost';
                        $username = 'root';
                        $password = '';
                        $dbname = 'fitness';

                        $start = date("Y-m-d");
                        $month1 = ($month1+$_POST['membership']);
                        if($month1/12>1){
                            $year1+=1;
                            $month1=$month1%12;
                        }
                        $end = $year1.'-'.$month1.'-'.$day1;

                        $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");
                        // Retrieve user data from database for the selected city
                        $query = "SELECT member_id FROM membership WHERE member_id ='$userid'";
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));

                    
                        if ($result->num_rows == 0) {
                            $query = "INSERT INTO membership (member_id, register, enddate, member_month) VALUES ('$userid', '$start', '$end','$membership')";
                            mysqli_query($db, $query) or die(mysqli_error($db));
                            echo '<script>';
                            echo 'alert("Success!!")';
                            echo '</script>';
                        } else {
                            echo '<script>';
                            echo 'alert("You already have membership!")';
                            echo '</script>';
                        }
                        

                        $db->close();
                    }
                    else{

                    }
                ?>
            </form>
    </body>
</html>

