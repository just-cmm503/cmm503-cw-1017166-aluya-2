<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 13:06
 */
require_once "dbConnect.php";

$myJobj= fetchRecords('users',$link);
//print $myJobj;
//$myJobj= json_decode($myJobj);
//print fetchRecords('users',$link);
foreach ($myJobj as $row ){
    foreach ($row as $col){
        print($col) . " ";
    }
    print "\n\r";
}
$myJobj->close();
$link->close();
?>