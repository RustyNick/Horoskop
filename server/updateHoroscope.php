<?php
session_start();

require ("./horoscopecalc.php");


    if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"] === "POST"){

                if(isset($_POST["day"]) && isset($_POST["month"])) {

                    if(isset($_SESSION["horoscope"])){

                        $day = $_POST["day"];
                        $month = $_POST["month"];
                        
                        $sign = getsign($day,$month);
                        $_SESSION["horoscope"] = serialize($sign);
                        echo json_encode(true);
                        exit;

                        /* $Asign =getsign($sign);
                        $_SESSION["horoscope"] = serialize($Asign);
                        echo json_encode(true);
                        exit; */

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