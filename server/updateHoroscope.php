<?php
session_start();

require ("./horoscopecalc.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"] === "POST"){

                if(isset($_POST["day"]) && isset($_POST["month"])) {

                    if(isset($_SESSION["horoscope"])){

                        $sign = getsign($sign);
                        $_SESSION["horoscope"] = serialize($sign);
                        echo json_encode(true);
                        exit;

                    } else {
                        echo json_encode(false);
                        exit;
                    }
                    
                } else {
                    echo json_encode(false);
                    exit;

                }

        } else {
            echo json_encode(false);
            exit;
        }
    } else {
        echo json_encode(false);
        exit;
    }
?>