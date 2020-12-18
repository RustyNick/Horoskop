<?PHP

session_start();


            //Check if horoscope exist in session
            if(isset($_SESSION["horoscope"])) {
                echo json_encode($_SESSION["horoscope"]);
                exit;
            } else{
                //eventuellt lägg ett error här istället
                echo json_encode(false);
                exit;
            }

?>