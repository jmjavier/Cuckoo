<?php
	//the timezone that will be followed
	date_default_timezone_set('America/New_York');

	//create an application with read and write access on http://dev.twitter.com
	$consumer_key = '';
	$consumer_secret = '';
	$access_token = '';
	$access_token_secret = '';

	//sign up for a weather underground api key http://www.wunderground.com/weather/api
	$weather_underground_key = '';

	/*
		Specify the location used for weather.
		Can be the following formats:
		1. US state/city ex. 'CA/San_Francisco'
		2. US zipcode ex. '60290'
		3. country/city ex. 'Australia/Sydney'
	*/
	$weather_underground_location = 'NY/New_York';
?>