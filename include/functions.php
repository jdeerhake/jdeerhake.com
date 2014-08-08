<?php
date_default_timezone_set('America/Los_Angeles');

function myage () {
	$mydob = strtotime("October 8th, 1987");
	$diff = $mydob - time();
	return (int)(-1 * $diff / (3600 * 24 * 365));
}