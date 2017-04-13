<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 13:06
 */
include "dbConnect.php";

////$sql = "select * from users where id = ?";
////$usrs_v=2;
// execute the SQL query
//$result=mysqli_query($link,$sql);
//$result=$link->query($sql);

//$hRow=mysqli_fetch_fields($result);

//$sql_insert = "INSERT INTO registration_tbl (name, email, date)                     VALUES (?,?,?)";
////$stmt = $conn->prepare($sql);
////$stmt->bindValue(1,$usrs_v);
//$stmt->bindValue(2, $email);
//$stmt->bindValue(3, $date);
////$stmt->execute();
//}
//catch(Exception $e) {
//    die(var_dump($e));
//}

$sql = "select * from users";

$result=$link->query($sql);
print json_encode($result->fetch_all());
$result->close();
$link->close();
?>