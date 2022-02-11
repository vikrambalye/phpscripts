<?php

class cls1{
 private $name;
 private $age;
 private $p= 10;
 
 function __construct(){
 	echo 'this is from construct';
 }

 private function set_data($p1, $p2){ 
	private $p;
 	$this->name = $p1;
    $this->age = $p2;
    echo '<br>set<br>';
    echo $this->get_data();
 }
 
 private function get_data(){
 	echo $this->p;
 	echo '<br>get<br>';
 	echo $this->name.'---'. $this->age;
 }
 
 


}

$obj = new cls1();
$obj->set_data('aaa', 10);