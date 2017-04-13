<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 13:06
 */
require_once "dbConnect.php";
//print json_decode(fetchRecords('users',$link));
print fetchRecords('users',$link);
?>