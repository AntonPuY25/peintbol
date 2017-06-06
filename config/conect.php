<?php
$link = mysqli_connect('localhost', 'root', '','index', '3307');
if(mysqli_connect_errno()){
    echo 'ошибка подключения('.mysqli_connect_errno().') :'.mysqli_connect_error();
    exit();
}