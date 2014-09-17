<?php

	$car_orders[0]['model'] = 'taurus';
	$car_orders[0]['engine'] = 'V6';
	$car_orders[0]['color'] = 'blue';


	$car_orders[1]['model'] = 'mustang';
	$car_orders[1]['engine'] = 'V6';
	$car_orders[1]['color'] = 'red';
	
	$car_orders[2]['model'] = 'focus';
	$car_orders[2]['engine'] = 'V6';
	$car_orders[2]['color'] = 'green';
	

	foreach($car_orders as $car_order){
		
		print_r($car_order);

	}
	

	
	// Abstract class not meant to be used on their own
	// their meant to be extended and additional methods and attributes
	// added 
	abstract class car {

		protected $engine;
		protected $wheels = 4;
		protected $doors;
		protected $length;
		protected $weight;
		protected $color;

		public function setColor($color){
			$this->color = $color;
		}
		// The first engine in between () is for type hinting	
		public function setEngine(engine $engine){
			$this->engine = $engine;
		}
	}

	abstract class ford extends car {

	
	}

	class taurus extends ford {
	
		public function __construct() {
			
			$this->doors = '4';
			$this->length = '2000cm';
			$this->weight = '1700kg';
			$engine = new engine;

		}
	}

	class engine {}

?>
