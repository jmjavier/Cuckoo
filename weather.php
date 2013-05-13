<?php

	function computeTime($hour, $minutes){
		return $hour * 60 + $minutes;
	}

	function timeOfDay($weather_underground_key, $weather_underground_location){

		$q = 'http://api.wunderground.com/api/'.$weather_underground_key.'/astronomy/q/'.$weather_underground_location.'.json';

		$resp = file_get_contents($q);

		$obj = json_decode($resp);

		$sunrise = $obj->moon_phase->sunrise;
		$sunset = $obj->moon_phase->sunset;

		$hournow = Date('H');
		$minutenow = Date('i');
		$timenow = computeTime($hournow, $minutenow);
		$timesunrise = computeTime($sunrise->hour, $sunrise->minute);
		$timesunset = computeTime($sunset->hour, $sunset->minute);

		$daylight = $timesunset - $timesunrise;
		$intervals = $daylight / 7;
		$currentinterval = 0;

		while (($timenow - $timesunrise) > $currentinterval){
			$currentinterval += $intervals;
		}

		return $currentinterval/$intervals;

	}

?>