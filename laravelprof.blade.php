<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel profiler</title>
    <link rel="stylesheet" href="https://cdn.lineicons.com/5.1/solid/lineicons-solid.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/mystle.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <div class="wrapper">
        <aside id = "sidebar">
        <div class="d-flex">
            <button id="toggle-btn" type="button">
                <i class="lni lnis-menu-hamburger-1"></i>
            </button>
        </div>

    <div class="sidebar-profile">
        <img src="{{ asset('images/avatar.jpeg') }}" alt="Profile">
        <h3>Saloni</h3>
        <p>Laravel Developer</p>
    </div>
            <ul class = "sidebar-nav">
                <li class = "sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('home')"><i class="lni lnis-home-2"></i><span>Home</span></a>
                </li>
                <li class = "sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('projects')"><i class="lni lnis-briefcase-2"></i><span>Projects</span></a>
                </li>
                <li class = "sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('shop')"><i class="lni lnis-cart-1"></i><span>Shop</span></a>
                </li>
                <li class="sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('notes')"><i class="lni lnis-book-1"></i><span>Notes</span></a>
                </li>
                <li class="sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('tools')"><i class="lni lnis-stamp"></i><span>Tools</span></a>
                </li>
                <li class="sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('about')"><i class="lni lnis-user-4"></i><span>About</span></a>
                </li>
                <li class="sidebar-nav-item">
                    <a href = "#" class = "sidebar-link" onclick="navigate('contact')"><i class="lni lnis-telephone-1"></i><span>Contact</span></a>
                </li>
            </ul>
            <div class = "sidebar-footer">
                <button id = "contact-btn" type = "button" onclick="navigate('contact')"></i><span>Contact me</span></button>
            </div>
        </aside>
    <div class="main">

    <!-- HOME -->
    <div class="page active" id="page-home">

    <h1>Hello, I'm Saloni 👋</h1>

    <h2>ICT Student & Laravel Web Developer</h2>

    <p>
        Passionate about Web Development, Laravel, PHP, and Cybersecurity.
        I enjoy building responsive web applications and creating innovative
        technology solutions while continuously learning new technologies.
    </p>

    <div class="stats-row">
        <div class="stat-card">
            <h2>5+</h2>
            <p>Projects</p>
        </div>

        <div class="stat-card">
            <h2>3+</h2>
            <p>Technologies</p>
        </div>

        <div class="stat-card">
            <h2>2+</h2>
            <p>Years Learning</p>
        </div>
    </div>

</div>
     <!-- SHOP -->
<div class="page" id="page-shop">
    <h1>Shop</h1>

    <div class="shop-grid">

        <div class="shop-card">
            <i class="bi bi-file-earmark-pdf"></i>
            <h4>Java OOP Notes</h4>
            <p>Complete Java OOP study notes.</p>
            <button>Download</button>
        </div>

        <div class="shop-card">
            <i class="bi bi-filetype-php"></i>
            <h4>PHP Notes</h4>
            <p>PHP fundamentals and examples.</p>
            <button>Download</button>
        </div>

        <div class="shop-card">
            <i class="bi bi-journal-code"></i>
            <h4>Laravel Notes</h4>
            <p>Laravel concepts and practical examples.</p>
            <button>Download</button>
        </div>

        <div class="shop-card">
            <i class="bi bi-cpu"></i>
            <h4>Arduino Guide</h4>
            <p>Arduino projects and tutorials.</p>
            <button>Download</button>
        </div>

        <div class="shop-card">
            <i class="bi bi-terminal"></i>
            <h4>Ubuntu Linux</h4>
            <p>Complete guide to using Ubuntu Linux.</p>
            <button>Download</button>
        </div>

    </div>
