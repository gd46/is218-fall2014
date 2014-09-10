<?php

	// Single quotes are for literals.
	// Double quotes allow to mix variables in string.
	// Imperative Way 

	/* variable */ $class = 'is218';
	
	echo 'Hello World' .  $class;

	// Object Oriented Way
	
	$obj->name = 'steve';

	//print_r($obj);

	$obj = new example;
	$obj2 = new example('giuseppe');
	$obj->printHelloWorld();

	class example {

		public $name;
		
		// Object is initiated, constructor - functions
		// Functions are inside of a class
		// Methods are what you call to active functions
		
		//Constructor - automatically called when object is initiated 

		function __construct() {		
			echo 'Hi ' . $this->name;
		}

		function printHelloWorld(){
			echo 'Hi ' . $this->name;
		}
	}
	
?>
