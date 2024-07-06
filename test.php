<?php

require_once 'vendor/autoload.php';
var_dump(get_declared_classes());

try{
$db = new MysqliDb ('host', 'username', 'password', 'databaseName');
}catch(Exception $e){
var_dump($e);
}
try{
var_dump(new phptestpack\TestClass);
}catch(Exception $e){
var_dump($e);
}
var_dump(class_exists("phptestpack\TestClass"), get_declared_classes());
