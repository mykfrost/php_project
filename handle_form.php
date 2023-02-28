<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Form Feedback</title>
</head>

<body>
    <?php
    //create a shorthand for the form data
    $name = $_REQUEST['name'];
    $email =  $_REQUEST['email'];
    $comments = $_REQUEST['comments'];
    /*
    $_REQUEST['age']
       $_REQUEST['gender']
          $_REQUEST['submit']
    */
    // if (isset($_REQUEST['gender'])) {
    //     $gender = $_REQUEST['gender'];
    // } else {
    //     $gender = null;
    // }

    //Begin Validation

    if (!empty($_REQUEST['name'])) {
        $name = $_REQUEST['name'];
    } else {
        $name = null;
        echo '<p class="error"> You forgot to enter your name!</p>';
    }

    if (!empty($_REQUEST['email'])) {
        $email = $_REQUEST['email'];
    } else {
        $email = null;
        echo '<p class="error"> You forgot to enter your email!</p>';
    }

    if (!empty($_REQUEST['comments'])) {
        $comments = $_REQUEST['comments'];
    } else {
        $comments = null;
        echo '<p class="error"> You forgot to enter comments!</p>';
    }
    // validate the gender
    echo "<p> Thank you, <b>$name</b> , for the following comments : <br/>
    <tt>$comments</tt></p>
    <p>We will reply to you at <i>$email</i>.</p> \n ";
    //Print a message based upon the gender value
    if (isset($_REQUEST['gender'])) {
        $gender = $_REQUEST['gender'];
        if ($gender == 'M') {
            echo '<p><b>Good day , Sir</b></p>';
        } else if ($gender == 'F') {
            echo '<p><b>Good Day , Madam</b></p>';
        } else {
            $gender = NULL;
            echo '<p class="error"><b>Gender should be M or F!</b></p>';
        }
    } else {
        $gender = NULL;
        echo '<p class="error"><b>You forgot to select your gender!</b></p>';
    }
    //if everything is ok End of Validation conditions
    if ($name && $email && $gender && $comments) {
        echo "<p>Thank you <b>$name</b> , for the following comments : <br/> :
           <tt>$comments</tt></p>
           <p>We will reply to you at <i>$email</i></p> \n";
    } else {
        //Missing form value
        echo '<p class="error"> Please go back and fill the form again!</p>';
    }

    ?>
</body>

</html>