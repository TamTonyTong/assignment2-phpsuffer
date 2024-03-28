<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.inc"); ?>
    <meta name="author" content="Huỳnh Nguyễn Quốc Bảo">
    <title>Login</title>
</head>

<body>
    <header>
        <?php
        $currentPage = 'jobs';
        include('menu.inc');
        ?>
        <div class="banner">
            <h1 id="applyh1">Login</h1>
        </div>
    </header>

    <?php
    //adding lib
    require 'lib/password.php';
    include 'config.php';

    // Define the sanitize function
    function sanitize($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        return $data;
    }

    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = mysqli_real_escape_string($conn, sanitize($_POST['email']));
        $password = mysqli_real_escape_string($conn, sanitize($_POST['password']));

        $query = "SELECT * FROM user_form WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                $hashedPassword = $row['password'];
                if (password_verify($password, $hashedPassword)) {
                    // Login successful
                    $userId = $row['id'];
                    $username = $row['name'];
                    $privileges = $row['privileges'];

                    // Start session and store user information
                    session_start();
                    $_SESSION['userId'] = $userId;
                    $_SESSION['username'] = $username;
                    $_SESSION['privileges'] = $privileges;

                    // Redirect to a logged-in page
                    header('Location: dashboard.php');
                    exit;
                } else {
                    $message[] = 'Invalid email or password';
                }
            } else {
                $message[] = 'Invalid email or password';
            }
        } else {
            $message[] = 'Error occurred while executing the query: ' . mysqli_error($conn);
        }
    }
    ?>

    <div class="login-container">
        <div class="loginbox-container">
            <form action="login.php" method="post" enctype="multipart/form-data">
                <h2>Login</h2>
                <?php
                if (isset($message)) {
                    foreach ($message as $message) {
                        echo '<div class="error-message">' . $message . '</div>';
                    }
                }
                ?>
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="text" name="email" placeholder="enter email" class="box">
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" placeholder="enter password" class="box">
                </div>
                <input type="submit" value="Log In" class="btn">
                <p>don't have an account? <a href="register.php">register now</a></p>
            </form>
        </div>
    </div>

    <?php include("footer.inc"); ?>
</body>

</html>