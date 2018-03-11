<?php
/**
 * FIZZ BIZZ
 * @author William M. Garrett <the@willgarrett.io>
 * @desc The "Fizz Bizz" `game` to 100
*/
namespace WillOG;

class FizzBiz{
    const DIV1 = 3;
    const DIV2 = 5;

    public static function calculate($_number, $_div1 = self::DIV1, $_div2 = self::DIV2){
        $first = $_number % $_div1;
        $second = $_number % $_div2;
        if($first === 0 && $second === 0){
            self::lineout("FIZZYB", $_number);
        }
        else if($first === 0){
            self::lineout("FIZZ", $_number);
        }
        else if($second === 0){
            self::lineout("BIZZ", $_number);
        }
        else{
            self::lineout($_number);
        }
    }
    public static function lineout($_string, $_num = NULL){
        if($_num != NULL){
            echo "  {$_string} ({$_num}) ";
        }
        else{
            echo " {$_string} ";
        }
    }
    public static function get_range($start, $finish, $divisor1 = self::DIV1, $divisor2 = self::DIV2){
        for($i = $start; $i<=$finish; $i++){
            self::calculate($i, $divisor1, $divisor2);
        }
    }
}


FizzBiz::get_range(1, 21);
echo "\n";
FizzBiz::get_range(1, 21, 7, 9);
/*
for($i = 1; $i<=15; $i++){
    FizzBiz::calculate($i);
}*/
echo "\n<EOL>\n";
?>