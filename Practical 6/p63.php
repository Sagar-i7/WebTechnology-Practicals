<html>
<head>
    <title>City Data</title>
</head>
<body>
    <table border="6" align="center">
        <tr>
            <th>City Name</th>
            <th>Area</th>
            <th>Population</th>
        </tr>
        <?php
        
            $conn = mysql_connect("localhost","root","");
            if (!$conn) {
                die('<center><br>error in connection'.mysql_error().'</center>');
            }

            if (mysql_query("CREATE DATABASE country",$conn)) {
                print "<center><br>Database Created...</center>";
            } else {
                print "<center><br>Error creating database:".mysql_error()."</center>";
            }
            
            mysql_select_db("country",$conn);

            $query = "CREATE TABLE city(cityname VARCHAR(20),area VARCHAR(20),population VARCHAR(20))";
            if (mysql_query($query,$conn)) {
                print "<center><br>Table Created...</center>";
            } else {
                print "<center><br>Error creating table :".mysql_error()."</center>";
            }
            
            $query = "INSERT INTO city VALUES('$_POST[Name]','$_POST[Area]','$_POST[Population]')";
            mysql_query($query,$conn);
            
            print "<center><br>Data Inserted...</center><hr>";

            $result = mysql_query("SELECT * FROM city");
            while ($row = mysql_fetch_array($result)) {
                print "<tr>";
                print "<td>";
                echo $row['cityname'];
                print "</td>";
                print "<td>";
                echo $row['area'];
                print "</td>";
                print "<td>";
                echo $row['population'];
                print "</td>";
                print "</tr>";
            }
            mysql_close($conn);
        ?>
    </table>
</body>
</html>    