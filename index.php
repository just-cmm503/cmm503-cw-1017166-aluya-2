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
// execute the SQL query
//$result=mysqli_query($link,$sql);
$result=$link->query($sql);

$hRow=mysqli_fetch_fields($result);
print "<div class='cHr'>";
for ($i=0; $i< mysqli_num_fields($result);$i++){

    print "<div class='cH'>";
    print "   $hRow($i)  ";
    print "</div>";
}
print "</div>";


while($row = $result->fetch_array())
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
$result->close();
$link->close();
?>