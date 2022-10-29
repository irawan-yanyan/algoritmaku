<?php
		echo " bubble sort \n";
		$data = array(5,4,34,3,6,2,8);
		print_r($data);
		$n = count($data);
		for($i=0;$i<$n;$i++){
			//echo $data[$i]."\n";
			for($j=$n-1;$j>$i;$j--){
				if($data[$j]< $data[$j-1]){
					$dummy = $data[$j];
					$data[$j] = $data[$j-1];
					$data[$j-1] = $dummy;
				}

			}

		}
	
		print_r($data);	
?>
