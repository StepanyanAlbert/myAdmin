<?php
 require("connection.php");
if(isset($_GET['db_name'])){
  echo  $db_name=$_GET['db_name'];
}else{
    echo $db_name=$_GET['input_name'];
}