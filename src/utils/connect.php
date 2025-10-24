<?php

$user="root";
$password="";
$db="limpoo";
$server="localhost";

$connect=new PDO("mysql:host=$server;dbname=$db",$user,$password);
