<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Creating Web Applications Lab 10">
    <meta name="keywords" content="PHP, MySql">
    <title>Retrieving records to HTML</title>
</head>
<body>
    <h1>Display Database</h1>
<?php
    require_once("settings.php");

    $conn = @mysqli_connect($host, 
    $user, 
    $pwd, 
    $sql_db);
    if (!$conn) {
        echo "<p>Database connection failure</p>";
    }
    else {
    $query="select ID, Status, Job_Reference_Number FROM asm2";
    $result=mysqli_query($conn,$query);
    if (!$result) {
        echo "<p>Something is wrong with ", $query, "</p>";
    }
    else {
        echo "<table border=\"1\">\n";
        echo "<tr>\n "
        ."<th scope= \"col\">ID</th>\n "
        ."<th scope= \"col\">Status</th>\n "
        ."<th scope= \"col\">Job_Reference_Number</th>\n"
        ."<th scope= \"col\">Firstname</th>\n"
        ."<th scope= \"col\">Lastname</th>\n"
        ."<th scope= \"col\">Street address</th>\n"
        ."<th scope= \"col\">Suburb/town</th>\n"
        ."<th scope= \"col\">State</th>\n"
        ."<th scope= \"col\">Postcode</th>\n"
        ."<th scope= \"col\">Email address</th>\n"
        ."<th scope= \"col\">Phone number</th>\n"
        ."<th scope= \"col\">Skills</th>\n"
        ."</tr>\n";
        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr>\n ";
            echo "<td>", $row["ID"], "</td>\n ";
            echo "<td>", $row["Status"], "</td>\n ";
            echo "<td>", $row["Job_Reference_Number"], "</td>\n ";
            echo "</tr>\n "; 
        }
    echo "</table>\n ";
    mysqli_free_result($result);
    }
    mysqli_close($conn);
}
?>
</body>
</html>