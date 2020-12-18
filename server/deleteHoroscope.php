<?PHP
session_start();

if(isset($_SERVER["REQUEST_METHOD"])) {
        
        if($_SERVER["REQUEST_METHOD"]==="POST"){

            if(isset($_SESSION["horoscope"])){

                $_SESSION = [];
                unset($_SESSION["horoscope"]);
    
                echo json_encode(true);
                exit;

            }  else {
                echo json_encode(false);
            }
        }
        else{
            echo json_encode(false);
        }
    }



?>