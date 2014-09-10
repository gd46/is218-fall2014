<?php

	// Single quotes are for literals.
	// Double quotes allow to mix variables in string.
	// Imperative Way 

	/* variable */ $class = 'is218';
	
	echo 'Hello World' .  $class;

	// Object Oriented Way

	$obj = new example;
	class example {
		
		// Object is initiated, constructor - functions
		// Functions are inside of a class
		// Methods are what you call to active functions
		
		//Constructor

		function __construct() {
			echo 'Test';
		}
	}
	
?>
