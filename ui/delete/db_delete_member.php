<?php

require 'connect.php';
$id = $_GET['did'];

$sql = "DELETE FROM member WHERE member_id = $id";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:member.php?status=3');
} else {
    header("location:member.php?status=0");
}