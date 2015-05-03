<?php
    $username = $_POST['username'];

    if ($username == NULL || $username == '') {
        echo 'A username must be entered. Click
        <a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/login.php">here</a>
         to return to the login screen.';
    }
    else {
            echo 'Hello ' . $username . ' you have visited this page ' . $n . ' times before <br>';
            echo 'Click
            <a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/login.php">here</a>
             to logout <br>';
    }
?>