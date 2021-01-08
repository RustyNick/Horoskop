<?php
  
 function getsign($sign) {

    $day = $_POST["day"];
    $month = $_POST["month"];

                        if (($month == 1 && $day > 20)||($month==2 && $day < 20)){
                            $_SESSION["horoscope"] = "Aquarius";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month == 2 && $day>18)||$month == 3 &&$day<21){
                            $_SESSION["horoscope"] = "Pisces";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month == 3 && $day>20)||$month == 4 &&$day<21){
                            $_SESSION["horoscope"] = "Aries";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month == 4 && $day>20)||$month ==5 &&$day<22){
                            $_SESSION["horoscope"] = "Taurus";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month == 5 && $day>21)||$month == 6 &&$day<22){
                            $_SESSION["horoscope"] = "Gemini";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month ==6 && $day>21)||$month == 7 &&$day<24){
                            $_SESSION["horoscope"] = "Cancer";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month == 7 && $day>23)||$month == 8 &&$day<24){
                            $_SESSION["horoscope"] = "Leo";
                            return $_SESSION["horoscope"];
                        } 
                        else if(($month == 8 && $day>23)||$month == 9 &&$day<24){
                            $_SESSION["horoscope"] = "Virgo";
                            return $_SESSION["horoscope"];
                        }
                        else if(($month == 9 && $day>23)||$month == 10 &&$day<24){
                            $_SESSION["horoscope"] = "Libra";
                            return $_SESSION["horoscope"];
                        } 
                        else if(($month == 10 && $day>23)||$month == 11 &&$day<23){
                            $_SESSION["horoscope"] = "Scorpio";
                            return $_SESSION["horoscope"];
                           
                        }
                        else if(($month == 11 && $day>22)||$month == 12 &&$day<23){
                            $_SESSION["horoscope"] = "Sagittarius";
                            return $_SESSION["horoscope"];
                            
                        }
                        else if(($month == 12 && $day>22)||$month == 1 &&$day<21){
                            $_SESSION["horoscope"] = "capricorn";
                            return $_SESSION["horoscope"];
                        }

                $sign = ($_SESSION["horoscope"]);
                return $sign;
 }

?>