<?php
    $rawData = $_POST['imgBase64'];		//get raw image
$filteredData = explode(',', $rawData);		//filter data via comma
$unencoded = base64_decode($filteredData[1]);	//decode to base64 string
//Create the image 
$fp = fopen('face.png', 'w');
fwrite($fp, $unencoded);	//write image stream
fclose($fp);				//close stream
?>