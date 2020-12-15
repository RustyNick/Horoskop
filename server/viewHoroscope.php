<?PHP
//BEGÄRA GET FRÅN SESSION OM ETT HOROSCOPPE FINNS SPARAT. FINNS DET SKRIV UT, FINNS DET INTE DET SKRIV INGETING

try{

    require("./updateHoroscope.php");

    testsomething();

    session_start();

    if(isset($_SERVER["REQUEST_METHOD"])) {

        if($_SERVER["REQUEST_METHOD"] ==="GET"){

            //Check if horoscope exist in session
            if(isset($_SESSION["horoscope"])){

                echo json_encode(unserialize($_SESSION["horoscope"]));
                exit;
            } else{
                //eventuellt lägg ett error här istället
                echo json_encode(unserialize("No horoscope is saved..."));
                exit;

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

    );exit;



}

?>