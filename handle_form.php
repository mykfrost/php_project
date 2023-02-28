<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    echo "<p> Thank you, <b>$name</b> , for the following comments : <br/>
    <tt>$comments</tt></p>
    <p>We will reply to you at <i>$email</i>.</p> \n";
    ?>
</body>

</html>