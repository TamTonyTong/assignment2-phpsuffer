<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('header.inc'); ?>
    <meta name="author" content="Tống Đức Từ Tâm">
    <link rel="stylesheet" href="styles/style.css">
    <title>Form Checking</title>
</head>

<body>
    <div class=error-container>
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
        $errors = "";
        //var_dump($_POST);
        if (!empty($_POST['job_ref_num'])) {
            $job_ref_num = $_POST["job_ref_num"];
            $job_ref_num = sanitise_input($job_ref_num);
            if (!preg_match("/^[a-zA-Z0-9]{5}$/", $job_ref_num)) {
                $errors .= "<p class='errors'>Job reference number must be exactly 5 alphanumeric characters.<p>\n";
            }
        } else {
            $job_ref_num = "";
            $errors .= "<p>Job reference number is required.</p>\n";
        }
        if (!empty($_POST['first_name'])) {
            $first_name = $_POST["first_name"];
            $first_name = sanitise_input($first_name);
            if (!preg_match("/^[a-zA-Z0-9]{1,20}$/", $first_name)) {
                $errors .= "<p>First name must be maximum 20 alphanumeric characters.</p>\n";
            }
        } else {
            $first_name = "";
            $errors .= "<p>First name is required.</p>\n";
        }
        if (!empty($_POST['last_name'])) {
            $last_name = $_POST["last_name"];
            $last_name = sanitise_input($last_name);
            if (!preg_match("/^[a-zA-Z0-9]{1,20}$/", $last_name)) {
                $errors .= "<p>Last name must be maximum 20 alphanumeric characters.</p>\n";
            }
        } else {
            $last_name = "";
            $errors .= "<p>Last name is required.</p>\n";
        }
        if (!empty($_POST['date_of_birth'])) {
            $date_of_birth = $_POST["date_of_birth"];
            $date_of_birth = sanitise_input($date_of_birth);
            $dob = new DateTime($date_of_birth);
            $today = new DateTime();
            $age = $today->diff($dob)->y;

            if ($age > 80 || $age < 15) {
                $errors .= "<p>Age must be between 15 and 80.</p>\n";
            }
        } else {
            $date_of_birth = "";
            $errors .= "<p>Date of Birth is required.</p>\n";
        }
        if (!empty($_POST['gender'])) {
            $gender = $_POST["gender"];
            $gender = sanitise_input($gender);
        } else {
            $gender = "";
            $errors .= "<p>Gender is required.</p>\n";
        }
        if (!empty($_POST['street_address'])) {
            $street_address = $_POST["street_address"];
            $street_address = sanitise_input($street_address);
            if (strlen($street_address) > 40) {
                $errors .= "<p>Street Address must be maximum 40 characters.</p>\n";
            }
        } else {
            $street_address = "";
            $errors .= "<p>Street Address is required.</p>\n";
        }
        if (!empty($_POST['suburb_town'])) {
            $suburb_town = $_POST["suburb_town"];
            $suburb_town = sanitise_input($suburb_town);
            if (!preg_match("/^[a-zA-Z0-9\s\.,'-]{1,40}$/", $suburb_town)) {
                $errors .= "<p>Suburb/Town must be maximum 40 characters.</p>\n";
            }
        } else {
            $suburb_town = "";
            $errors .= "<p>Suburb/Town is required.</p>\n";
        }
        // REMEMBER TO MATCH THE POSTCODE WITH THE STATE NUM
        // Define the valid postcode ranges for each state
        $state_postcode_ranges = array(
            'VIC' => array('3000', '3999', '8000', '8999'),
            'NSW' => array('2000', '2999', '1000', '1999'),
            'QLD' => array('4000', '4999', '9000', '9999'),
            'NT'  => array('0800', '0899', '0900', '0999'),
            'WA'  => array('6000', '6999', '6800', '6999'),
            'SA'  => array('5000', '5999', '5800', '5999'),
            'TAS' => array('7000', '7999', '7800', '7900'),
            'ACT' => array('0200', '0299', '2600', '2618', '2900', '2920'),
        );

        // Validate state
        if (!empty($_POST['state'])) {
            $state = $_POST["state"];
            $state = sanitise_input($state);
            if (!array_key_exists($state, $state_postcode_ranges)) {
                $errors .= "<p>Invalid state selected.</p>\n";
            }
        } else {
            $state = "";
            $errors .= "<p>State selection is required.</p>\n";
        }

        // Validate postcode
        if (!empty($_POST['postcode'])) {
            $postcode = $_POST["postcode"];
            $postcode = sanitise_input($postcode);
            if (!preg_match("/^\d{4}$/", $postcode)) {
                $errors .= "<p>Postcode must consist of exactly 4 digits.</p>\n";
            } elseif (!in_array($postcode, range($state_postcode_ranges[$state][0], $state_postcode_ranges[$state][1]))) {
                $errors .= "<p>Invalid postcode for the selected state.</p>\n";
            }
        } else {
            $postcode = "";
            $errors .= "<p>Postcode is required.</p>\n";
        }
        if (isset($_POST['email']) && !empty($_POST['email'])) {
            // Sanitize and validate email
            // FIND AN ADVANCED WAYS TO VALIDATE EMAIL.
            $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            if (!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/', $email)) {
                $errors .= "<p>Invalid email address</p>\n";
            }
        } else {
            // Email field is empty or not set
            $email = "";
            $errors .= "<p>Email is required</p>\n";
        }
        if (isset($_POST['phone_num']) && !empty($_POST['phone_num'])) {
            $phone_num = $_POST['phone_num'];
            if (!preg_match('/^[0-9\s]{8,12}$/', $phone_num)) {
                $errors .= '<p>Phone number is not valid</p>\n';
            }
        } else {
            $phone_num = " ";
            $errors .= "<p>Phone number is required</p>\n";
        }
        $skill1 = isset($_POST["skill1"]) ? mysqli_real_escape_string($conn, trim($_POST["skill1"])) : " ";
        $skill2 = isset($_POST["skill2"]) ? mysqli_real_escape_string($conn, trim($_POST["skill2"])) : " ";
        $skill3 = isset($_POST["skill3"]) ? mysqli_real_escape_string($conn, trim($_POST["skill3"])) : " ";
        $skill4 = isset($_POST["skill4"]) ? mysqli_real_escape_string($conn, trim($_POST["skill4"])) : " ";
        $skill5 = isset($_POST["skill5"]) ? mysqli_real_escape_string($conn, trim($_POST["skill5"])) : " ";
        $skill6 = isset($_POST["skill6"]) ? mysqli_real_escape_string($conn, trim($_POST["skill6"])) : "";
        $other_skill = isset($_POST["other_skill"]) ? mysqli_real_escape_string($conn, trim($_POST["other_skill"])) : " ";
        if (empty($skill1 and $skill2 and $skill3 and $skill4 and $skill5 and $skill6)) {
            $errors .= "<p>One of the skills must be selected</p>\n";
        }
        if (!empty($skill6)) {
            if (!empty($other_skill)) {
            } else {
                $errors .= "<p>The text area must not be empty</p>\n";
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
        if (empty($errors)) {
            mysqli_query($conn, $insert_query);
            $update_query = "UPDATE EOI SET EOINUM = UUID() WHERE 1";
            mysqli_query($conn, $update_query);
            // Fetch the last inserted EOInumber
            $last_insert_id_query = "SELECT EOINUM FROM EOI";
            $result = mysqli_query($conn, $last_insert_id_query);
            $row = mysqli_fetch_assoc($result);
            $eoi_number = $row['EOINUM'];

            // Display confirmation message with EOInumber
            echo "<p class=successful>Expression of Interest submitted successfully. Your EOInumber is: $eoi_number</p>\n";
        } else {
            echo $errors;
            echo "<a href=apply.php>Click here to go back to the form</a>\n";
            exit;
        }
    } else {
        header("location: apply.php");
    }
    mysqli_close($conn); ?>
    </div>