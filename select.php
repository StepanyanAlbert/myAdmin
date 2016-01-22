<?php

require("connection.php");
if(isset($_POST['select_databases'])){

    try{
       $result=$connect->query("SHOW DATABASES");

       while($row=$result->fetchAll(PDO::FETCH_NUM)){

           foreach($row as $val){
            echo "<div class='database_name' ><i class='plus_sign fa fa-plus'></i><div id='hovering_div_inside'>
           <i class=\"fa fa-database database_sign\"></i><span class='dat_name'>".$val['0'].'</span></div><div class=\'appended\'> </div> </div>';
           }
       }

    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }
}
if (isset($_GET['database_name'])) {
    $name = $_GET['database_name'];
    try {
        $select = $connect->query("SHOW TABLES FROM $name ");
        while ($data = $select->fetchAll(PDO::FETCH_ASSOC)) {
            foreach ($data as $key => $value) {
                foreach ($value as $second__val) {
                    echo "<div class='result_data'><i class='fa fa-plus sign_plus_small'></i>
<i class='folder_font fa fa-folder-o'></i>
<span class='table_names'>".$second__val."</span></div>";
                }

            }

        }
    } catch (PDOException  $new) {
        echo $new->getMessage();
    }

}
if(isset($_GET["select_db_char"])){
    try{

        $result=$connect->query("SHOW DATABASES");
        while($row=$result->fetchAll(PDO::FETCH_NUM)){

           ?><table id='table_database' >
                <thead>
<tr>
<th class='table_header'>&nbsp</th>
<th class='table_header'>Databse</th>
<th class='table_header'>Collation</th>
<th class='table_header'>&nbsp &nbsp</th>
</tr>
                </thead>
<tbody><?php
            foreach($row as $val){


 echo "<tr class='table_row'>
";

                foreach($val as $value){
 echo "<td><input type='checkbox' id='checkbox_id'></td>";

            echo "<td class='datab_name'>".$value.'</td>';

    $sec_result=$connect->query("SELECT DEFAULT_COLLATION_NAME FROM information_schema.SCHEMATA WHERE SCHEMA_NAME = '$value' LIMIT 1;");
                    while($sec_row=$sec_result->fetchAll(PDO::FETCH_NUM)){
                    foreach($sec_row as $new_val){

                        foreach($new_val as $new_value){

                            echo '<td class="datab_char_name">'.$new_value."</td>
                            <td class='check_privileges'><i class='fa fa-usb'></i> <span class='check_privileges'>Check Priviliges</span></td>";
                            }echo "</tr>";
                        }
                    }
                }

                }echo  '</tbody></table><h4 class="total_count_databases" >TOTAL: <span  class="total_countOf_daabases"></span> </h4>';
}

    }
    catch(PDOException $ex){
        echo $ex->getMessage();
    }

}

if(isset($_GET['total_count_databases'])){

    try{
        $resul=$connect->query("SELECT COUNT(*) FROM information_schema.SCHEMATA;");
        while($row=$resul->fetchAll(PDO::FETCH_NUM)){
            foreach($row as $value){
               foreach( $value as $serc_value){
                echo $serc_value;
               }
            }
        }
    }
    catch(PDOException $exc){
        echo $exc->getMessage();
    }



}


if(isset($_GET['input_name'])) {
$collation_name=trim($_GET['collation_name']," \'");

    if($collation_name==""){
        $collation_name='Latin1_bin';
    }
    $dat_name = trim($_GET['input_name']);
    if (!preg_match("/^[a-zA-Z_]+$/", $dat_name)) {
        die ("invalid first name");
    } else {

        try {

            $connect->query("CREATE DATABASE IF NOT EXISTS $dat_name  collate '$collation_name'");
               echo "<div class='col-lg-12 col-sm-12 col-md-12 col-xs-12 alert_div_no_tables'><div>
<p><i class='fa fa-warning'></i> No tables found in database.</p></div>
</div>
<div class='create_table _fieldset'><div class='create_table _fieldset'>
    <fieldset>
    <legend style=\"padding:5px;background: white;border: 1px solid red;font-family: verdana;font-weight: bold;\" ><div ><i class=\"fa fa-pencil\"><span class=\"span_legend_title\">Create table</span></i></div></legend>
        <div style='    background: #EEEEEE;
    padding: 20px;
    border-radius: 50px;' >
      <span class=\"number_rows\"> Name: </span> <input type=\"text\" required  name=\"table_name\" class=\"table_name_new_created\" width=\"50px\">
            <span class=\"number_rows\">Number of columns: </span> <input
                type=\"number\" min=\"1\" class='number_table_rows' style=\" width:35px\"></div>

    </fieldset>
    <div class=\"create_table_go_button\">
<button class=\"button_go\">
    Go
</button>
    </div>
</div>
</div>";

        } catch (PDOException $error) {
           echo $error->getMessage();
        }
    }

}



































