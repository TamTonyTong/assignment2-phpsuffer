<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.inc"); ?>
    <meta name="author" content="Huỳnh Nguyễn Quốc Bảo">
    <title>Register</title>
</head>

<body>
    <?php
    $currentPage = 'jobs';
    include('header.inc');
    ?>
    <header>
        <?php
        $currentPage = 'jobs';
        include('menu.inc');
        ?>
        <div class="banner">
            <h1 id="applyh1">Register</h1>
        </div>
    </header>

    <?php
    //adding lib
    require 'lib/password.php';

    include 'config.php';
    session_start();

    // Check if the table exists
    $tableExists = mysqli_query($conn, "SELECT 1 FROM `user_form` LIMIT 1");

    if (!$tableExists) {
        // Create the table if it doesn't exist
        $createTableQuery = "CREATE TABLE IF NOT EXISTS `user_form` (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            password VARCHAR(255) NOT NULL,
            image VARCHAR(255),
            privileges VARCHAR(20) NOT NULL DEFAULT 'user'
        )";

        if (mysqli_query($conn, $createTableQuery)) {
            echo "Table created successfully.<br>";
        } else {
            echo "Error creating table: " . mysqli_error($conn) . "<br>";
        }
    } else {
        // Check if the table is empty
        $rowCountQuery = "SELECT COUNT(*) FROM `user_form`";
        $result = mysqli_query($conn, $rowCountQuery);
        $rowCount = mysqli_fetch_row($result)[0];

        if ($rowCount == 0) {
            // Reset the ID back to 1
            $resetIDQuery = "ALTER TABLE `user_form` AUTO_INCREMENT = 1";
            if (mysqli_query($conn, $resetIDQuery)) {
                echo "ID reset successfully.<br>";
            } else {
                echo "Error resetting ID: " . mysqli_error($conn) . "<br>";
            }
        }
    }

    // Define the sanitize function
    function sanitize($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        return $data;
    }

    // Create the uploaded_img folder if it doesn't exist
    $uploadFolder = 'uploaded_img';
    if (!is_dir($uploadFolder)) {
        if (!mkdir($uploadFolder, 0777, true)) {
            die('Failed to create the uploaded_img folder');
        }
    }
    
    if (isset($_POST['submit'])) {

        $name = mysqli_real_escape_string($conn, sanitize($_POST['name']));
        $email = mysqli_real_escape_string($conn, sanitize($_POST["email"]));
        $pass = mysqli_real_escape_string($conn, sanitize($_POST["password"]));
        $cpass = mysqli_real_escape_string($conn, sanitize($_POST['cpassword']));
        $image = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_tmp_name = $_FILES['image']['tmp_name'];
        $image_folder = 'uploaded_img/' . $image;

        $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE email = '$email' AND password = '$pass'") or die('query failed');

        $errors = [];

        if (empty($email)) {
            $errors["email"] = "Email is required";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors["email"] = "Invalid email format";
        } else {
            // Check if email already exists in user_form table
            $query = "SELECT * FROM user_form WHERE email='$email'";
            $result = mysqli_query($conn, $query);
        
            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    $errors["email"] = "Email already exists";
                }
            } else {
                // Handle query execution error
                $errors["db_error"] = "Error occurred while executing the query: " . mysqli_error($conn);
            }
        }
        
        if (empty($name)) {
            $errors["name"] = "Profile name is required";
        } else if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors["name"] = "Profile name must contain only letters and spaces";
        }

        if (empty($pass)) {
            $errors["pass"] = "Password is required";
        } else if (!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,}$/", $pass)) {
            $errors["pass"] = "Password must contain at least 1 number, 1 uppercase letter, and 1 special character and be at least 8 characters long";
        }

        if (empty($cpass)) {
            $errors["cpass"] = "Confirm password is required";
        } else if ($pass !== $cpass) {
            $errors["cpass"] = "Passwords do not match";
        }

        if ($image_size > 2000000) {
            $errors["image"] = 'Image size is too large!';
        }

        if (count($errors) == 0) {
            // Hashed password   
            $hashedPass = password_hash($pass, PASSWORD_BCRYPT);

            $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image, privileges) VALUES('$name', '$email', '$hashedPass', '$image', 'user')") or die('query failed');

            if ($insert) {
                move_uploaded_file($image_tmp_name, $image_folder);
                $message[] = 'Registered successfully!';
                header('location:login.php');
                exit;
            } else {
                $errors["db_error"] = "Error occurred while registering. Please try again.";
            }
        }
    }
    ?>

    <div class="register-container">
        <h2>Register</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <?php
            if (isset($errors) && count($errors) > 0) {
                echo '<div class="error-message">';
                foreach ($errors as $error) {
                    echo '<p>' . $error . '</p>';
                }
                echo '</div>';
            }
            ?>
            <?php
            if (isset($message) && count($message) > 0) {
                echo '<div class="success-message">';
                foreach ($message as $msg) {
                    echo '<p>' . $msg . '</p>';
                }
                echo '</div>';
            }
            ?>
            <div class="form-group">
                <label for="name">Username</label>
                <input type="text" name="name" placeholder="Enter username" class="box">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Enter email" class="box">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter password" class="box">
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" name="cpassword" placeholder="Confirm password" class="box">
            </div>
            <div class="form-group">
                <label for="image">Profile Image</label>
                <input type="file" name="image">
            </div>
            <button type="submit" name="submit" class="btn">Register</button>
        </form>
    </div>

    <?php include("footer.inc");?>
</body>
</html>