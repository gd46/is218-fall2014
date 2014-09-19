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
	
	if(empty($_GET))
	{
		foreach($car_orders as $car_order)
			{
				$i++;
				$car_order_num = $i - 1;
				
				/*foreach($car_order as $key => $value)
				 {
					echo $key . ': '.$value . "<br>\n";		
			 	 }	
			 	 */					                
			 echo '<a href=' . '"http://web.njit.edu/~gd46/is218/cars.php?car_order=' . $car_order_num . '"' . '>Car Order ' .  $i . '</a>';
			 echo '</p>';										        
			}
	}

	
	$car_order = $car_orders[$_GET['car_order']];
	
	foreach($car_order as $key => $value){
		echo $key . ': '.$value . "<br>\n";
	}
	
	
	/*foreach($car_orders as $car_order){

		foreach($car_order as $key => $value){
		
			echo $key . ': ' .$value . "\n";

		}

		echo '<br>';

	}
	*/

	
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
