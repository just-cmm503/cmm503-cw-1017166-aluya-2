<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 13:06
 */
require_once "dbConnect.php";
$myJobj= fetchRecords('users',$link);
//print fetchRecords('users',$link);
foreach($row as $myJobj){
    print_r($row);
}
?>