<?php

class DateTimeView {


	public function show() {
		date_default_timezone_get('Sweden/Stockholm');
		$timeString = date('l') . ', the ' . date('jS \of F Y') . ', The time is ' . date('h:i:sa');

		return '<p>' . $timeString . '</p>';
	}
}