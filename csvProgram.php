<?php

	class file_handling{
	
		private static $file;
		private static $hasColumnheadings;
		
		
		/* Creating a static function allows this function to be called without 
		   creating an object. 
		*/
		public static function readCSVfile($file, $hasColumnheadings){
			
			ini_set('auto_detect_line_endings', TRUE);
			
			if(($handle = fopen($file, "r")) !== FALSE){
				while(($row = fgetcsv($handle, 1000, ",")) !== FALSE){
					if($hasColumnheadings){
						$column_heading = $row;
						$hasColumnheadings = FALSE;
					}
					else{
						$record = array_combine($column_heading, $row);
						$records[] = $record;
					}
				}
				fclose($handle);
			}
			//print_r($records);
			foreach($records as $record){
				foreach($record as $key => $value){
					echo $key . ': ' . $value . "<br> \n";
				}
				echo '<hr>';
			}
		}
		
	}
	
	// This is how you would run this function without static methods.
	//$test = new file_handling();
	//$test->readCSVfile("test.csv",TRUE);
	
	// Running the readCSVfile method without creating an object.
	file_handling::readCSVfile("test.csv", TRUE);
	
	
?>