<!DOCTYPE html>
<html lang="en">
<head>
<?php
require_once('header.inc');?>
  <meta name="author" content="Tống Đức Từ Tâm">
  <link rel="stylesheet" href="styles/style_php.css">
  <title>Form Checking</title>
</head>
<body>
    <h1>Result</h1>
<?php
function sanitise_input($input)
{
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}
// RETURN TO APPLY IF USER HASN'T ENTER FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    if (!empty($_POST['job_ref_num'])) {
        $job_ref_num = $_POST["job_ref_num"];
        $job_ref_num = sanitise_input($job_ref_num);
        if (!preg_match("/^[a-zA-Z0-9]{5}$/", $job_ref_num)) {
            $errors = "<p class='errors'>Job reference number must be exactly 5 alphanumeric characters.<p>";
            //header("location: error_display.php");
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $job_ref_num = "";
        $errors = "Job reference number is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['first_name'])) {
        $first_name = $_POST["first_name"];
        $first_name = sanitise_input($first_name);
        if (!preg_match("/^[a-zA-Z0-9]{1,20}$/", $first_name)) {
            $errors = "First name must be maximum 20 alphanumeric characters.<br>";
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $first_name = "";
        $errors = "First name is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['last_name'])) {
        $last_name = $_POST["last_name"];
        $last_name = sanitise_input($last_name);
        if (!preg_match("/^[a-zA-Z0-9]{1,20}$/", $last_name)) {
            $errors = "Last name must be maximum 20 alphanumeric characters.<br>";
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $last_name = "";
        $errors = "Last name is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['date_of_birth'])) {
        $date_of_birth = $_POST["date_of_birth"];
        $date_of_birth = sanitise_input($date_of_birth);
        // if (!preg_match("/^[a-zA-Z0-9]{5}$/", $date_of_birth)) {
        //    $errors = "Date of Birth must be between 15 and 80.<br>";
        //    echo $errors;
        //    exit;
        // }
    } else {
        $date_of_birth = "";
        $errors = "Date of Birth is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['gender'])) {
        $gender = $_POST["gender"];
        $gender = sanitise_input($gender);
    } else {
        $gender = "";
        $errors = "Gender is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['street_address'])) {
        $street_address = $_POST["street_address"];
        $street_address = sanitise_input($street_address);
        if (strlen($street_address) > 40) {
            $errors = "Street Address must be maximum 40 characters.<br>";
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $street_address = "";
        $errors = "Street Address is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['suburb_town'])) {
        $suburb_town = $_POST["suburb_town"];
        $suburb_town = sanitise_input($suburb_town);
        if (!preg_match("/^[a-zA-Z0-9\s\.,'-]{1,40}$/", $suburb_town)) {
            $errors = "Suburb/Town must be maximum 40 characters.<br>";
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $suburb_Town = "";
        $errors = "Suburb/Town is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    // REMEMBER TO MATCH THE POSTCODE WITH THE STATE NUM
    if (!empty($_POST['state'])) {
        $state = $_POST["state"];
        $state = sanitise_input($state);
    } else {
        $state = "";
        $errors = "State selection is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    if (!empty($_POST['postcode'])) {
        $postcode = $_POST["postcode"];
        $postcode = sanitise_input($postcode);
        if (!preg_match("/^\d{4}$/", $postcode)) {
            $errors = "Postcode must consist of exactly 4 digits.<br>";
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $errors = "Postcode is required.<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;   
    }
    if (isset($_POST['email']) && !empty($_POST['email'])) {
        // Sanitize and validate email
        // FIND AN ADVANCED WAYS TO VALIDATE EMAIL.
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        } else {
            $errors="Invalid email address<br>";
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        // Email field is empty or not set
        echo "Email is required";
    }
    if (isset($_POST['phone_num']) && !empty($_POST['phone_num'])) {
        $phone_num = $_POST['phone_num'];
        if (!preg_match('/^[0-9\s]{8,12}$/', $phone_num)) {
            $errors= 'Phone number is not valid<br>';
            echo $errors;
            echo "<a href='apply.php'>Go back to the form</a> ";
            exit;
        }
    } else {
        $phone_num = " ";
        $errors="Phone number is required<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
    }
    $skill1= isset($_POST["skill1"]) ? mysqli_real_escape_string($conn, trim($_POST["skill1"])) : " ";
    $skill2= isset($_POST["skill2"]) ? mysqli_real_escape_string($conn, trim($_POST["skill2"])) : " ";
    $skill3= isset($_POST["skill3"]) ? mysqli_real_escape_string($conn, trim($_POST["skill3"])) : " ";
    $skill4= isset($_POST["skill4"]) ? mysqli_real_escape_string($conn, trim($_POST["skill4"])) : " ";
    $skill5= isset($_POST["skill5"]) ? mysqli_real_escape_string($conn, trim($_POST["skill5"])) : " ";
    $skill6= isset($_POST["skill6"]) ? mysqli_real_escape_string($conn, trim($_POST["skill6"])) : "";
    $other_skill= isset($_POST["other_skill"]) ? mysqli_real_escape_string( $conn, trim($_POST["other_skill"])) : " ";
    if (!empty($skill6)){
       if (!empty($other_skill)){}
       else{
        $errors="This text area must not be empty<br>";
        echo $errors;
        echo "<a href='apply.php'>Go back to the form</a> ";
        exit;
       } 
    }
    // INSTEAD OF DOING 2 TABLES, I WILL DO 1 TABLE AND SEE IF ITS WORKS THEN DO ANOTHER
    // CREATE TABLE IF NOT
    // Check if the EOI table exists
    $checking_query = "SHOW TABLES LIKE 'EOI'";
    $result = mysqli_query($conn, $checking_query);
    // REMEMBER TO FIX THE FORMAT OF NEW CREATED TABLES
    if (mysqli_num_rows($result) == 0) {
        $create_table_query = "CREATE TABLE EOI (
            EOINUM VARCHAR(36) COLLATE latin1_swedish_ci,
            Status ENUM('New', 'Current', 'Final') COLLATE latin1_swedish_ci DEFAULT 'New',
            Job_Reference_Number VARCHAR(5) COLLATE latin1_swedish_ci,
            `First Name` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Last Name` VARCHAR(20) COLLATE latin1_swedish_ci,
            `DOB` VARCHAR(10) COLLATE latin1_swedish_ci,
            `Gender` VARCHAR(10) COLLATE latin1_swedish_ci,
            `Street address` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Suburb/town` VARCHAR(20) COLLATE latin1_swedish_ci,
            `State` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Postcode` INT(4),
            `Email Address` VARCHAR(20) COLLATE latin1_swedish_ci,
            `Phone Number` INT(15),
            `skill1` VARCHAR(36) COLLATE latin1_swedish_ci,
            `skill2` VARCHAR(36) COLLATE latin1_swedish_ci,
            `skill3` VARCHAR(36) COLLATE latin1_swedish_ci,
            `skill4` VARCHAR(36) COLLATE latin1_swedish_ci,
            `skill5` VARCHAR(36) COLLATE latin1_swedish_ci,
            `skill6` VARCHAR(36) COLLATE latin1_swedish_ci,
            `other_skill` VARCHAR(40) COLLATE latin1_swedish_ci
            )";
        mysqli_query($conn, $create_table_query);
    }
    // INSERT DATA TO TABLE
    $insert_query = "INSERT INTO `EOI` (`Job_Reference_Number`,`First Name`, `Last Name`,`DOB`,`Gender`, `Street address`, `Suburb/town`, `State`, `Postcode`, `Email Address`, `Phone Number`
    , `skill1`,`skill2`,`skill3`,`skill4`,`skill5`,`skill6`,`other_skill`) 
    VALUES ('$job_ref_num','$first_name','$last_name','$date_of_birth','$gender','$street_address','$suburb_town','$state','$postcode','$email','$phone_num',
    '$skill1', '$skill2', '$skill3', '$skill4', '$skill5','$skill6', '$other_skill')";

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

mysqli_close($conn);?>