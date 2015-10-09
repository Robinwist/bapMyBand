<?php

$nr_items_page = NR_ITEMS_PAGE;
$offset = ($page_nr - 1) * $nr_items_page;
$sql = "SELECT * FROM newsarticles LIMIT " . $offset . ", " . $nr_items_page;
$result = $mysqli->query($sql);
$result = resultToArray($result);

//$nr_pagination = $mysqli->$result->num_rows;

//$result = $mysqli->query("SELECT * FROM newsarticles");

//for ($i = 0; $i < $nr_pagination; $i++) {
//    echo $i;
//}