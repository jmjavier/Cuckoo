<?php

	require_once('config.php');
	require_once('codebird.php');
	require_once('weather.php');

	$lastupdate = file_get_contents('last_update.txt');

	$timeOfDay = timeOfDay($weather_underground_key, $weather_underground_location);

	if ($timeOfDay !== $lastupdate){

		\Codebird\Codebird::setConsumerKey($consumer_key, $consumer_secret);
		$cb = \Codebird\Codebird::getInstance();
		$cb->setToken($access_token, $access_token_secret);

		$path = $timeOfDay.'.png';
		$data = file_get_contents($path);
		$base64 = base64_encode($data);


		$args = array(
			'image' => $base64
		);

		$reply = $cb->account_updateProfileImage($args);


		$fh = fopen('last_update.txt','w');
		fwrite($fh, $timeOfDay);
		fclose($fh);
	}

?>

