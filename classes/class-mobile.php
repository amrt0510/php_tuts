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

    final class Mobile {

        public static $color = 'black';
        public $color_non = 'black';
            public $path; 
            public $prop = array(); 
        
        public function __construct()
        {       
                echo "initiating class";
        }

        public static function set_color($color = '') {
            self::$color = $color;
        }

        
        public static function get_color() {
            return  self::$color;
      
        }
        
        public function setnon_color($color_non = '') {
            $this->path = __FILE__;
            $this->color_non = $color_non;
        }

        public function getnon_color() {
            return  $this->color_non;
        }
        
        public function __call($name, $arguments) {
                    echo "you cannot access". $name. "method";
        }
        public function __toString() {
                    return  serialize($this);
        }

    }

}

$class_new = new Mobile;
$class_new2 = new Mobile;
 $class_new->setnon_color('red');
echo $class_new;
//
//
//$class_new::$color = 'yellow';
//var_dump($class_new::set_color('buffalo'));
//var_dump($class_new::get_color());
//
//
//var_dump($class_new->setnon_color('Abuffalo'));
//var_dump($class_new->getnon_color());
//
//$class_another = new Mobile;
//
//$class_none = new Mobile;
//var_dump($class_none::$color);
//$class_none->color_non = 'red';
//var_dump($class_none->color_non);
//
//var_dump($class_another->color_non);
?> 
