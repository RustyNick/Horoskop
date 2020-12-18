<?php
 
    if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"]==="POST"){
            
                if(!isset($_POST["day"]) && isset($_POST["month"])) {
                    $_SESSION["horoscope"] = serialize($_POST["horoscope"]);

                    echo json_encode(true);
                } else {
                    echo json_encode(false);
                    /* throw new Exception("no horscope was found in the request body...", 500); */
                }

            
        
        } else {
            echo json_encode(false);
            exit;
        }
    }
?>

