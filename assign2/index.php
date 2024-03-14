<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Home Page Of IT Company">
  <meta name="keywords" content="job-hunting, job-finding, top 1 in finding job">
  <meta name="author" content="Lê Hoàng Triết Thông">
  <link rel="stylesheet" href="styles/style.css">
  <!--Icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
  <!--Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="images/logo-web.png">
  <title>Home Page</title>
  </head>
  <body>
  
 <?php $currentPage='index';
  include("header.inc");?>
      <div class ="statitics">
        <h1>The Easiest Way To Get Your Job</h1>
            <ul id="statistics_bar">
              <li><div id ="countdown1"></div><hr><span class="material-symbols-outlined"> globe </span>Countries</li>
              <li><div id ="countdown2"></div><hr><span class="material-symbols-outlined">apartment</span> Companies</li>
              <li><div id ="countdown3"></div><hr><span class="material-symbols-outlined"> person_apron </span>Active Employees</li>
              <li><div id ="countdown4"></div><hr><span class="material-symbols-outlined">location_away </span>Clients</li>
            </ul>
        </div>
      </div>
  </header>  
    <div id="big_box">
      <div class="section-head">
        <h2>Why Choose Us?</h2>
        <p>We take the time to understand your specific skills, your ambitions, and the work culture that lights you up. We don't just fill positions, we change lives. When you land the perfect job, we celebrate alongside you. We're here every step of the way with resume refinement, interview prep, and inside insights that give you the competitive edge.</p>
      </div>
      
      <div>
        <div class="item"> <span class="icon feature_box_col_one"><i class="fa-solid fa-person"></i></span>
          <h2>Focused on the Individual</h2>
          <p>Other agencies treat you like a number. We take the time to understand your specific skills, your ambitions, and the work culture that lights you up. We don't just fill positions, we change lives. When you land the perfect job, we celebrate alongside you. The job hunt can be daunting. We're here every step of the way with resume refinement, interview prep, and inside insights that give you the competitive edge.</p>
        </div>
    
        <div class="item"> <span class="icon feature_box_col_two"><i class="fa-solid fa-handshake-simple"></i></span>
          <h2>Emphasis on Results</h2>
          <p>Our vast network and industry expertise mean you get connected to top opportunities you wouldn't find on your own. We don't just talk the talk; our numbers speak for themselves. We don't just follow job trends, we understand them. This keeps you ahead of the curve and in front of the right hiring managers.</p>
        </div>
    
        <div class="item"> <span class="icon feature_box_col_three"><i class="fa-solid fa-people-arrows"></i></span>
          <h2>Friendly and Human Approach</h2>
          <p>Because the job search shouldn't be soul-sucking. Let's be honest, it can be stressful. We inject some fun and optimism back into the process. No robots here! You'll work with real people who understand the local market and genuinely care about your future. We're your job-hunting cheerleaders. When you need a pep talk, or help translating "corporate speak", we've got your back.</p>
        </div>
    
        <div class="item"> <span class="icon feature_box_col_four"><i class="fa fa-database"></i></span>
          <h2>Tech-Savvy and Cutting Edge</h2>
          <p>Our proprietary matching technology goes beyond job boards, getting your resume in front of the right people, not just the ones with the right keywords. Insider connections made easy. We leverage data and social networks to unearth hidden opportunities and put you in direct contact with decision-makers. Your career in the fast lane. Our streamlined process is designed for a digital world, getting you from application to offer with unprecedented speed.</p>
        </div>
    
        <div class="item"> <span class="icon feature_box_col_five"><i class="fa-solid fa-magnifying-glass-chart"></i></span>
          <h2>Focus on the Benefit</h2>
          <p>We specialize in finding the perfect job for you -- the one that matches your unique skills and ambitions.  Whether you're in tech, the creative fields, healthcare, or beyond, our deep industry expertise means targeted placements and faster results. No more sifting through endless irrelevant job listings. Join our community of professionals for insider access, support, and knowledge-sharing that accelerates your career growth.</p>
        </div>
    
        <div class="item"> <span class="icon feature_box_col_six"><i class="fa-solid fa-business-time"></i></span>
          <h2>Values-Driven</h2>
          <p>More than a salary match. We find companies whose values and culture align with yours, because a true fit leads to long-term career satisfaction. Advocate for your worth. We're fiercely in your corner, negotiating not just compensation, but the benefits and flexibility that truly matter to you. Changing the industry, one placement at a time. We work with socially-conscious businesses and support candidates from diverse backgrounds to build a more equitable workforce.</p>
        </div>
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