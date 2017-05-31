<?php

$name = $_GET["name"];
$title = $_GET["title"];
$author = $_GET["author"];
$genre = $_GET["genre"];
$rating = $_GET["rating"];
$summary = $_GET['summary'];

$messagebody = "";
$messagebody .= "name:  ".$name."<br>";
$messagebody .= "title:  ".$title."<br>";
$messagebody .= "author:  ".$author."<br>";
$messagebody .= "genre:  ".$genre."<br>";
$messagebody .= "rating:  ".$rating."<br>";
$messagebody .= "summary:  ".$summary."<br>";


$headers  = "From: jdo-dai21@nobles.edu\n"; 
    	$headers .= "Content-type: text/html\n"; 
    	mail("jdo-dai21@nobles.edu", "New Submisison!", $messagebody, $headers);

echo $messagebody."<br>";
echo 'Thank you for your submission '.$name.'!  Press the back arrow to return to the website!';

?>
