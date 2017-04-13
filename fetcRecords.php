<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 22:18
 */

function fetchRecords($tableName){
    include "dbConnect.php";

    $sql = "select * from users";

    $result=$link->query($sql);
    $ret_Res=json_encode($result->fetch_all());
    $result->close();
    $link->close();
    return $ret_Res;
}
?>