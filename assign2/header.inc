<!--Header and navbar-->
  <header>
    <nav>
      <a href="#home" class="logo"><img src="images/Logo.png" alt ="logo" class = "logo"></a>
      <input type="checkbox" id="dropdown-btn">
      <label for="dropdown-btn">
        <span class="fa-solid fa-bars"></span>
      </label>
      <ul id="nav_bar">
      <li><a href="index.php" <?php if($currentPage === 'home') echo 'class="active"' ?>>Home</a></li>
      <li><a href="about.php" <?php if($currentPage === 'about') echo 'class="active"' ?>>About Us</a></li>
      <li><a href="enhancements.php" <?php if($currentPage === 'enhancements') echo 'class="active"' ?>>Enhancements</a></li>
      <li><a href="jobs.php" <?php if($currentPage === 'jobs') echo 'class="active"' ?>>Job Descriptions</a></li>
      </ul>
    </nav>
  <div class="banner">
          <!--Analysis table-->
    <!-- <div class="analysis_table"> -->
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