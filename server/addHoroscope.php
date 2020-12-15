<?php
//$_POST skall spara i $_SEESION, RÄKNA UT HOROSKOPET OCH KOLLA OM DET ÄR TOMT I SESSION. ÄR DET INTE DET SÅ SKA IGEN HÄNDA.
try{
    
    session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"]==="POST"){

            if(isset($_POST["horoscope"])){

                $_SESSION["horoscope"] = serialize($_POST["horoscope"]);

                echo json_encode(true);
                exit;
            } else{

                throw new Exception("no horscope was found in the request body... ", 500);
            }
        
        }
        else{
            throw new Exception("no a valid request method... ", 405);
        }
    }

} catch(Exception $error){
    echo json_encode(
        array(
            "message" => $error -> getMessage(),
            "status" => $error -> getCode()
        )

    );
    exit;



}
?>