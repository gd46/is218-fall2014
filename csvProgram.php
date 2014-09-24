<?php

	class file_handling{
	
		public $file;
		public $hasColumnheadings;
		
		
		
		public function readCSVfile($file, $hasColumnheadings){
			$hasColumnheadings = TRUE;
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
			print_r($records);
		}
		
	}
	
	$test = new file_handling();
	$test->readCSVfile("test.csv",TRUE);
	
	

	
	/*$first_row = TRUE;
	ini_set('auto_detect_line_endings',TRUE);
	if(($handle = fopen("test.csv", "r")) !== FALSE){
		while(($row = fgetcsv($handle, 1000, ",")) !== FALSE){
			if($first_row == TRUE){
				$column_heading = $row;
				$first_row = FALSE;
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
	}*/
	
?>