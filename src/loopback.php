<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $POSTarr = $_POST;

            if ($POSTarr == NULL) {
                echo '{"Type":"POST", "parameters": null}';
            }
            else {
                echo '{"Type":"POST", "parameters":' . json_encode($POSTarr);
            }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $GETarr = $_GET;

            if ($GETarr == NULL) {
                echo '{"Type":"GET", "parameters": null}';
            }
            else {
                echo '{"Type":"GET", "parameters":' . json_encode($GETarr);
            }
    }

?>