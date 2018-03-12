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

        return (!$first && !$second) ? "FIZZYBUZZ" : (
            ($first === 0) ? "FIZZ" : (
            ($second === 0) ? "BUZZ" : 
            $_number));
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
        $result = [];
        for($i = $start; $i<=$finish; $i++){
            $result[$i]=self::calculate($i, $divisor1, $divisor2)." ";
        }
        return $result;
    }
}


$result1 = FizzBiz::get_range(1, 50);
$result2 = FizzBiz::get_range(1, 50, 3, 7);
$result3 = FizzBiz::get_range(1, 50, 7, 9);
for($i = 1; $i<=50; $i++){
    echo "{$i}.\t".$result1[$i]." ----- ".$result2[$i]." ----- ".$result3[$i]."\n";
}
?>
