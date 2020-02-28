<?php
header("Content-Type: text/plain");
function getGETParametr(string $text) : ?string
	{
		return isset($_GET[$text]) ? (string)$_GET[$text] : null;
    }
$text = trim(getGetParametr('text'));
$result = preg_replace("/\s + /", " ", $text);
echo $result;