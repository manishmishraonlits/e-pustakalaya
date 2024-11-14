<?php

$connection = mysqli_connect('localhost','learndatabase', 'database', 'epustakalaya');

if (!$connection) {
    die(mysqli_connect_error());
}