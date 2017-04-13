<?php
/**
 * Created by PhpStorm.
 * User: 1017166
 * Date: 13/04/2017
 * Time: 13:06
 */
include "dbConnect.php";

$sql = "select name from administrators where id = ?";
$usrs_v=2;
// execute the SQL query
//$result=mysqli_query($link,$sql);
//$result=$link->query($sql);

//$hRow=mysqli_fetch_fields($result);

//$sql_insert = "INSERT INTO registration_tbl (name, email, date)                     VALUES (?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bindValue(1,$usrs_v);
//$stmt->bindValue(2, $email);
//$stmt->bindValue(3, $date);
$stmt->execute();
//}
//catch(Exception $e) {
//    die(var_dump($e));
//}


//$hRow=$stmt->getColumnMeta(0);
print "<div class='cHr'>";
for ($i=0; $i< $stmt->columnCount();$i++){
    $rData=$stmt->getColumnMeta($i);
    print "<div class='cH'>";
    print "   $rData  ";
    print "</div>";
}
print "</div>";


while($row = $stmt->fetchAll())
{
    /* the code inside here is repeated for each item in the array
    You can do things like the following to print out each movie title */
    print " <div class='row'> \r\n";
    $count1=0;
    foreach ($row as $col){
        $count1++;
        if (($count1 % 2)==0) {
            print " <div class='col'> \r\n";
            print "  $col  ";
            print " </div> \r\n";
        }
    }

    print " </div> \r\n";
}
$stmt->closeCursor();
$conn=null;

?>