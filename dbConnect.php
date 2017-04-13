<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 08/03/2017
 * Time: 11:35
 */

    $connectstr_dbhost = '';//$host;
    $connectstr_dbname = '';//$dbName;
    $connectstr_dbusername = '';//$uname;
    $connectstr_dbpassword = '';//$pw;
    foreach ($_SERVER as $key => $value) {
        if (strpos($key, "MYSQLCONNSTR_localdb") !== 0) {
            continue;
        }
        $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
        //echo $connectstr_dbhost." g1 <br> \r\n";
        $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
        //echo $connectstr_dbname." g2 <br> \r\n";;
        $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
        //echo $connectstr_dbusername." g3 <br> \r\n";;
        $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
        //echo $connectstr_dbpassword." g4 <br> \r\n";;
    }
//$conn = new PDO( "mysql:host=$connectstr_dbhost;dbname=$connectstr_dbname", $connectstr_dbusername, $connectstr_dbpassword);
//$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $link = mysqli_connect($connectstr_dbhost, $connectstr_dbusername, $connectstr_dbpassword, $connectstr_dbname);
    if (!$link) {
        echo "Error: Unable to connect to MySQL." . PHP_EOL;
        echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

function fetchRecords($tableName, $link)
{

    $sql = "select * from ".$tableName;

    $result = $link->query($sql);
    $ret_Res = json_encode($result->fetch_all());
    //$ret_Res = $result->fetch_all();
    $result->close();
    $link->close();
    return $ret_Res;
}
?>