<?php

require "twitteroauth/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;

$consumerkey = "phK4kvl20fAJ3QuJOU5lQRGma";

$consumersecret = "Gv8LUiYrOYYJ357QpIXd0IcdMJx3C3cUEdzRdm0CxBGnllfqqr";

$accesstoken = "811211509040893952-yhbg63OSoi6nMORHrAB0kUaQTlchGBE";

$accesstokensecret = "ZTWvOTrHuXDFF8PxGxx3109lsnJ3ufnGRN3pnVWr5Mryj";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$content = $connection->get("account/verify_credentials");

 // $statues = $connection->post("statuses/update", ["status" => "hello world, this came from my twitter app"]);

$statuses = $connection->get("statuses/home_timeline", ["count" => 25, "exclude_replies" => true]);

foreach($statuses as $tweet){
	
	if($tweet->favorite_count >= 3){
		
		$status = $connection->get("statuses/oembed", ["id" => $tweet->id]);
		echo $status->html;
		
	}
	
}

?>