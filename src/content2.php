<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        echo 'A username must be entered. Click
                <a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/login.php">here</a>
                to return to the login screen.';
    }
    else {
        echo '<a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/content1.php">Content 1</a> <br>';
    }
?>