<?php
    echo 'here';

    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        foreach ($_POST as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
        foreach ($_GET as $key => $value) {
            echo $key . ' : ' . $value . '<br>';
        }
    }

?>