<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('header.inc'); ?>
    <meta name="author" content="Tống Đức Từ Tâm">
    <link rel="stylesheet" href="Query(Take from Lab 10).css" type="text/css" />
    <title>HR Checking</title>
</head>

<body>
    <h1>HR Managing Site</h1>
    <form method="post" action="processEOI_Mananger.php">
        <p>
            <input type="submit" name="list_all_EOI" value="Show All Records">
        </p>
        <p>
        <label for="job_ref_num"> Job Reference Number
            <input type="text" name="job_ref_num">
        </label>
            <input type="submit" name="job_ref_action" value="Show All Records Based On Job Reference Number">
            <input type="submit" name="job_ref_action" value="Delete all EOIs with a specific Job Reference Number">
        </p>
        <label for="first_name"> First Name
            <input type="text" name="first_name">
        </label>
        <label for="last_name"> Last Name
            <input type="text" name="last_name">
        </label>
        <input type="submit" value="Show All Records Based On First Name and/or Last Name">
        </p>
        <p>
            <label for="EOINUM"> EOI Number
                <input type="text" name="EOINUM">
            </label>
            <label for="Status"> New Status
                <input type="text" name="Status">
            </label>
        <input type="submit" name="Change" value="Change the status base on EOI NUM">
        </p>
    </form>
</body>

</html>