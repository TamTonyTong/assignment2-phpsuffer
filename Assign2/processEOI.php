<?php
require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
// RETURN TO APPLY IF USER HASN'T ENTER FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $job_ref_num = mysqli_real_escape_string($conn, trim($_POST["job_ref_num"]));
    $first_name = mysqli_real_escape_string($conn, trim($_POST["first_name"]));
    $last_name = mysqli_real_escape_string($conn, trim($_POST["last_name"]));
    $date_of_birth = mysqli_real_escape_string($conn, trim($_POST["date_of_birth"]));
    $gender = mysqli_real_escape_string($conn, trim($_POST["gender"]));
    $street_address = mysqli_real_escape_string($conn, trim($_POST["street_address"]));
    $suburb_town = mysqli_real_escape_string($conn, trim($_POST["suburb_town"]));
    $state = mysqli_real_escape_string($conn, trim($_POST["state"]));
    $postcode = mysqli_real_escape_string($conn, trim($_POST["postcode"]));
    $email = mysqli_real_escape_string($conn, trim($_POST["email"]));
    $phone_num = mysqli_real_escape_string($conn, trim($_POST["phone_num"]));
    $skill1= mysqli_real_escape_string( $conn, trim($_POST["skill_list"]));
    $skill2= mysqli_real_escape_string( $conn, trim($_POST["skill_list"]));
    $skill3= mysqli_real_escape_string( $conn, trim($_POST["skill_list"]));
    $skill4= mysqli_real_escape_string( $conn, trim($_POST["skill_list"]));
    $skill5= mysqli_real_escape_string( $conn, trim($_POST["skill_list"]));
    $skill6= mysqli_real_escape_string( $conn, trim($_POST["skill_list"]));
    $other_skill=mysqli_real_escape_string( $conn, trim($_POST["other_skill"]));
    // $skill_list=[];
    //     foreach ($_POST["skill_list"] as $skill) {
    //     // Trim each skill value to remove whitespace
    //     $trimmedSkill = trim($skill);
        
    //     // Escape the trimmed skill value to prevent SQL injection
    //     $skill_list[] = mysqli_real_escape_string($conn, $trimmedSkill);
    //     $query = "INSERT INTO EOI (Skills) VALUES ('$skill_list')";
    //     if (mysqli_query($conn,$query)) {
    //     }
    //     else{}
    //     }
    // INSTEAD OF DOING 2 TABLES, I WILL DO 1 TABLE AND SEE IF ITS WORKS THEN DO ANOTHER
    // $other_skill = mysqli_real_escape_string($conn, trim($_POST["other_skills"]));
    // CREATE TABLE IF NOT
    // Check if the EOI table exists
    $checking_query = "SHOW TABLES LIKE 'EOI'";
    $result = mysqli_query($conn, $checking_query);
    // REMEMBER TO FIX THE FORMAT OF NEW CREATED TABLES
    if (mysqli_num_rows($result) == 0) {
        $create_table_query = "CREATE TABLE EOI (
            EOINUM VARCHAR(36) COLLATE latin1_swedish_ci,
            ID INT(11) AUTO_INCREMENT PRIMARY KEY,
            Status ENUM('New', 'Current', 'Final') COLLATE latin1_swedish_ci DEFAULT 'New',
            Job_Reference_Number VARCHAR(5) COLLATE latin1_swedish_ci,
            `First Name` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Last Name` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Street address` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Suburb/town` VARCHAR(20) COLLATE latin1_swedish_ci,
            State VARCHAR(20) COLLATE latin1_swedish_ci,
            Postcode INT(20),
            `Email Address` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Phone Number` INT(15),
            Skills VARCHAR(20) COLLATE latin1_swedish_ci
            )";
        mysqli_query($conn, $create_table_query);
    }
    // INSERT DATA TO TABLE
    $insert_query = "INSERT INTO `EOI` (`Job_Reference_Number`,`First Name`, `Last Name`,`DOB`,`Gender`, `Street address`, `Suburb/town`, `State`, `Postcode`, `Email Address`, `Phone Number`
    , `skill1`,`skill2`,`skill3`,`skill4`,`skill5`,`other_skill`) 
    VALUES ('$job_ref_num','$first_name','$last_name','$date_of_birth','$gender','$street_address','$suburb_town','$state','$postcode','$email','$phone_num',
    '$skill1', '$skill2', '$skill3', '$skill4', '$skill5', '$other_skill')";

    if (mysqli_query($conn, $insert_query)) {
        $update_query = "UPDATE EOI SET EOINUM = UUID() WHERE 1";

        if (mysqli_query($conn, $update_query)) {
            // Fetch the last inserted EOInumber
            $last_insert_id_query = "SELECT EOINUM FROM EOI";
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
else{
    header("location: apply.php");
}

mysqli_close($conn);