</div>
    <!-- PROJECTS -->
    <div class="page" id="page-projects">
        <h1>My Projects <i class="bi bi-briefcase"></i></h1>

        <div class="project-card">
            <h3>Medicine Dispenser <i class="bi bi-capsule"></i></h3>
            <p>Arduino Nano based medicine reminder and dispenser.</p>
        </div>

        <div class="project-card">
            <h3>Desktop Notifier <i class="bi bi-bell"></i></h3>
            <p>Desktop application for sending notifications.</p>
        </div>

        <div class="project-card">
            <h3>YouTube Downloader <i class="bi bi-youtube"></i></h3>
            <p>Flask web application for downloading videos and MP3s.</p>
        </div>
        <div class="project-card">
            <h3>Pin Aura <i class="bi bi-pinterest"></i></h3>
            <p>Pinterest clone application. where you can save and share pins.</p>
        </div>
    </div>

    <!-- ABOUT -->
    <div class="page" id="page-about">
        <h1>About Me <i class="bi bi-info-circle"></i></h1>

        <p>
            Hello! I'm Saloni Ramavat, an ICT student at Marwadi University with a strong interest in Web Development, Laravel, and Cybersecurity. I enjoy building modern, user-friendly web applications and exploring new technologies that solve real-world problems. Alongside web development, I have experience working with Arduino and IoT projects, combining software and hardware to create innovative solutions. I am constantly learning, improving my skills, and taking on new challenges to grow as a developer. My goal is to create impactful digital experiences while expanding my knowledge in both development and security.

        </p>
    </div>

    <!-- NOTES -->
    <div class="page" id="page-notes">
    <h1>Notes <i class="bi bi-book"></i></h1>

    <div class="notes-grid">

        <div class="note-card">
            <i class="bi bi-cup-hot"></i>
            <h4>Java OOP Notes</h4>
        </div>

        <div class="note-card">
            <i class="bi bi-filetype-php"></i>
            <h4>PHP Notes</h4>
        </div>

        <div class="note-card">
            <i class="bi bi-journal-code"></i>
            <h4>Laravel Notes</h4>
        </div>

        <div class="note-card">
            <i class="bi bi-cpu"></i>
            <h4>Electronics Notes</h4>
        </div>

    </div>
</div>

    <!-- TOOLS -->
    <div class="page" id="page-tools">
    <h1>Tools I Use</h1>

    <div class="tools-grid">

        <div class="tool-card">
            <i class="bi bi-code-square"></i>
            <h4>Laravel</h4>
        </div>

        <div class="tool-card">
            <i class="bi bi-filetype-php"></i>
            <h4>PHP</h4>
        </div>

        <div class="tool-card">
            <i class="bi bi-database"></i>
            <h4>MySQL</h4>
        </div>

        <div class="tool-card">
            <i class="bi bi-github"></i>
            <h4>Git & GitHub</h4>
        </div>

        <div class="tool-card">
            <i class="bi bi-cpu"></i>
            <h4>Arduino IDE</h4>
        </div>

        <div class="tool-card">
            <i class="bi bi-terminal"></i>
            <h4>Ubuntu Linux</h4>
        </div>

        <div class="tool-card">
            <i class="bi bi-code-slash"></i>
            <h4>VS Code</h4>
        </div>

    </div>
</div>

<div class="page" id="page-contact">
    <h1>Contact Me</h1>

    <div class="contact-grid">

        <div class="contact-card">
            <i class="bi bi-envelope-fill"></i>
            <h4>Email</h4>
            <p>saloniramavat5@gmail.com</p>
        </div>

        <div class="contact-card">
            <i class="bi bi-github"></i>
            <h4>GitHub</h4>
            <a href="https://github.com/Saloni1911R" target="_blank">
                Visit Profile
            </a>
        </div>

        <div class="contact-card">
            <i class="bi bi-linkedin"></i>
            <h4>LinkedIn</h4>
            <a href="https://www.linkedin.com/in/saloni-ramavat-782844333/" target="_blank">
                Visit Profile
            </a>
        </div>

    </div>
</div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>