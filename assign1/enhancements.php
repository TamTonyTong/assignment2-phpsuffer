<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Enhancements page of IT company">
  <meta name="keywords" content="job-hunting, job-finding, top 1 in finding job">
  <meta name="author" content="Tống Đức Từ Tâm">
  <title>Enhancements</title>
  <link href="styles/style.css" rel="stylesheet">
  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <!--Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
    <link rel="icon" type="image/x-icon" href="images/logo-web.png">
</head>

<body>
  <?php $currentPage='enhancements';
   include("header.inc");?>
  <div class="enhancements">
    <h2>List of Enhancements:<span class="h-enhancement-bolding"><span></span></span> </h2>
    <ul class="enhancements-list">
      <li>
        <h3>Enhanced Navigation:</h3>
        <p>The navigation bar utilizes a dynamic effect, highlighting the relevant web page tab by focusing it when the user navigates to that section.</p>
        <img src="images/1st-enhancement.png" id="first-enhancement-pic" alt="1st-enhancement">
      </li>
      <li>
        <h3>Interactive Index Page:</h3>
        <p>The index page features an animated number display that automatically changes each time you enter the page, adding a touch of dynamism.</p>
        <img src="images/2nd-enhancement.png" id="second-enhancement-pic" alt="2nd-enhancement">
      </li>
      <li>
        <h3>Engaging Job Descriptions:</h3>
        <p>In the job description page, a hover effect brings the text box to life, scaling it up for better focus. Additionally, hovering over the apply button changes its color, creating a clear call to action.</p>
          <img src="images/3rd-enhancement.png" id="third-enhancement-pic" alt="3rd-enhancement">
      </li>
      <li>
        <h3>Smooth Footer Animation:</h3>
        <p>The footer section boasts three moving bars that animate continuously and smoothly, offering subtle visual interest.</p>
        <img src="images/4th-enhancement.png" id="fourth-enhancement-pic" alt="4th-enhancement">
      </li>
      <li>
        <h3>Interactive About Us Page:</h3>
        <p>The icons on the About Us page are interactive, scaling up slightly when you hover over them, inviting exploration.</p>
          <img src="images/5th-enhacement.png" id="fifth-enhancement-pic" alt="5th-enhacement">
      </li>
    </ul>
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