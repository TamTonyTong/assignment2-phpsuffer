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
        <fieldset>
    <select name="query_type">
        <option value="Show All Records">Show All Records</option>
        <option value="Show Records by Job Reference Number">Show Records by Job References Number</option>
        <option value="Show Records by Names">Show Records by Names</option>
        <option value="Delete Records by Job Reference Number">Delete Records by Job Reference Number</option>
        <option value="Change Status of an EOI">Change Status of an EOI</option>
    </select>
        </fieldset>
        <br>
        <p>
        <label for="job_ref_num"> Job Reference Number
            <input type="text" name="job_ref_num">
        </label>
        </p>
        <label for="first_name"> First Name
            <input type="text" name="first_name">
        </label>
        <label for="last_name"> Last Name
            <input type="text" name="last_name">
        </label>
        </p>
        <p>
            <label for="EOINUM"> EOI Number
                <input type="text" name="EOINUM">
            </label>
            <label for="Status"> New Status
                <input type="text" name="Status">
            </label>
        </p>
        <input type="submit" value="Submit">

    </form>
    
</body>

</html>