<!DOCTYPE html>
<html lang="en">
<head>
  <?php include("header.inc");?>
  <meta name="author" content="Tống Đức Từ Tâm">
  <title>Job Application</title>
</head>

<body>
  <?php $currentPage='apply';
  require_once('menu.inc');?>
  <h1 id="applyh1">Job Application Form</h1>
    </div>
  </header>
  <div class="job-applying-container">
    <!--Please remember to required all the forms - Tam Tong-->
    <div class="applying-basic-info">
      <h2>Personal Information</h2>
      <hr>
      <form method="post" action="processEOI.php" novalidate="novalidate">
        <p id="asterisk"><em><strong>Required fields</strong></em></p>
        <label for="job_ref_num"> Job Reference Number</label>
        <input type="text" name="job_ref_num" id="job_ref_num" size="20" pattern="[a-zA-Z0-9]{5}" placeholder="SWS05"
          title="Please enter exactly 5 aplphanumeric characters" >
        <div class="name-container">
          <div>
            <label for="first_name"> First Name</label>
            <input type="text" name="first_name" id="first_name" size="20" pattern="[A-Za-z]{1,20}"
              title="Only maximum of 20 alphabetical characters allowed" >
          </div>

          <div id="last_name_align">
            <label for="last_name" id="last_name1"> Last Name</label>
            <input type="text" name="last_name" id="last_name" size="20" pattern="[A-Za-z]{1,20}"
              title="Only maximum of 20 alphabetical characters allowed" >
          </div>
        </div>

        <label for="date_of_birth"> Date of Birth</label>
        <input type="date" name="date_of_birth" id="date_of_birth" size="20" title="Please Enter your D.O.B" >

        <div class="gender">
          <fieldset>
            <legend>Gender</legend>
            <label class="container">
              <input type="radio" name="gender" value="Men" title="Please choose your gender" >Men
              <span class="checkmark"></span>
            </label>
            <label class="container">Women
              <input type="radio" name="gender" value="Women">
              <span class="checkmark"></span>
            </label>
          </fieldset>
        </div>



        <label for="street_address">Street Address</label>
        <input type="text" name="street_address" id="street_address" size="30" maxlength="40" >

        <label for="suburb_town">Suburb Town</label>
        <input type="text" name="suburb_town" id="suburb_town" size="30" maxlength="40" >


        <label id="statecuztomize" for="state">State</label>

        <select name="state" id="state" >
          <option value="">Please Select</option>
          <option value="VIC">VIC</option>
          <option value="NSW">NSW</option>
          <option value="QLD">QLD</option>
          <option value="NT">NT</option>
          <option value="WA">SA</option>
          <option value="SA">SA</option>
          <option value="TAS">TAS</option>
          <option value="ACT">ACT</option>
        </select>
        <input id="blank">


        <label for="postcode">Postcode</label>
        <input type="text" name="postcode" id="postcode" size="10" pattern="\d{4}" title="Please enter exact 4 digits" >

        <label for="email">Email</label>
        <input type="email" name="email" id="email" >

        <label for="phone_num">Phone Number</label>
        <input type="text" name="phone_num" id="phone_num" pattern="[0-9\s]{8,12}" title="Please enter from 8 to 12 digits" >

        <div class="skill_list">
          <h2>Skills List</h2>
          <label class="container">Programming Languages
            <input type="checkbox" name="skill1" value="Programming Languages" >
            <span class="checkmark"></span>
          </label>

          <label class="container">Web Development
            <input type="checkbox" name="skill2" value="Web Development">
            <span class="checkmark"></span>
          </label>


          <label class="container">Database Management
            <input type="checkbox" name="skill3" value="Database Management">
            <span class="checkmark"></span>
          </label>


          <label class="container">Cloud Computing
            <input type="checkbox" name="skill4" value="Cloud Computing">
            <span class="checkmark"></span>
          </label>


          <label class="container">Cybersecurity
            <input type="checkbox" name="skill5" value="Cybersecurity">
            <span class="checkmark"></span>
          </label>



          <label class="container">Other Skills
            <input type="checkbox" name="skill6" value="Other Skills">
            <span class="checkmark"></span>
          </label>

          <br><textarea name="other_skill" rows="5" cols="75" placeholder="Write your other skills here..."></textarea>
        </div>

        <input type="submit" value="Apply" id="apply">

        <hr>
      </form>
    </div>
  </div>
  
  <?php include("footer.inc");?>

</body>
</html>