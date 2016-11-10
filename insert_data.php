<div align="center">
<form method="get" action="">
    <input type="text" name="name">
    <br>
    <input type="text" name="lastname">
    <br>
    <input type="submit" value="Update" name="btn_insert">
</form>
</div>
<?php
include "db_connect.php";
if(isset($_GET['btn_insert'])) {
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];
    $status = "1";

    $sql_update = "INSERT INTO member (name,lastname,status) VALUES('$name','$lastname','$status')";
    $result_sql_update = mysql_query($sql_update) or die(mysql_error());
    if($result_sql_update){

        echo "<script type='text/javascript'>alert('Insert Complete');window.location.href = \"show_data.php\";</script>";

    } else {
        echo "<script>alert('Can Not Insert');window.history.back();</script>";
    }
}
?>