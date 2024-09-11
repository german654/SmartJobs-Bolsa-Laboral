<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Jobly</title>
  <link rel="stylesheet" href="../styles/jobster.css">
</head>
<body>

  <!-- Navbar -->
  <header>
    <nav class="navbar">
      <div class="logo">Jobly</div>
      <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="./dashboard.php">Jobs</a></li>
        <li><a href="#">Categories</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Pages</a></li>
      </ul>
      <div class="auth">
        <a href="#" class="login-btn">Log In / Register</a>
      </div>
    </nav>
  </header>

  <!-- Main Section -->
  <section class="main-section">
    
    <div>
      <h1>Get your dream job with Jobly.</h1>
      <p>Find jobs, create trackable resumes and enrich your applications.</p>
      <div class="search-bar">
        <input type="text" placeholder="Job Title, Keywords...">
        <button>Find Jobs</button>
      </div>
      <div class="categories">
        <p>Popular Categories:</p>
        <ul>
          <li>Customer Services</li>
          <li>Project Management</li>
          <li>Development</li>
        </ul>
      </div>
    </div>

    <!-- Circular Images -->
    <div class="circle-container" id="circleContainer">
        <div class="circle-item">
            <img src="../images/user1.jpg" alt="User 1"  style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user2.jpg" alt="User 2"  style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user3.jpg" alt="User 3"  style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user4.jpg" alt="User 4"  style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user5.jpg" alt="User 5"  style="width: 100px; height: 100px;">
        </div>
        <div class="circle-item">
            <img src="../images/user6.jpg" alt="User 6"  style="width: 100px; height: 100px;">
        </div>
    </div>
  </section>

  <script src="../scripts/jobster.js"></script>
</body>
</html>
