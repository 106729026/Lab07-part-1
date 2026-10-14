<!doctype html>
<html lang="en">
<head>

</head>

<body>

<?php

    $days_of_the_week = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    echo "<p>The days of the week in English are: <p> ";
    echo $days_of_the_week[0] . "," . $days_of_the_week[1] . "," . $days_of_the_week[2] . "," . $days_of_the_week[3] . "," . $days_of_the_week[4] . "," . $days_of_the_week[5] . "," . $days_of_the_week[6];

    $days_of_the_week[0] = "Dimanche";
    $days_of_the_week[1] = "Lundi";
    $days_of_the_week[2] = "Mardi";
    $days_of_the_week[3] = "Mercredi";
    $days_of_the_week[4] = "Jeudi";
    $days_of_the_week[5] = "Vendredi";
    $days_of_the_week[6] = "Samedi";
    
    echo "<p>The days of the week in French are: <p>";
    echo $days_of_the_week[0] . "," . $days_of_the_week[1] . "," . $days_of_the_week[2] . "," . $days_of_the_week[3] . "," . $days_of_the_week[4] . "," . $days_of_the_week[5] . "," . $days_of_the_week[6];
    
?>

</body>

</html>