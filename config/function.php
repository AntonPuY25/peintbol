<?php
function get_users($link){

    $sql  = "SELECT * FROM `users`";
    $result = mysqli_query($link, $sql);
    $users = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $users;

}
$users = get_users($link);