<html>
<head>
    <title>Leap Year Demo</title>
</head>
<body>
    <?php 
        $year = 2018;
        print "<br>";
        if($year % 4 == 0)
            {printf("Year %d is a leap year...",$year);}
        else
            {printf("Year %d is not a leap year...",$year);}    
    ?>
</body>
</html>