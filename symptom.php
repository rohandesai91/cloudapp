<?php

$query = $_GET['q'];

$str = file_get_contents('https://s3-us-west-2.amazonaws.com/datafilesym/data.json');

$json = json_decode($str, true);

foreach ($json as $key => $value) {
    if($key == "features")
    {
    	$x1 = $value;
    	foreach ($x1 as $x) {
    		$y = $x["properties"];
    		foreach ($y as $ab => $abval ) {
    			if($ab == $query && $abval > 5) {
    				echo $y["title"];
    			}
    		}
    		echo "<br>";
    	}
    }
  }



?>