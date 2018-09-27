<?php

class DateTimeView {


	public function show() {
		date_default_timezone_get('Sweden/Stockholm');
		$timeString = date('l jS \of F Y h:i:s A');

		return '<p>' . $timeString . '</p>';
	}
}