<?php 

include('db_connection.php');
include('functions.php');

$emp_key = $_POST['data'];

$table_name = "employee_master";
$set_value = "status=8,";
$where = "id=".$emp_key;

$result = db_update($table_name,$set_value,$where_value){
    //$db_select = mysql_select_db("em", $con);
    $sql_query = 'UPDATE '.$table_name.' SET '.$set_value.' WHERE '.$where_value;
    //echo $sql_query;
    if (mysqli_query($con,$sql_query)== TRUE) {
        return 1;
    }else{
        return 0;
        }
        if($result == 1){ ?>
            <div class="alert alert-success alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h4><i class="icon fa fa-check"></i> Alert!</h4>
                       Success, The employee Data got updated.
                     </div>
       
       <?php 
       }else{
       ?>
           <div class="alert alert-danger alert-dismissible">
                       <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                       <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                       Unable to update.
                     </div>
       <?php
       }
}
?>