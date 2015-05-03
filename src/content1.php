<?php
    $username = $_POST['username'];

    if ($username == NULL || $username == '') {
        echo 'A username must be entered. Click here to return to the login screen.';
    }
    else {
            echo 'Hello ' . $username . ' you have visited this page ' . $n . ' time before';
    }
?>