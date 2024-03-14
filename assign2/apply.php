<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Job Application page of IT company">
  <meta name="keywords" content="job-hunting, job-finding, top 1 in finding job">
  <meta name="author" content="Tống Đức Từ Tâm">
  <link href="styles/style.css" rel="stylesheet">
  <title>Job Application</title>
  
  <!--Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <!--Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/logo-web.png">

</head>

<body>
  <?php $currentPage='apply';
  include('header.inc');?>
  <h1 id="applyh1">Job Application Form</h1>
    </div>
  </header>
  <div class="job-applying-container">
    <!--Please remember to required all the forms - Tam Tong-->
    <div class="applying-basic-info">
      <h2>Personal Information</h2>
      <hr>
      <form method="post" action="https://mercury.swin.edu.au/it000000/formtest.php">
        <p id="asterisk"><em><strong>Required fields</strong></em></p>
        <label for="job_ref_num"> Job Reference Number</label>
        <input type="text" name="job_ref_num" id="job_ref_num" size="20" pattern="[a-zA-Z0-9]{5}" placeholder="SWS05"
          title="Please enter exactly 5 aplphanumeric characters" required>
        <div class="name-container">
          <div>
            <label for="first_name"> First Name</label>
            <input type="text" name="first_name" id="first_name" size="20" pattern="[A-Za-z]{1,20}"
              title="Only maximum of 20 alphabetical characters allowed" required>
          </div>

          <div id="last_name_align">
            <label for="last_name" id="last_name1"> Last Name</label>
            <input type="text" name="last_name" id="last_name" size="20" pattern="[A-Za-z]{1,20}"
              title="Only maximum of 20 alphabetical characters allowed" required>
          </div>
        </div>

        <label for="date_of_birth"> Date of Birth</label>
        <input type="date" name="date_of_birth" id="date_of_birth" size="20" title="Please Enter your D.O.B" required>

        <div class="gender">
          <fieldset>
            <legend>Gender</legend>
            <label class="container">
              <input type="radio" name="gender" value="Men" title="Please choose your gender" required>Men
              <span class="checkmark"></span>
            </label>
            <label class="container">Women
              <input type="radio" name="gender" value="Women">
              <span class="checkmark"></span>
            </label>
          </fieldset>
        </div>



        <label for="street_address">Street Address</label>
        <input type="text" name="street_address" id="street_address" size="30" maxlength="40" required>

        <label for="suburb_town">Suburb Town</label>
        <input type="text" name="suburb_town" id="suburb_town" size="30" maxlength="40" required>


        <label id="statecuztomize" for="state">State</label>

        <select name="state" id="state" required>
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
        <input type="text" name="postcode" id="postcode" size="10" pattern="\d{4}" title="Please enter exact 4 digits" required>

        <label for="email">Email</label>
        <input type="email" name="email" id="email" required>

        <label for="phone_num">Phone Number</label>
        <input type="text" name="phone_num" id="phone_num" pattern="[0-9\s]{8,12}" title="Please enter from 8 to 12 digits" required>

        <div class="skill_list">
          <h2>Skills List</h2>
          <label class="container">Programming Languages
            <input type="checkbox" name="skill_list[]" value="Programming Languages" required>
            <span class="checkmark"></span>
          </label>

          <label class="container">Web Development
            <input type="checkbox" name="skill_list[]" value="Web Development">
            <span class="checkmark"></span>
          </label>


          <label class="container">Database Management
            <input type="checkbox" name="skill_list[]" value="Database Management">
            <span class="checkmark"></span>
          </label>


          <label class="container">Cloud Computing
            <input type="checkbox" name="skill_list[]" id="skill_list" value="Cloud Computing">
            <span class="checkmark"></span>
          </label>


          <label class="container">Cybersecurity
            <input type="checkbox" name="skill_list[]" value="Cybersecurity">
            <span class="checkmark"></span>
          </label>



          <label class="container">Other Skills
            <input type="checkbox" name="skill_list[]" value="Other Skills">
            <span class="checkmark"></span>
          </label>

          <br><textarea name="other_skills" rows="5" cols="75" placeholder="Write your other skills here..."></textarea>
        </div>

        <input type="submit" value="Apply" id="apply">

        <hr>
      </form>
    </div>
  </div>


  <footer>
    <div class="row">
      <!--Logo and Description-->
      <div class="col">
        <img src="images/Logo.png" alt ="logo" class = "logo">
        <p>We're passionate about connecting top talent with their dream jobs within the job-hunting industry for IT Employees. Our personalized approach, tailored to your unique skills, combined with our expertise and deep network will accelerate your career search. Ready to take the next step? Explore our current openings or get in touch for expert guidance.</p>
      </div>

      <!--Contact Info-->
      <div class="col">
        <h3>Contact<span class="underline"><span></span></span></h3>
        <h3 id ="email-id">Email us via:</h3>
        <h4>1. <a href="mailto:103804535@student.swin.edu.au">Bao</a></h4>
        <h4>2. <a href="mailto:104171146@student.swin.edu.au">Thong</a></h4>
        <h4>3. <a href="mailto:10477508@student.swin.edu.au">Tam</a></h4>
      </div>

      <!--Navigation-->
      <div class="col">
        <h3>Links <span class="underline"><span></span></span></h3>
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="enhancements.html">Enhancements</a></li>
            <li><a href="jobs.html">Job Descriptions</a></li>
            <li><a href="apply.html">Job Application</a></li>
            <li><a href="https://youtu.be/9ScsvjHyDCk">Group Video</a></li>
          </ul>
      </div>

      <!--Newsletter-->
      <div class="col">
        <h3>Newsletter<span class="underline"><span></span></span></h3>
        <form id="footer-form">
          <span class="fa-solid fa-envelope"></span>
          <input type="email" placeholder="Enter email please!">
          <button type="submit"><span class="fa-solid fa-newspaper">Apply</span></button>
        </form>
          <!--Social Icons-->
        <div class="social-icons">
          <span class="fa-brands fa-square-facebook"></span>
          <span class="fa-brands fa-square-twitter"></span>
          <span class="fa-brands fa-linkedin"></span>
        </div>
      </div>
    </div>
    <hr>
    <p class="copyright">&copy;<a href = "https://www.swinburne.edu.au">Swinburne University of Technology</a></p>
  </footer>
</body>
</html>