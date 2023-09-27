<?php
$text = "The quick brown fox jumps over the lazy dog.";
function ChangeText($text)
{
    $newtext = strtolower($text);
    $modifiedText = str_replace("brown", "red", $newtext);
    return $modifiedText;

}
$Fulltext = ChangeText($text);
echo PHP_EOL;

echo $Fulltext;
