<?php
/**
 * FIZZ BIZZ
 * @author William M. Garrett <the@willgarrett.io>
 * @desc The "Fizz Bizz" `game` to 100
*/
namespace WillOG;

use phpDocumentor\Reflection\Types\Null_;

class FizzBiz{
    const DIV1 = 3;
    const DIV2 = 5;

    public static function calculate($_number, $_div1 = self::DIV1, $_div2 = self::DIV2){
        $three = $_number % 3;
        $five = $_number % 5;
        if($three === 0 && $five === 0){
            self::lineout("FIZZYB", $_number);
        }
        else if($three === 0){
            self::lineout("FIZZ", $_number);
        }
        else if($five === 0){
            self::lineout("BIZZ", $_number);
        }
        else{
            self::lineout($_number);
        }
    }
    public static function lineout($_string, $_num = NULL){
        echo $_string;
        if($_num != NULL){
            echo "\t\t - {$_num} ";
        }
        echo "\n";
    }
}




for($i = 1; $i<=15; $i++){
    FizzBiz::calculate($i);
}
echo "\n<EOL>\n";
?>