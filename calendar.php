<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendar</title>
</head>

<body>
    <form method="post" action="calendar.php">
        <?php
        //Make months array
        $months = array(
            1 => 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August',
            'September', 'October', 'November', 'December'
        );
        //Make days arrays
        $days = range(1, 31);
        $years = range(2011, 2021);
        // months array pull down
        echo '<select name="month">';
        foreach ($months as $key => $value) {
            echo "<option value=\"$key\">$value</option>\n";
        }

        echo '</select>';
        // make the days pull down meny

        echo '<select name="day">';
        foreach ($days as $value) {
            echo "<option value=\"$value\">$value</option>\n";
        }
        echo '</select>';
        //make years pull down
        echo '<select name="year">';
        foreach ($years as $value) {
            echo "<option value=\"$value\">$value</option>\n";
        }

        echo '</select>';
        ?>
    </form>
</body>

</html>