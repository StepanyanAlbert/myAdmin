<?php
$connect=new PDO("mysql:host=localhost","root","");
$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);