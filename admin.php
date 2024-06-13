<!DOCTYPE html>
<head>
    <title>Admin page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <style>
        section{
            text-align:center;
        }
        table{
            margin-left:auto;
            margin-right:auto;
            border: 1px solid #bcbcbc;
            width:700px;
        }
        tr{
            height:50px;
        }
        .title{
            height:80px;
        }
    </style>
</head>


<body>
    <?php include 'header.php'; ?>
    <section>
    <?php
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'fitness';

        // Create connection
        $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");

        // Retrieve user data from database for the selected city
        $query = "SELECT S_Name, id,age,register,enddate FROM member LEFT OUTER JOIN membership ON member.id = membership.member_id";
        $result = mysqli_query($db, $query) or die(mysqli_error($db));

        echo "<h3>User Data</h3>";
        echo "<table border='1'>";
        echo "<tr class = 'title'><th>S_name</th><th>age</th><th>id</th><th>RegisterDate</th><th>EndDate</th></tr>";
        if ($result->num_rows > 0) {
            while($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . $row["S_Name"] . "</td><td>" . $row["age"] . "</td><td>" . $row["id"] . "</td><td>" . $row["register"] . "</td><td>" . $row["enddate"]."</td></tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No data available</td></tr>";
        }
        echo "</table>";
    ?>
    </section>

</body>

</html>