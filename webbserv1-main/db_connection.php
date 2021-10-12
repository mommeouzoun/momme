<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "momme";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 return $conn;
 }

function CloseCon($conn)
 {
 $conn -> close();
 }


$query = mysqli_($conn, "SELECT * FROM tbl_articles");
while($row = mysqli_fetch_assoc($qurey))
{

  $title = $row["title"];
  $content = $row["content"]

}

?>
