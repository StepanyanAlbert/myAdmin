<?php
try{
$connect=new PDO("mysql:host=localhost","root","");
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);}
catch (PDOException $ex){
    echo $ex->getMessage();
}