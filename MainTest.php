

<?php
$curl = curl_init();	//initialize curl request

$contents = file_get_contents("face.png");		//read content of image

//construct curl api
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.projectoxford.ai/emotion/v1.0/recognize",		
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "content-type: application/octet-stream",
    "ocp-apim-subscription-key: fe330cxcbfb132e4a567ca9f29580fdaf5a0b9gjmhj",
    "postman-token: 05896e61-01b6-28cf-c76c-f36551d647f4"
  ),
));

//Add post data
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $contents);

//Remove sercure SSL
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);


//execute curl
$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	$json_a = json_decode($response, true);		//decode json
	

  //assign decoded json to variables
  $vanger = $json_a[0]["scores"]["anger"]*1000;
  $vcontempt = $json_a[0]["scores"]["contempt"]*1000;
  $vdisgust = $json_a[0]["scores"]["disgust"]*1000;
  $vfear = $json_a[0]["scores"]["fear"]*1000;
  $vhappiness = $json_a[0]["scores"]["happiness"]*1000;
  $vneutral = $json_a[0]["scores"]["neutral"]*1000;
  $vsadness = $json_a[0]["scores"]["sadness"]*1000;
  $vsurprise = $json_a[0]["scores"]["surprise"]*1000;
  
  $score = array($vanger,$vcontempt,$vdisgust,$vfear,
  					$vhappiness,$vneutral,$vsadness,$vsurprise);	//create array values
					
  $scoreKey = array("anger","contempt","disgust","fear",
  					"happiness","neutral","sadness","surprise");	//create array keys
  $scores = array_combine($scoreKey,$score);			//combine keys and values
arsort($scores);	//sort array ascending order

  echo("You are feeling " . key($scores) . " try listening to this music");
var_dump($scores);
$keyScore = key($scores);
  var_dump($keyScore);
  
  
$curl = curl_init();		//initialize curl for spotify api

//curl request spotify
curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.spotify.com/v1/search?query=$keyScore&offset=0&limit=1&type=track&=market%3DPH",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "postman-token: e3dbf85b-7b93-5624-8aa3-06682631e321"
  ),
));

//Remove secure SSL 
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	
	$response = json_decode($response, true);
  $urlSpotify = $response["tracks"]["items"][0]["preview_url"];
  
  var_dump($response);
  echo '<script>window.open("' .$urlSpotify. '", "_blank");</script>';	//open suggested music in new tab 
}



}
?>