<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of class-mobile
 *
 * @author Mohit
 */
if (!class_exists('Mobile')) {

    class Mobile {

        public static $color = 'black';
        

        public static function apply_color($color='') {
            $cur_color = self::$color;
            //
        
            $new_color = $cur_color.'-amrt';
            return $new_color;
            
        }

//put your code here
    }

}

//creating new instance 
//$abc = new Mobile;
//
//
//$abc->color = 'yellow';
//
//echo $abc->color;
//
////creating another instance 
//$abc2 = new Mobile ;
//
//echo $abc2->color;
//

//calling properties in static way
$color = Mobile::apply_color();
var_dump($color);


?>
 