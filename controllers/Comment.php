<?php
include_once "../models/Model.php";
if($_POST['submit']){
    $fio = trim(strip_tags($_POST['fio']));
    $email = trim(strip_tags($_POST['email']));
    $text = trim(strip_tags($_POST['text']));

    newComment($link, $fio, $email, $text);
}

$comments = getAll($link, 'comment');
