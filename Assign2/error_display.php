<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EOI Submission Error</title>
    <link rel="stylesheet" type="text/css" href="styles/error.css">
</head>
<body>
    <div class="error-container">
        <h1>EOI Submission Error</h1>
        <p>There was an error processing your Expression of Interest submission. Please review the errors below:</p>
        <div class="error-message">
            <?php 
            $errors= $_POST["afjsdnf"];
            echo $errors; 
            echo "<a href='apply.php'>Go back to the form</a> ";?>
        </div>
        <p><a href="apply.php">Go back to the form</a></p>
    </div>
</body>
</html>
