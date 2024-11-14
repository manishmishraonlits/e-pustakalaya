<?php

require 'book_search.php';

$id = $_GET['id'];
$result = fetch_author($id);

// print_r($result);

foreach($result as $author){
 fetch_author_name($author['author_id']);
}