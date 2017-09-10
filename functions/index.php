<?php

/**
 * A sample function for pass by reference class
 * @param string $str
 * @return type
 */
function append_str(&$str) {
    $str = $str . "-amrt";
    return strlen($str);
}

$mystr = "hello";
$rt = append_str($mystr);
var_dump($rt);
echo $mystr;







$arrr = array(
    array('class' => '1', 'name' => 'amritansh'),
    array('class' => '2', 'name' => 'neha'),
    array('class' => '3', 'name' => 'John')
);


$a = array("red", "green");
$b = array("blue", "yellow");

$ultimate_array = array_merge($a, $b);
print_r($ultimate_array);
exit;

$rt = array_push($a, "blue", "yellow");
print_r($a);
exit;




//print_r(abc(8));
print_r(abc($arrr, 2));




if (!function_exists('abc')) {

    function abc($arrr, $arg2 = 1) {

        $output = array();
        if (is_array($arrr) && count($arrr) > 0) {
            $z = 1;
            foreach ($arrr as $subarr) {
                $output[] = $subarr['name'];
                if ($z == $arg2) {
                    break;
                } $z++;
            }
        }

        return $output;
    }

}