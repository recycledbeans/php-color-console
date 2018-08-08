<?php

if (!function_exists('textblue')) {
	function textblue($text)
	{
		return textcolor($text, '34');
	}
}

if (!function_exists('textblack')) {
	function textblack($text)
	{
		return textcolor($text, '30');
	}
}

if (!function_exists('textred')) {
	function textred($text)
	{
		return textcolor($text, '31');
	}
}

if (!function_exists('textgreen')) {
	function textgreen($text)
	{
		return textcolor($text, '32');
	}
}

if (!function_exists('textcolor')) {
	function textcolor($text, $color_number)
	{
		return "\e[" . $color_number . "m" . $text . "\e[0m";
	}
}

if (!function_exists('bginverted')) {
	function bginverted($text) {
		return "\e[7m" . $text . " \e[27m";
	}
}

if (!function_exists('println')) {
	function println($text)
	{
		echo $text . "\n";
	}
}

if (!function_exists('progress')) {
	function progress($text)
	{
		echo $text . "\033[0K\r";
	}
}

