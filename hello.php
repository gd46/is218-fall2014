<?php

	// Single quotes are for literals.
	// Double quotes allow to mix variables in string.
	// Imperative Way 

	/* variable */ $class = 'is218';
	
	echo 'Hello  ' .  $class . "<br>";

	// Object Oriented Way
	
	// This is how you print the contents of an array or object
	print_r($obj);

	// This is how you instantiate an object
	$obj = new example;

	// This is how you assign a value to a public property
	$obj->name = 'steve';

	// This is how you call a public method
	$obj->printHelloWorld();

	// This is how you define a class
	class example {
		
		// This is how you define a public property
		public $name;
		
		// Object is initiated, constructor - functions
		// Functions are inside of a class
		// Methods are what you call to active functions
		
		//Constructor - automatically called when object is initiated 
		//Magic Method Constructor
		public function __construct() {		
			echo 'Hi ' . $this->name;
			echo "<br>";
		}

		public function printHelloWorld(){
			echo 'Hi ' . $this->name;
			echo "<br>";
		}
		
	}
	
?>
