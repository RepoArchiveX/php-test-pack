<?php

require_once 'vendor/autoload.php';

try{
$db = new MysqliDb ('host', 'username', 'password', 'databaseName');
}catch($e){
var_dump($e);
}
try{
var_dump(new phptestpack\TestClass);
}catch($e){
var_dump($e);
}
var_dump(class_exists("phptestpack\TestClass"), get_declared_classes());
