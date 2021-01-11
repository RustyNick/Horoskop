<?php
//$_POST skall spara i $_SEESION, RÄKNA UT HOROSKOPET OCH KOLLA OM DET ÄR TOMT I SESSION. ÄR DET INTE DET SÅ SKA IGEN HÄNDA.
try{
    session_start();
    
    require ("./horoscopecalc.php");

    if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"]==="POST"){

            if(isset($_POST["day"]) && isset($_POST["month"])){

                if(!isset($_SESSION["horoscope"])){
                    $sign = getsign($_POST["day"], $_POST["month"]);
                    $_SESSION["horoscope"] = serialize($sign);
                    echo json_encode(true);
                    exit;
                    
                } else{
                    echo json_encode(false);
                    exit;
                }

            }else {
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
    }catch(Exception $error){
    echo json_encode(
        array(
            "message" => $error -> getMessage(),
            "status" => $error -> getCode()
        )

    );exit;

}
?>