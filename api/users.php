<?php
/**
 * Created by PhpStorm.
 * User: webwerks
 * Date: 26/5/17
 * Time: 3:20 PM
 */


if(isset($_POST['id']) && isset($_POST['name'] && $_POST['email'])){
    mysql_connect('localhost','root','root');
    mysql_select_db('angular_test');
    $name=mysql_real_escape_string($_POST['name']);
    $email=mysql_real_escape_string($_POST['email']);
    mysql_query("INSERT INTO `employee` (`id`, `name`, `email`) VALUES (NULL, '$name', '$email'')");
    echo '1';
}else{
    echo '0';
}