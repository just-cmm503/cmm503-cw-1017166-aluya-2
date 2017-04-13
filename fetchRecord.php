<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 21:08
 */

include "dbConnect.php";

function fetchRecord($tableName){
    $sql = "select * from $tableName";

    $result = $link->query($sql);

    while ($row = mysqli_fetch_assoc($result)) {
    };
    $fetchRecord_out = json_encode ($result);
    $result->close();
    $link->close();
    return $fetchRecord_out;
}

?>