<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;
$client = new GuzzleHttp\Client {
'base_uri'=> 'https://www.hikingproject.com/data/';
};
$response = $client->request('get-trails', 'https://www.hikingproject.com/data/get-trails?lat=35.085470&lon=-106.649072&maxDistance=200&maxResults=500&key=200265121-1809e265008042f9977e435839863103');
var_dump($response);
$data = $response->getBody();
echo $data;
$data = json_decode($data, true);
$cache = $data->trails;
//count the cache
$trailArray = \SplFixedArray::fromArray($cache);
/**foreach($trailArray as $value)
	echo $value;
	$trailId = generateUuidV4();
		$trailExternalId = $value->attributes->id;
			//$trailAddress = $value->attributes->ADDRESS;
			$trailAddress = "outdoors";
			$trailImage = $value->attributes->imgMedium;
			$trailName = $value->name;
			$trailLocation = $value->attributes->location;
			$trailLat = $value->attributes->latitude;
			$trailLong = $value->attributes->longitude;
			$trailLength = $value->attributes->length;
			$trailSummary = $value->attributes->summary;
			$trailAscent = $value->ascent;
			$trailRating = $value->stars;
			try {
				$trail = new Trail($trailId, $trailExternalId, $trailAddress, $trailImage, $trailName, $trailLocation, $trailSummary, $trailAscent, $trailRating, $trailLength, $trailLat, $trailLong);
				$trail->insert($pdo);
			} catch(\TypeError $typeError) {
				//echo("Gus");
			} **/

//public static function getTrails(\SplFixedArray $data) {
//	//$pdo = connectToEncryptedMySQL("/etc/apache2/capstone-mysql/outside.ini")
//	$pdo = getConnection("/etc/apache2/capstone-mysql/outside.ini");
//	foreach($data as $feature) {
//		$trailId = generateUuidV4();
//		$trailExternalId = $feature->attributes->Id
//			$trailAddress = $feature->attributes->ADDRESS;
//			$trailImage = $feature->attributes->JPG_URL;
//			$trailName = $feature->attributes->;
//			$trailLocation = $feature->attributes->LOCATION;
//			$trailLat = $feature->attributes->Y;
//			$trailLong = $feature->attributes->X;
//			$trailLength = $feature->attributes->TYPE;
//			$trailSummary = $feature->attributes->YEAR;
//			$trailAscent =;
//			$trailRating =;
//			try {
//				$trail = new Trail($trailId, $trailExternalId, $trailAddress, $trailImage, $trailName, $trailLocation, $trailSummary, $trailAscent, $trailRating, $trailLength, $trailLat, $trailLong);
//				$trail->insert($pdo);
//			} catch(\TypeError $typeError) {
//				echo("Gus");
//			}
//
//}
// = $body->getContents();

//public function readDataJson($urlX) {
//	// http://php.net/manual/en/function.stream-context-create.php creates a stream for file input
//	$context = stream_context_create(["http" => ["ignore_errors" => true, "method" => "GET"]]);
//	try {
//		// http://php.net/manual/en/function.file-get-contents.php file-get-contents returns file in string context
//		if(($jsonData = file_get_contents($urlX, null, $context)) === false) {
//			throw(new \RuntimeException("cannot connect to city server"));
//		}
//		//decode the Json file
//		$jsonConverted = json_decode($jsonData);
//		//format
//		$jsonFeatures = $jsonConverted->features;
//		//create array from the converted Json file
//		$data = \SplFixedArray::fromArray($jsonFeatures);
//	} catch(\Exception $exception) {
//		throw(new \PDOException($exception->getMessage(), 0, $exception));
//	}
//	return ($data);
//}
//public static function getTrails(\SplFixedArray $data) {
//	//$pdo = connectToEncryptedMySQL("/etc/apache2/capstone-mysql/outside.ini")
//	$pdo = getConnection("/etc/apache2/capstone-mysql/outside.ini");
//	foreach($data as $feature) {
//		$trailId = generateUuidV4();
//		$trailExternalId = $feature->attributes->Id
//			$trailAddress = $feature->attributes->ADDRESS;
//			$trailImage = $feature->attributes->JPG_URL;
//			$trailName = $feature->attributes->;
//			$trailLocation = $feature->attributes->LOCATION;
//			$trailLat = $feature->attributes->Y;
//			$trailLong = $feature->attributes->X;
//			$trailLength = $feature->attributes->TYPE;
//			$trailSummary = $feature->attributes->YEAR;
//			$trailAscent =;
//			$trailRating =;
//			try {
//				$trail = new Trail($trailId, $trailExternalId, $trailAddress, $trailImage, $trailName, $trailLocation, $trailSummary, $trailAscent, $trailRating, $trailLength, $trailLat, $trailLong);
//				$trail->insert($pdo);
//			} catch(\TypeError $typeError) {
//				echo("Gus");
//			}
//?>


// Create a client with a base URI
$client = new GuzzleHttp\Client(['base_uri' => 'https://foo.com/api/']);
// Send a request to https://foo.com/api/test
$response = $client->request('GET', 'test');
// Send a request to https://foo.com/root
$response = $client->request('GET', '/root');
