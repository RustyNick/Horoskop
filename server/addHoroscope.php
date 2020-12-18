<?php
//$_POST skall spara i $_SEESION, RÄKNA UT HOROSKOPET OCH KOLLA OM DET ÄR TOMT I SESSION. ÄR DET INTE DET SÅ SKA IGEN HÄNDA.
try{
    session_start();
    if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"]==="POST"){

            if(!isset($_SESSION["horoscope"])){
            
                if(isset($_POST["day"]) && isset($_POST["month"])) {
                    
                    $day = $_POST["day"];
                    $month = $_POST["month"];

                        if (($month == 1 && $day > 20)||($month==2 && $day < 20)){
                            $_SESSION["horoscope"] = "Aquarius";
                        }
                        else if(($month == 2 && $day>18)||$month == 3 &&$day<21){
                            $_SESSION["horoscope"] = "Pisces";
                        }
                        else if(($month == 3 && $day>20)||$month == 4 &&$day<21){
                            $_SESSION["horoscope"] = "Aries";
                        }
                        else if(($month == 4 && $day>20)||$month ==5 &&$day<22){
                            $_SESSION["horoscope"] = "Taurus";
                        }
                        else if(($month == 5 && $day>21)||$month == 6 &&$day<22){
                            $_SESSION["horoscope"] = "Gemini";
                        }
                        else if(($month ==6 && $day>21)||$month == 7 &&$day<24){
                            $_SESSION["horoscope"] = "Cancer";
                        }
                        else if(($month == 7 && $day>23)||$month == 8 &&$day<24){
                            $_SESSION["horoscope"] = "Leo";
                        } 
                        else if(($month == 8 && $day>23)||$month == 9 &&$day<24){
                            $_SESSION["horoscope"] = "Virgo";
                        }
                        else if(($month == 9 && $day>23)||$month == 10 &&$day<24){
                            $_SESSION["horoscope"] = "Libra";
                        } 
                        else if(($month == 10 && $day>23)||$month == 11 &&$day<23){
                            $_SESSION["horoscope"] = "Scorpio";
                        }
                        else if(($month == 11 && $day>22)||$month == 12 &&$day<23){
                            $_SESSION["horoscope"] = "Sagittarius";
                        }
                        else if(($month == 12 && $day>22)||$month == 1 &&$day<21){
                            $_SESSION["horoscope"] = "capricorn";
                        } 

                    } else{ 
                        echo json_encode(false);
                        exit;
                    }
                    echo json_encode(true);
                    exit;
            } else {
                throw new Exception("there is a Zodiac saved", 500);
            }

            } else {
                echo json_encode(false);
                exit;
            }
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