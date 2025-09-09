<?php
// University configuration
$university_name = "Excellence University";
$tagline = "Empowering Minds, Shaping Futures";
$current_year = date('Y');

// Sample data that would typically come from a database
$programs = [
    ['name' => 'Computer Science', 'description' => 'Cutting-edge technology and programming skills', 'image' => 'https://images.unsplash.com/photo-1517077304055-6e89abbf09b0?w=300&h=200&fit=crop'],
    ['name' => 'Business Administration', 'description' => 'Leadership and management excellence', 'image' => 'https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=300&h=200&fit=crop'],
    ['name' => 'Engineering', 'description' => 'Innovation in design and technology', 'image' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=300&h=200&fit=crop'],
    ['name' => 'Medicine', 'description' => 'Healthcare and medical research', 'image' => 'https://images.unsplash.com/photo-1559757175-0eb30cd8c063?w=300&h=200&fit=crop']
];

$news = [
    ['title' => 'New Research Center Opens', 'date' => '2025-08-15', 'summary' => 'State-of-the-art facility for advanced research in AI and robotics.'],
    ['title' => 'Record Enrollment This Year', 'date' => '2025-08-10', 'summary' => 'University welcomes largest incoming class in history.'],
    ['title' => 'International Partnership Announced', 'date' => '2025-08-05', 'summary' => 'New collaboration with leading European universities.']
];

$stats = [
    ['number' => '25,000+', 'label' => 'Students'],
    ['number' => '1,200+', 'label' => 'Faculty'],
    ['number' => '150+', 'label' => 'Programs'],
    ['number' => '95%', 'label' => 'Graduate Employment Rate']
];

// Student services data
$student_services = [
    ['icon' => '🎓', 'title' => 'Academic Support', 'description' => 'Tutoring, study groups, and academic advising'],
    ['icon' => '🏥', 'title' => 'Health Services', 'description' => 'Campus health center and counseling services'],
    ['icon' => '🏠', 'title' => 'Housing', 'description' => 'On-campus dormitories and residence halls'],
    ['icon' => '💼', 'title' => 'Career Services', 'description' => 'Job placement, internships, and career guidance'],
    ['icon' => '🎯', 'title' => 'Student Activities', 'description' => 'Clubs, organizations, and campus events'],
    ['icon' => '💰', 'title' => 'Financial Aid', 'description' => 'Scholarships, grants, and financial assistance']
];

// Staff and admin services
$admin_services = [
    ['icon' => '👥', 'title' => 'Human Resources', 'description' => 'Employee services, benefits, and policies'],
    ['icon' => '📊', 'title' => 'Administration', 'description' => 'University governance and management'],
    ['icon' => '🔧', 'title' => 'IT Services', 'description' => 'Technical support and system management'],
    ['icon' => '🏢', 'title' => 'Facilities', 'description' => 'Campus maintenance and infrastructure'],
    ['icon' => '📈', 'title' => 'Finance', 'description' => 'Budget management and financial planning'],
    ['icon' => '📚', 'title' => 'Academic Affairs', 'description' => 'Curriculum development and faculty support']
];

// Library services
$library_services = [
    ['icon' => '📖', 'title' => 'Research Collections', 'description' => 'Extensive digital and physical collections'],
    ['icon' => '💻', 'title' => 'Study Spaces', 'description' => 'Quiet study areas and collaborative workspaces'],
    ['icon' => '🎓', 'title' => 'Research Assistance', 'description' => 'Librarian support and research guidance'],
    ['icon' => '📱', 'title' => 'Digital Resources', 'description' => 'Online databases and e-books'],
    ['icon' => '🖨️', 'title' => 'Printing Services', 'description' => 'Printing, scanning, and copying facilities'],
    ['icon' => '📅', 'title' => 'Room Booking', 'description' => 'Reserve study rooms and meeting spaces']
];

// Library stats
$library_stats = [
    ['number' => '2.5M+', 'label' => 'Books & Resources'],
    ['number' => '500+', 'label' => 'Study Seats'],
    ['number' => '24/7', 'label' => 'Digital Access'],
    ['number' => '50+', 'label' => 'Databases']
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $university_name; ?> - <?php echo $tagline; ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #fff;
        }

        /* Header Styles */
        header {
            background: linear-gradient(135deg, #9B2E2E 0%, #7A1E1E 100%);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
            color: white;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: all 0.3s;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .nav-links a:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }

        /* Quick Access Bar */
        .quick-access {
            background: #9B2E2E;
            padding: 0.5rem 0;
            text-align: center;
        }

        .quick-access-links {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: center;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .quick-access a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            padding: 0.3rem 1rem;
            border-radius: 15px;
            transition: all 0.3s;
            background: rgba(255,255,255,0.1);
        }

        .quick-access a:hover {
            background: rgba(255,255,255,0.2);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(155,46,46,0.85), rgba(30,60,114,0.85)),
        url('https://images.unsplash.com/photo-1562774053-701939374585?w=1920&h=1080&fit=crop') center/cover no-repeat;
            color: white;
            height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
           
        }

        .hero-content p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 12px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            display: inline-block;
        }

        .btn-primary {
            background: #9B2E2E;
            color: white;
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        /* Stats Section */
        .stats {
            background: #f8f9fa;
            padding: 4rem 0;
        }

        .stats-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 0 2rem;
        }

        .stat-item {
            text-align: center;
            padding: 2rem;
            background: white;
            border-radius: 10px;
             box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .stat-item:hover {
            transform: translateY(-5px);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1e3c72;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: #666;
        }

        /* Section Styles */
        .section {
            padding: 5rem 0;
        }

        .section-alt {
            background: #f8f9fa;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: #ffffcc ;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Service Grid */
        .service-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s;
            border-top: 4px solid #ff6b35;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            display: block;
        }

        .service-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: #1e3c72;
        }

        /* Programs Section */
        .programs-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .program-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }

        .program-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .program-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .program-content {
            padding: 1.5rem;
        }

        .program-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            color: #1e3c72;
        }

        /* Library Special Styling */
        .library {
            background: linear-gradient(135deg, #ffffcc 0%, #ffeb99 100%);
            color: black;
        }

        .library .section-title {
            color: black;
        }

        .library .service-card {
            background: rgba(255,255,255,0.95);
            border-top: 4px solid #667eea;
        }

        .library .stats-container {
            margin-top: 3rem;
        }

        .library .stat-item {
            background: rgba(255,255,255,0.95);
        }

        /* News Section */
        .news-grid {
            display: grid;
            gap: 2rem;
            margin-top: 3rem;
        }

        .news-item {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            border-left: 4px solid #ff6b35;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .news-item:hover {
            transform: translateX(5px);
        }

        .news-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .news-title {
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 1rem;
            color: black; /* ✅ already black */
        }

        /* ✅ Make the section heading "Latest News" black */
        .section-news .section-title {
            color: black;
        }

       

        /* Tab System for User Types */
        .user-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 3rem;
            border-bottom: 2px solid #eee;
        }

        .tab-button {
            background: none;
            border: none;
            padding: 1rem 2rem;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 600;
            color: #666;
            transition: all 0.3s;
            border-bottom: 3px solid transparent;
        }

        .tab-button.active {
            color: #1e3c72;
            border-bottom-color: #ff6b35;
        }

        .tab-content {
            display: none;
        }

        .tab-content.active {
            display: block;
        }

        /* Footer */
        footer {
            background: #1e3c72;
            color: white;
            padding: 3rem 0 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #ff6b35;
        }

        .footer-section p, .footer-section li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section a:hover {
            color: #ff6b35;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            border-top: 1px solid #2a5298;
            margin-top: 2rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-links {
                flex-direction: column;
                gap: 1rem;
            }

            .hero-content h1 {
                font-size: 2.5rem;
            }

            .hero-content p {
                font-size: 1.1rem;
            }

            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }

            .quick-access-links {
                flex-direction: column;
                gap: 0.5rem;
            }

            .user-tabs {
                flex-direction: column;
            }

            .tab-button {
                padding: 0.8rem 1rem;
            }

            .service-grid {
                grid-template-columns: 1fr;
            }

            .programs-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav>
            <a href="#" class="logo"><?php echo $university_name; ?></a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#programs">Programs</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#library">Library</a></li>
                <li><a href="#admissions">Admissions</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <!-- Quick Access Bar -->
    <div class="quick-access">
        <div class="quick-access-links">
            <a href="#student-portal">Student Portal</a>
            <a href="#staff-portal">Staff Portal</a>
            <a href="#library-catalog">Library Catalog</a>
            <a href="#email">Webmail</a>
            <a href="#calendar">Academic Calendar</a>
            <a href="#directory">Directory</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-content">
            <h1><?php echo $university_name; ?></h1>
            <p><?php echo $tagline; ?></p>
            <div class="cta-buttons">
                <a href="#programs" class="btn btn-primary">Explore Programs</a>
                <a href="#admissions" class="btn btn-secondary">Apply Now</a>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="stats-container">
            <?php foreach ($stats as $stat): ?>
            <div class="stat-item">
                <div class="stat-number"><?php echo $stat['number']; ?></div>
                <div class="stat-label"><?php echo $stat['label']; ?></div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Services Section -->
    <section class="section" id="services">
        <div class="container">
            <h2 class="section-title">University Services</h2>
            
            <!-- User Type Tabs -->
            <div class="user-tabs">
                <button class="tab-button active" onclick="showTab('students')">Students</button>
                <button class="tab-button" onclick="showTab('staff')">Staff & Admin</button>
            </div>

            <!-- Student Services Tab -->
            <div id="students" class="tab-content active">
                <div class="service-grid">
                    <?php foreach ($student_services as $service): ?>
                    <div class="service-card">
                        <span class="service-icon"><?php echo $service['icon']; ?></span>
                        <h3 class="service-title"><?php echo $service['title']; ?></h3>
                        <p><?php echo $service['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Staff & Admin Services Tab -->
            <div id="staff" class="tab-content">
                <div class="service-grid">
                    <?php foreach ($admin_services as $service): ?>
                    <div class="service-card">
                        <span class="service-icon"><?php echo $service['icon']; ?></span>
                        <h3 class="service-title"><?php echo $service['title']; ?></h3>
                        <p><?php echo $service['description']; ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- Library Section -->
    <section class="section library" id="library">
        <div class="container">
            <h2 class="section-title">University Library</h2>
            <div class="service-grid">
                <?php foreach ($library_services as $service): ?>
                <div class="service-card">
                    <span class="service-icon"><?php echo $service['icon']; ?></span>
                    <h3 class="service-title"><?php echo $service['title']; ?></h3>
                    <p><?php echo $service['description']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Library Stats -->
            <div class="stats-container">
                <?php foreach ($library_stats as $stat): ?>
                <div class="stat-item">
                    <div class="stat-number"><?php echo $stat['number']; ?></div>
                    <div class="stat-label"><?php echo $stat['label']; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="section section-alt" id="programs">
        <div class="container">
            <h2 class="section-title">Our Programs</h2>
            <div class="programs-grid">
                <?php foreach ($programs as $program): ?>
                <div class="program-card">
                    <img src="<?php echo $program['image']; ?>" alt="<?php echo $program['name']; ?>" class="program-image">
                    <div class="program-content">
                        <h3 class="program-title"><?php echo $program['name']; ?></h3>
                        <p><?php echo $program['description']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="section-news">
        <div class="container">
            <h2 class="section-title">Latest News</h2>
            <div class="news-grid">
                <?php foreach ($news as $article): ?>
                <div class="news-item">
                    <div class="news-date"><?php echo date('F j, Y', strtotime($article['date'])); ?></div>
                    <h3 class="news-title"><?php echo $article['title']; ?></h3>
                    <p><?php echo $article['summary']; ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Contact Information</h3>
                <p>123 University Avenue<br>
                Academic City, AC 12345<br>
                Phone: (555) 123-4567<br>
                Email: info@excellenceuniversity.edu</p>
            </div>
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#admissions">Admissions</a></li>
                    <li><a href="#academics">Academics</a></li>
                    <li><a href="#research">Research</a></li>
                    <li><a href="#library">Library</a></li>
                    <li><a href="#student-services">Student Services</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Student Resources</h3>
                <ul>
                    <li><a href="#student-portal">Student Portal</a></li>
                    <li><a href="#course-catalog">Course Catalog</a></li>
                    <li><a href="#academic-calendar">Academic Calendar</a></li>
                    <li><a href="#financial-aid">Financial Aid</a></li>
                    <li><a href="#career-services">Career Services</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h3>Staff & Faculty</h3>
                <ul>
                    <li><a href="#staff-portal">Staff Portal</a></li>
                    <li><a href="#faculty-directory">Faculty Directory</a></li>
                    <li><a href="#hr-services">HR Services</a></li>
                    <li><a href="#it-support">IT Support</a></li>
                    <li><a href="#research-support">Research Support</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo $current_year; ?> <?php echo $university_name; ?>. All rights reserved.</p>
        </div>
    </footer>

    <script>
        function showTab(tabName) {
            // Hide all tab contents
            const tabContents = document.querySelectorAll('.tab-content');
            tabContents.forEach(content => {
                content.classList.remove('active');
            });

            // Remove active class from all buttons
            const tabButtons = document.querySelectorAll('.tab-button');
            tabButtons.forEach(button => {
                button.classList.remove('active');
            });

            // Show selected tab content
            document.getElementById(tabName).classList.add('active');
            
            // Add active class to clicked button
            event.target.classList.add('active');
        }

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navbar
        window.addEventListener('scroll', function() {
            const header = document.querySelector('header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(155, 46, 46, 0.95)';
            } else {
                header.style.background = 'linear-gradient(135deg, #9B2E2E 0%, #7A1E1E 100%)';
            }
        });
    </script>
</body>
</html>