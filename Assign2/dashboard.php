<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("header.inc"); ?>
    <meta name="author" content="Huỳnh Nguyễn Quốc Bảo">
    <title>Dashboard</title>
</head>

<body>
    <header>
        <?php
        $currentPage = 'dashboard';
        include('menu.inc');
        ?>
        <div class="banner">
            <h1 id="applyh1">Dashboard</h1>
        </div>
    </header>

    <?php
        include 'config.php';
        session_start();
        $user_id = $_SESSION['userId'];
        
        if(!isset($user_id)){
            header('location:login.php');
        };
        
        if(isset($_GET['logout'])){
            unset($user_id);
            session_destroy();
            header('location:login.php');
        }
    ?>

    <div class="dashboard-container">

        <div class="profile">
            <?php
                $select = mysqli_query($conn, "SELECT * FROM `user_form` WHERE id = '$user_id'") or die('query failed');
                if(mysqli_num_rows($select) > 0){
                    $fetch = mysqli_fetch_assoc($select);
                }
                if($fetch['image'] == ''){
                    echo '<img src="images/default-avatar.png">';
                }else{
                    echo '<img src="uploaded_img/'.$fetch['image'].'">';
                }
            ?>
            <h3><?php echo $fetch['name']; ?></h3>
            <a href="update_profile.php" class="btn">update profile</a>
            <a href="home.php?logout=<?php echo $user_id; ?>" class="delete-btn">logout</a>
            <p>new <a href="login.php">login</a> or <a href="register.php">register</a></p>
        </div>

    </div>

    <?php include("footer.inc"); ?>
</body>

</html>