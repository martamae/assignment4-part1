<?php
    session_start();

    //destroys data in session array and redirects to login page
    if ($_GET['action'] == 'logout') {
        $_SESSION = array();
        session_destroy();
        header("Location: http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/login.php", true);
        die();
    }

    if (session_status() == PHP_SESSION_ACTIVE) {
        if(!isset($_SESSION['username'])) {
            $_SESSION['username'] = $_POST['username'];
        }

        if ($_SESSION['username'] == NULL || $_SESSION['username'] == '') {
            echo 'A username must be entered. Click
                <a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/login.php">here</a>
                to return to the login screen.';
        }
        else {
            //first time visiting site n = 0
            if (!isset($_SESSION['n'])) {
                $_SESSION['n'] = 0;
            }
            //Increment n for every visit
            else {
                $_SESSION['n']++;
            }

            echo 'Hello ' . $_SESSION[username] . ' you have visited this page ' . $_SESSION[n] . ' times before <br>';
            echo 'Click
                <a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/content1.php?action=logout">here</a>
                 to logout <br>';
            echo '<a href="http://web.engr.oregonstate.edu/~wegnerma/CS290/Assignment4/content2.php">Content 2</a> <br>';
        }
    }
?>