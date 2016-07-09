<?php
function solution($A, $B) {
    // write your code in PHP5.5
    $arr1 = str_split($A);
    $arr2 = str_split($B);

   	$result = '';
   	
    	for ($i=0; $i < count($arr1) || $i < count($arr2)  ; $i++) {     		
    		if (array_key_exists($i , $arr1) ) {
    			$result .= $arr1[$i];    	
    		}    		
    		if ( array_key_exists($i , $arr2) ) {
    			$result .= $arr2[$i];    		
    		}
    	}
    return intval($result);
}


?>
