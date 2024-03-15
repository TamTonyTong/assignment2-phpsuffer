<?php require_once("settings.php");
    $conn = mysqli_connect($host,$user,$pwd,$sql_db);
    if (!$conn) {
        die("Connection Failed: ". mysqli_connect_error());
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $job_ref_num=mysqli_real_escape_string($conn,trim($_POST["job_ref_num"]));
        $query = "Insert into asm2 (Job_Reference_Number) values ('$job_ref_num')";
        if (mysqli_query($conn, $query)) {
            //$eoi_number=mysqli_query("'EOInumber'");
            echo "Expression of Interest submitted successfully. Your EOInumber is: "; //. $last_id;
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
        mysqli_close($conn);
