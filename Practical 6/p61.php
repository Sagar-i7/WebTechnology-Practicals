<html>
<head>
    <title>Employee List</title>
</head>
<body>
    <table border="6" align="center">
        <tr>
            <th>Emp Id</th>
            <th>Job Title</th>
            <th>Years</th>
        </tr>
        <?php
            $empID = $_POST['empID'];
            $jobTitle = $_POST['jobTitle'];
            $array = $_POST['yrsExp'];
            $array = array_map(create_function('$value','return (int)$value;'),$array);
            $arr = array();
            for ($i=0; $i < count($empID); $i++) { 
                $arr[$i]['id']=$empID[$i];
                $arr[$i]['title']=$jobTitle[$i];
                $arr[$i]['years']=$array[$i];
            }
            $result = sortTwoDArray($arr,'years');
            function sortTwoDArray($arr,$arrKey,$sortOrder=SORT_ASC)
            {
                foreach ($arr as $key => $row) {
                    $key_arr[$key] = $row[$arrKey];
                }
                array_multisort($key_arr,$sortOrder,$arr);
                return $arr;
            }

            for ($i=0; $i < count($empID); $i++) { 
                print "<tr>";
                print "<td>";
                echo $result[$i]['id'];
                print "</td>";
                print "<td>";
                echo $result[$i]['title'];
                print "</td>";
                print "<td>";
                echo $result[$i]['years'];
                print "</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>