<?php

header("Content-Type: text/plain");
function getGETParametr(string $pass) : ?string
	{
		return isset($_GET[$pass]) ? (string)$_GET[$pass] : null;
    }
$pass = trim(getGetParametr('pass'));
$array = str_split($pass);
$len = count($array);
$save = $len * 4;
for ($i = 0; $i < '$len'; ++$i)
{
    if  (is_numeric($pass[i])) 
    {
        ++$numb;
    } 
}
$save = $save + ($numb * 4);
echo $save;
