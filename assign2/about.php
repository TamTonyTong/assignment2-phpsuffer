<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="About Us page of IT company">
  <meta name="keywords" content="job-hunting, job-finding, top 1 in finding job">
  <meta name="author" content="Huỳnh Nguyễn Quốc Bảo">
  <title>About Us</title>
  <link href="styles/style.css" rel="stylesheet">
  <!--Icons-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/logo-web.png">
</head>

<body>
  <?php $currentPage='about';
  include('header.inc');?>
  <h1 id="applyh1">About Us</h1>
    </div>
  </header>
  <!--Introduction-->
  <div class="about-section">
    <div class="inner-container">
      <h1>About Us</h1>
      <p class="text">
        We are a passionate group of Computer Science students dedicated to making the world a
        more sustainable place. Founded in 2024 with the belief that innovative technology can solve real-world
        problems, we develop software solutions for homes and businesses. We believe in transparency, collaboration, and
        exceeding expectations, and we're always looking for ways to improve our products and services.
        We invite you to learn more about our mission and join us in creating a brighter future!
      </p>
      <section class="course-info">
        <h2>Course Information</h2>
        <dl>
          <dt>Name:</dt>
          <dd>PHP Suffer</dd>
          <dt>Group ID:</dt>
          <dd>SOS04</dd>
          <dt>Tutor's Name</dt>
          <dd>Eric Le</dd>
          <dt>Group Email:</dt>
          <dd><a href="mailto:tonytutam@gmail.com">tonytutam@gmail.com</a></dd>
        </dl>
        <figure class="profile">
          <img src="images/profile.png" alt="Your Profile Picture">
        </figure>

      </section>

    </div>
  </div>
  <!--COURSE INFORMATION-->
  <div class="table-style">
  <h2>Time Table</h2>
  <table>
    <thead>
      <tr>
        <th>Days in Week/Times</th>
        <td class="table-align-center">Monday</td>
        <td class="table-align-center">Tuesday</td>
        <td class="table-align-center">Wednesday</td>
        <td class="table-align-center">Thursday</td>
        <td class="table-align-center">Friday</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>9:00 AM - 10:00 AM</td>
        <td colspan="5" class="table-align-center">Team meeting</td>
      </tr>
      <tr>
        <td>10:00 AM - 12:00 PM</td>
        <td colspan="5" class="table-align-center">Individual work time</td>
      </tr>
      <tr>
        <td>12:00 PM - 1:00 PM</td>
        <td colspan="5" class="table-align-center">Lunch break</td>
      </tr>
      <tr>
        <td>1:00 PM - 3:00 PM:</td>
        <td colspan="5" class="table-align-center">Individual work time</td>
      </tr>
      <tr>
        <td>3:00 PM - 4:00 PM</td>
        <td colspan="5" class="table-align-center">Collaborative task</td>
      </tr>
    </tbody>
  </table>
</div>
  <!--Team-->
  <div class="team-container">
    <!--Header-->
    <div class="team-header">
      <h1>Our Team</h1>
    </div>
    <div class="sub-container">
      <!--Team Image-->
      <div class="teams">
        <img src="images/Bao.jpg" alt="Huynh Nguyen Quoc Bao">
        <!--team member info-->
        <div class="name">Huynh Nguyen Quoc Bao</div>
        <div class="position">Team Leader</div>
        <div class="profile-socials">
          <a href="https://www.facebook.com/KallenKaslana213/"><span class="fa-brands fa-square-facebook"></span></a>
          <a href="https://twitter.com/Travis_Derp"><span class="fa-brands fa-square-twitter"></span></a>
          <a href="https://www.linkedin.com/in/huynh-nguyen-quoc-bao-6b7ab6236/"><span
              class="fa-brands fa-linkedin"></span></a>
          <a href="https://github.com/Travis-Houston"><span class="fa-brands fa-github"></span></a>
        </div>
      </div>

      <!--Team Image-->
      <div class="teams">
        <img src="images/Chi-Lon-Thon.png" alt="Le Hoang Triet Thong photo">
        <!--team member info-->
        <div class="name">Le Hoang Triet Thong</div>
        <div class="position">Team Members</div>
        <div class="profile-socials">
          <a href="https://www.facebook.com/chilonthon/"><span class="fa-brands fa-square-facebook"></span></a>
          <a href="https://www.linkedin.com/in/thong-le-5b26b6185/"><span class="fa-brands fa-linkedin"></span></a>
          <a href="https://github.com/AlecVOV"><span class="fa-brands fa-github"></span></a>
        </div>
      </div>

      <!--Team Image-->
      <div class="teams">
        <img id="tamtong" src="images/Tam-Tong.png" alt="Tong Duc Tu Tam photo">
        <!--team member info-->
        <div class="name">Tong Duc Tu Tam</div>
        <div class="position">Team Members</div>
        <div class="profile-socials">
          <a href="https://www.facebook.com/tongss.tamss.7/"><span class="fa-brands fa-square-facebook"></span></a>
          <a href="https://www.linkedin.com/in/tong-duc-tu-tam-989825196/"><span
              class="fa-brands fa-linkedin"></span></a>
          <a href="https://github.com/TamTonyTong"><span class="fa-brands fa-github"></span></a>
        </div>
      </div>
    </div>
  </div>


  <footer>
    <div class="row">
      <!--Logo and Description-->
      <div class="col">
        <img src="images/Logo.png" alt="logo" class="logo">
        <p>We're passionate about connecting top talent with their dream jobs within the job-hunting industry for IT
          Employees. Our personalized approach, tailored to your unique skills, combined with our expertise and deep
          network will accelerate your career search. Ready to take the next step? Explore our current openings or get
          in touch for expert guidance.</p>
      </div>

      <!--Contact Info-->
      <div class="col">
        <h3>Contact<span class="underline"><span></span></span></h3>
        <h3 id="email-id">Email us via:</h3>
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
    <p class="copyright">&copy;<a href="https://www.swinburne.edu.au">Swinburne University of Technology</a></p>
  </footer>
</body>

</html>