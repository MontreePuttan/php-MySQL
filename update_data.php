
<div align="center">
    <?php
    include "db_connect.php";
    if(isset( $_GET['id'])){
        $request_id_user = $_GET['id'];
    $sql_member = "select * from member where id = '$request_id_user'";
    $objQuery_member = mysql_query($sql_member) or die(mysql_error());
    while ($result_member = mysql_fetch_array($objQuery_member)){
        ?>
        <form method="get" action="">
            <input type="hidden" name="id_user" value="<?php echo $result_member['id']; ?>">
            <input type="text" name="name" value="<?php echo $result_member['name']; ?>">
            <input type="text" name="lastname" value="<?php echo $result_member['lastname']; ?>">
            <input type="submit" value="Update" name="btn_update">
        </form>
    <?php } ?>
    <?php } ?>

</div>
<?php
if(isset($_GET['btn_update'])){
    $id_user = $_GET['id_user'];
    $name = $_GET['name'];
    $lastname = $_GET['lastname'];

    $sql_update = "UPDATE member SET name='$name',lastname='$lastname' WHERE id='$id_user'";
    $result_sql_update = mysql_query($sql_update) or die(mysql_error());
    if($result_sql_update){

        echo "<script type='text/javascript'>alert('Update Complete');window.location.href = \"show_data.php\";</script>";

    } else {
        echo "<script>alert('Can Not Update');window.history.back();</script>";
    }
}

?>
