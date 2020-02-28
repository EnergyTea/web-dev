<?php 

function getGETParametr(string $identifier) : ?string
{
    return isset($_GET[$identifier]) ? (string)$_GET[$identifier] : null;
}
header("Content-Type: text/plain");
$identifier = getGETParametr('identifier');
if (is_numeric($identifier[0])) 
{
    echo "No. Идентификатор не может начинаться с цифты";
}	
else if ($identifier[0] == null) 
{
    echo "Пустая строка.";
}	
else
{
  echo "Yes";
}