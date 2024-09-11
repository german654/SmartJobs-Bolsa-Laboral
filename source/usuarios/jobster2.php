<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobster - Find the perfect job for you</title>
    <link rel="stylesheet" href="../styles/jobster2.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">jobster</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Find Jobs</a></li>
                <li><a href="#">Companies</a></li>
                <li><a href="#">Candidates</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
            </ul>
            <div class="buttons">
                <button class="btn btn-primary">Post a Job</button>
                <button class="btn btn-secondary">Sign in</button>
            </div>
        </nav>
    </header>

    <main>
        <div class="content">
            <h1>Find the perfect <span class="highlight">job</span> for you</h1>
            <p>Search your career opportunity through 12,800 jobs</p>
            <form class="search-form">
                <input type="text" placeholder="Job Title or Keyword">
                <input type="text" placeholder="Location">
                <button type="submit">
                    <img src="search-icon.svg" alt="Search">
                </button>
            </form>
            <div class="popular-searches">
                <h3>Popular Searches</h3>
                <div class="tags">
                    <a href="#" class="tag">Work from home</a>
                    <a href="#" class="tag">Part-time</a>
                    <a href="#" class="tag">Administration</a>
                    <a href="#" class="tag">Finance</a>
                    <a href="#" class="tag">Retail</a>
                    <a href="#" class="tag">IT</a>
                    <a href="#" class="tag">Engineering</a>
                    <a href="#" class="tag">Sales</a>
                    <a href="#" class="tag">Manufacturing</a>
                </div>
            </div>
        </div>
        <div class="image-container">
            <img src="../images/professional-woman.jpg" alt="Professional woman" class="main-image">
            <div class="job-offers">
                <h3>Job offers</h3>
                <ul>
                    <li><span>120</span> job offers in Project Management</li>
                    <li><span>176</span> job offers in Customer Service</li>
                    <li><span>286</span> job offers in Business Development</li>
                </ul>
            </div>
        </div>
    </main>

    <footer>
        <div class="partner-logos">
            <!-- Add partner logos here -->
        </div>
    </footer>

    <script src="../scripts/jobster2.js"></script>
</body>
</html>