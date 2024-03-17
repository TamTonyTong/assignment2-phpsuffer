<?php
require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_ref_num = mysqli_real_escape_string($conn, trim($_POST["job_ref_num"]));

    $insert_query = "INSERT INTO asm2 (Job_Reference_Number) VALUES ('$job_ref_num')";
    
    if (mysqli_query($conn, $insert_query)) {
        $update_query = "UPDATE asm2 SET EOINUM = UUID() WHERE 1";
        
        if (mysqli_query($conn, $update_query)) {
            // Fetch the last inserted EOInumber
            $last_insert_id_query = "SELECT EOINUM FROM asm2 ORDER BY ID DESC LIMIT 1";
            $result = mysqli_query($conn, $last_insert_id_query);
            $row = mysqli_fetch_assoc($result);
            $eoi_number = $row['EOINUM'];
            
            // Display confirmation message with EOInumber
            echo "Expression of Interest submitted successfully. Your EOInumber is: $eoi_number";
        } else {
            echo "Error updating EOInumber: " . mysqli_error($conn);
        }
    } else {
        echo "Error inserting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
