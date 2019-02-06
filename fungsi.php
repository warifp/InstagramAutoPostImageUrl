<?php
set_time_limit(0);
date_default_timezone_set('UTC');
require __DIR__.'/vendor/autoload.php';
require 'config.php';

function download_img_from_url($randImageURL , $photopath) {
	
		$fileName = "$photopath";
		$fileUrl  = "$randImageURL";
		$ch = curl_init($fileUrl); // set the url to open and download
		$fp = fopen($fileName, 'wb'); // open the local file pointer to save downloaded image
		curl_setopt($ch, CURLOPT_FILE, $fp); // tell curl to save to the file pointer
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // tell curl to follow redirects
		curl_exec($ch); // fetch the image and save it with curl
		curl_close($ch); // close curl
		fclose($fp); // close the local file pointer
	
}

for ($x=1; $x<=$jumlah; $x++) {
$randNomorImageURL   = rand(1, 5);
$randImageURL = randImageURL($randNomorImageURL);
download_img_from_url($randImageURL, $photoFilename);

$ig = new \InstagramAPI\Instagram($debug, $truncatedDebug);
try {
    $ig->login($username, $password);
} catch (\Exception $e) {
    echo "\n\e[41mSomething went wrong: ".$e->getMessage()."\e[0m\n";
    exit(0);
}
try {
   
$randNomor   = rand(1, 5);
$randDescription = randCaption($randNomor);
$metadata = ['caption' => "$randDescription"];
$ig->timeline->uploadPhoto($photoFilename, $metadata);
 echo "\n\e[42mUploaded!\e[0m\n\e[44mFrom\e[0m : \e[34m$randImageURL\e[0m\n\e[105mCaptioN\e[0m : \e[95m$randDescription\e[0m\n";
   
} catch (\Exception $e) {
    echo "\n\e[41mSomething went wrong: ".$e->getMessage()."\e[0m\n";
}
}

?>