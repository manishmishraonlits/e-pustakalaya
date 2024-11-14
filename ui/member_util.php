<?php

function fetch_members(){
    require 'connect.php';
    $sql = "SELECT * FROM member";
    $result = mysqli_query($connection, $sql);
    $members = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $members;
}

function fetch_member(int $id)
{
    require 'connect.php';
    $sql = "SELECT * FROM member WHERE member_id = $id";
    $result = mysqli_query($connection, $sql);
    $member = mysqli_fetch_assoc($result);
    return $member;
}

function fetch_member_name(int $id)
{
    require 'connect.php';
    $sql = "SELECT member_name FROM member WHERE member_id = $id";
    $result = mysqli_query($connection, $sql);
    $member = mysqli_fetch_assoc($result);
    return $member['member_name'];
}

function count_member()
{
    require 'connect.php';
    $sql = "SELECT COUNT(*) FROM member";
    $result = mysqli_query($connection, $sql);
    $member = mysqli_fetch_assoc($result)['COUNT(*)'];
    return $member;
}