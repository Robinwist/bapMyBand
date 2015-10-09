
$searchString;
//
//$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$searchString%'";
//
//$searchResult = $mysqli->query($sql);

<?php
$search_string = $_POST['searchString']; // user input in search

$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_string%'";
$search_result = $mysqli->query($sql);
$search_result = resultToArray($search_result);

?>

