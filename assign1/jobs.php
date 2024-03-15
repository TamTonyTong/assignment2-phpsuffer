<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jobs Vacancy page of IT company">
  <meta name="keywords" content="job-hunting, job-finding, top 1 in finding job">
  <meta name="author" content="Huỳnh Nguyễn Quốc Bảo">
  <title>Job Vacancy</title>
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
<<<<<<< Updated upstream:assign1/jobs.php
<?php $currentPage='jobs';
include('header.inc');?>
=======
  <?php $currentPage = 'jobs';
  require_once('menu.inc'); ?>
  <h1 id="applyh1">Job Descriptions</h1>
  </div>
  </header>
>>>>>>> Stashed changes:assign2/jobs.php
  <!--Job list-->
  <div class="jobs-list-container">
    <h2>5 Jobs</h2>
    <div class="jobs-container">
      <!--Job 1-->
      <div class="job">
        <img src="images/Logo-black.png" alt="images" class="logo-black">
        <h3 class="job-title">Data Scientist</h3>
        <section class="details">
          <h4>Position Details</h4>
          <ol>
            <li><span class="bolding">Company Position Reference:</span> DS467</li>
            <li><span class="bolding">Position Title:</span> Data Scientist</li>
            <li><span class="bolding">Brief Description:</span> Analyze and interpret complex datasets to identify
              trends and patterns.</li>
            <li><span class="bolding">Salary Range:</span> $90,000 - $120,000 per annum</li>
            <li><span class="bolding">Reporting To:</span> Chief Data Officer</li>
          </ol>
          <h4>Key Responsibilities</h4>
          <ul>
            <li>Develop predictive models and machine learning algorithms.</li>
            <li>Collaborate with cross-functional teams to identify opportunities for data-driven decision-making.</li>
            <li>Present findings and insights to stakeholders in a clear and understandable manner.</li>
          </ul>

          <h4>Required Qualifications</h4>
          <ul>
            <li class="bolding-first-line">Required:</li>
            <li>Bachelor's or Master's degree in Data Science, Statistics, Computer Science, or related field.</li>
            <li>Proficiency in programming languages such as Python, R, or SQL.</li>
            <li class="bolding-first-line">Preferable:</li>
            <li>Experience with big data technologies (Hadoop, Spark).</li>
          </ul>
        </section>
        <aside>
          <p><strong><em>*Salary depends on experience*</em></strong></p>
        </aside>
        <a href="apply.html" class="Apply-btn"><strong>Apply</strong></a>
        <span class="open-postion"><strong>4 open positions</strong></span>


      </div>
      <!--Job 2-->
      <div class="job">
        <img src="images/Logo-black.png" alt="images" class="logo-black">
        <h3 class="job-title">AI Engineer</h3>
        <section class="details">
          <h4>Position Details</h4>
          <ol>
            <li><span class="bolding">Company Position Reference:</span> AI567</li>
            <li><span class="bolding">Position Title:</span> AI Engineer</li>
            <li><span class="bolding">Brief Description:</span> Develop and implement AI solutions to solve complex
              business problems.</li>
            <li><span class="bolding">Salary Range:</span> $100,000 - $130,000 per annum</li>
            <li><span class="bolding">Reporting To:</span> Chief Technology Officer</li>
          </ol>

          <h4>Key Responsibilities</h4>
          <ul>
            <li>Design and implement machine learning models and algorithms.</li>
            <li>Collaborate with cross-functional teams to integrate AI into existing systems.</li>
            <li>Stay current with the latest advancements in AI and contribute to ongoing research and development.</li>
          </ul>

          <h4>Required Qualifications</h4>
          <ul>
            <li class="bolding-first-line">Essential:</li>
            <li>Master's or Ph.D. in Computer Science, Artificial Intelligence, or related field.</li>
            <li>Proficiency in programming languages such as Python, TensorFlow, or PyTorch. </li>
            <li class="bolding-first-line">Preferable:</li>
            <li>Experience with natural language processing and computer vision.</li>
          </ul>
        </section>
        <aside>
          <p><strong><em>*Salary depends on experience*</em></strong></p>
        </aside>
        <a href="apply.html" class="Apply-btn"><strong>Apply</strong></a>
        <span class="open-postion"><strong>4 open positions</strong></span>
      </div>

      <!--Job 3-->
      <div class="job">
        <img src="images/Logo-black.png" alt="images" class="logo-black">
        <h3 class="job-title">Senior Web Developer</h3>
        <section class="details">
          <h4>Position Details</h4>
          <ol>
            <li><span class="bolding">Company Position Reference:</span> XYZ123</li>
            <li><span class="bolding">Position Title:</span> Senior Web Developer</li>
            <li><span class="bolding">Brief Description:</span> Develop and maintain web applications, ensuring they
              meet the standards of functionality, usability, and security.</li>
            <li><span class="bolding">Salary Range:</span> $80,000 - $100,000 per annum</li>
            <li><span class="bolding">Reporting To:</span> Chief Technology Officer</li>
          </ol>
          <h4>Key Responsibilities:</h4>
          <ul>
            <li>Collaborate with cross-functional teams to design, develop, and implement web solutions.</li>
            <li>Write well-designed, efficient, and testable code.</li>
            <li>Conduct code reviews and provide constructive feedback to other team members.</li>
          </ul>
          <h4>Required Qualifications:</h4>
          <ul>
            <li class="bolding-first-line">Essential:</li>
            <li>Bachelor's degree in Computer Science or related field.</li>
            <li>Proficient in HTML, CSS, JavaScript, and related technologies.</li>
            <li class="bolding-first-line">Preferable:</li>
            <li>Master's degree in Computer Science.</li>
            <li>Knowledge of cloud-based services (AWS, Azure).</li>
          </ul>
        </section>
        <aside>
          <p><strong><em>*Salary depends on experience*</em></strong></p>
        </aside>
        <a href="apply.html" class="Apply-btn"><strong>Apply</strong></a>
        <span class="open-postion"><strong>4 open positions</strong></span>
      </div>

      <!--Job 4-->
      <div class="job">
        <img src="images/Logo-black.png" alt="images">
        <h3 class="job-title">IT Manager</h3>
        <section class="details">

          <h4>Position Details</h4>
          <ol>
            <li><span class="bolding">Company Position Reference:</span> IT789</li>
            <li><span class="bolding">Position Title:</span> IT Manager</li>
            <li><span class="bolding">Brief Description:</span> Lead and manage the IT department, ensuring the
              effective use of technology to support business goals.</li>
            <li><span class="bolding">Salary Range:</span> $90,000 - $120,000 per annum</li>
            <li><span class="bolding">Reporting To:</span> Chief Information Officer</li>
          </ol>

          <h4>Key Responsibilities</h4>
          <ul>
            <li>Lead and supervise the IT team, providing guidance and support.</li>

            <li>Oversee the management of IT projects, ensuring they are delivered on time and within budget.</li>
            <li>Collaborate with other departments to understand their technology needs and provide solutions.</li>
          </ul>

          <h4>Required Qualifications</h4>
          <ul>
            <li class="bolding-first-line">Essential:</li>
            <li>Bachelor's degree in Information Technology, Computer Science, or a related field.</li>
            <li>Proven experience in IT management and leadership roles.</li>
            <li class="bolding-first-line">Preferable:</li>
            <li>Certifications such as ITIL or PMP.</li>
          </ul>
        </section>
        <aside>
          <p><strong><em>*Salary depends on experience*</em></strong></p>
        </aside>
        <a href="apply.html" class="Apply-btn"><strong>Apply</strong></a>
        <span class="open-postion"><strong>4 open positions</strong></span>
      </div>

      <!--Job 5-->
      <div class="job">
        <img src="images/Logo-black.png" alt="images">
        <h3 class="job-title">Network Administrator</h3>
        <section class="details">
          <h4>Position Details</h4>
          <ol>
            <li><span class="bolding">Company Position Reference:</span> NA456</li>
            <li><span class="bolding">Position Title:</span> Network Administrator</li>
            <li><span class="bolding">Brief Description:</span> Design, Implement, and maintain our
              organization's networks and communication systems.</li>
            <li><span class="bolding">Salary Range:</span> $75,000 - $100,000 per annum</li>
            <li><span class="bolding">Reporting To:</span> IT Manager</li>
          </ol>

          <h4>Key Responsibilities</h4>
          <ul>
            <li>Design and deploy functional networks, ensuring high availability and performance.</li>
            <li>Configure and install software, servers, routers, and other network devices.</li>
            <li>Monitor network performance and troubleshoot issues.</li>
            <li>Collaborate with the IT team to ensure security and compliance of network systems.</li>
          </ul>

          <h4>Required Qualifications</h4>
          <ul>
            <li class="bolding-first-line">Essential:</li>
            <li>Bachelor's degree in Information Technology, Computer Science, or a related field.</li>
            <li>Proven experience as a Network Administrator or similar role.</li>
            <li class="bolding-first-line">Preferable:</li>
            <li>Certifications such as CCNA or CompTIA Network+.</li>
          </ul>
        </section>
        <aside>
          <p><strong><em>*Salary depends on experience*</em></strong></p>
        </aside>
        <a href="apply.html" class="Apply-btn"><strong>Apply</strong></a>
        <span class="open-postion"><strong>4 open positions</strong></span>
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