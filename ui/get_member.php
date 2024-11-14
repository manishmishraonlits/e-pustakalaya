<?php

$id = $_GET['id'];
require 'connect.php';
$sql = "SELECT member_name FROM member WHERE member_id = $id";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    $member = mysqli_fetch_assoc($result);
    echo $member['member_name'];
} else {
    echo "Invalid Member ID!";
}
