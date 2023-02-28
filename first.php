<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Page</title>
</head>

<body>

    <!-- <p>This is standard HTML</p>
    <?php
    echo 'This was generated using PHP';
    $file = $_SERVER["SCRIPT_FILENAME"];
    $user = $_SERVER["HTTP_USER_AGENT"];
    $server = $_SERVER["SERVER_SOFTWARE"];
    //print the name of this script

    echo "<p>You are running the file : <br/><b>$file<b></p> \n";

    // print the user info
    echo "<p>You are viewing the page : <br/><b>$user<b></p> \n";

    //print server info 

    echo "<p>You are running the server : <br/><b>$server<b></p> \n";

    echo "<h2> I want to handle a form</h2>";

    ?> -->
    <form action="handle_form.php" method="post">
        <fieldset>
            <legend>Enter Your Information in the form below</legend>
            <p><label>Name : <input type="text" name="name" size="20" maxlength="40"></label></p>
            <p><label>Email : <input type="text" name="email" size="20" maxlength="60"></label></p>
            <p><label for="gender">Gender </label> : <input type="radio" name="gender" value="M">Male
                <input type="radio" name="gender" value="F">Female
            </p>
            <p><label>Age:
                    <select name="age">
                        <option value="0-29">Under 30</option>
                        <option value="30-60">Between 30 and 60</option>
                        <option value="60+">Over 60 </option>
                    </select>
                </label>
            </p>
            <p><label>Comments : <textarea name="comments" rows="3" cols="40"></textarea></label></p>
        </fieldset>
        <p><input type="submit" name="submit" value="Submit My Informatation" /></p>
    </form>
</body>

</html>