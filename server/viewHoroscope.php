<?PHP

session_start();

            if(isset($_SERVER["REQUEST_METHOD"])) {

                if($_SERVER["REQUEST_METHOD"] === "GET"){

                    if(isset($_SESSION["horoscope"])) {

                        $sign = unserialize($_SESSION["horoscope"]);
                        echo json_encode($sign);
                        exit;


                } else{
                    //eventuellt lägg ett error här istället
                    echo json_encode($_SESSION["horoscope"]);
                    exit;
                    }

                }else{
                    echo json_encode(false);
                     exit;
                    }
            }else{
                echo json_encode(false);
                 exit;
                }
?>