<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Edit</th>

    </tr>
    </thead>
    <tbody>
    <?php
    include "db_connect.php";
    $sql_member = "select * from member";
    $objQuery_member = mysql_query($sql_member) or die(mysql_error());
    while ($result_member = mysql_fetch_array($objQuery_member)){
        ?>
        <tr>
            <td><?php echo $result_member['id']; ?></td>
            <td><?php echo $result_member['name']; ?></td>
            <td><?php echo $result_member['lastname']; ?></td>
            <td><a href="update_data.php?id=<?php echo $result_member['id']; ?>" target="_blank">edit</a> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</body>
</html>