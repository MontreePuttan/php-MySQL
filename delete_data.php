<?php
include "db_connect.php";
if(isset( $_GET['id'])) {
    $request_id_user = $_GET['id'];

    $sql_update = "DELETE FROM member WHERE id='$request_id_user'";
    $result_sql_update = mysql_query($sql_update) or die(mysql_error());
    if($result_sql_update){

        echo "<script type='text/javascript'>alert('Delete Complete');window.location.href = \"show_data.php\";</script>";

    } else {
        echo "<script>alert('Can Not Delete');window.history.back();</script>";
    }
}
?>