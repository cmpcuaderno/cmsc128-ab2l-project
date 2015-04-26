<?php
    foreach ($hashmap as $data){
    	foreach($data as $key => $value) {
    		echo $value->emp_no . " ";
    		echo "<a href=\"\">".$value->num_rows."</a>";
    		echo "<br>";
    	}
    }
?>