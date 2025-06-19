<!DOCTYPE html>
<html lang="en">
<head>
    {{-- Bagian head lainnya (meta, title, font awesome, google fonts) --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Rizki Pratama | Creative Developer</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@400;700&family=Space+Grotesk:wght@400;700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>


<body>

    <div id="loadingScreen">
        <div class="welcome-message">SELAMAT DATANG</div>
    </div>

    <div class="cursor-outer"></div>
    <div class="cursor-inner"></div>

    <nav class="navbar">
        <div class="navbar-content">
            <a href="#" class="logo">KayyZy</a>

            <div class="mobile-menu-toggle">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>

            <div class="nav-links">
                <a href="#about" class="nav-link">ABOUT</a>
                <a href="#projects" class="nav-link">PROJECTS</a>
                <a href="#certificates" class="nav-link">CERTIFICATES</a>
                <a href="#gallery" class="nav-link">GALLERY</a>
                <a href="#contact" class="nav-link">CONTACT</a>
            </div>
        </div>

        <div class="mobile-nav">
            <a href="#about">ABOUT</a>
            <a href="#projects">PROJECTS</a>
            <a href="#certificates">CERTIFICATES</a>
            <a href="#gallery">GALLERY</a>
            <a href="#contact">CONTACT</a>
        </div>
    </nav>

    <section class="section hero">
        <div class="hero-content">
            <div class="hero-badge">GAME DEVELOPER</div>
            <h1 class="hero-title">MUHAMMAD<br>RIZKI<br>PRATAMA</h1>
            <div class="hero-subtitle">GAME & WEB DEVELOPER</div>
            <p class="hero-description">Menciptakan pengalaman digital yang <span class="highlight">BOLD</span> dan <span class="highlight">FUNGSIONAL</span> dengan menggabungkan estetika brutal dan teknologi modern.</p>
            <div class="hero-buttons">
                <a href="#projects" class="btn btn-primary">LIHAT PROJECT</a>
                <a href="#contact" class="btn btn-secondary">HUBUNGI SAYA</a>
            </div>
        </div>
        <div class="hero-visual">
            <div class="floating-shapes">
                <div class="shape shape-1"></div>
                <div class="shape shape-2"></div>
                <div class="shape shape-3"></div>
                <div class="shape shape-4"></div>
            </div>
        </div>
    </section>

    <section class="section" id="about">
        <div class="section-header">
            <h2 class="section-title">TENTANG SAYA</h2>
            <div class="section-number">01</div>
        </div>
        <div class="about">
            <div class="about-image">
                <div class="image-frame">
                    <img src="{{ asset('image/_MG_3432.JPG') }}">
                    <div class="image-overlay">
                        <span>DEVELOPER</span>
                    </div>
                </div>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p class="about-intro">SAYA ADALAH <span class="highlight">GAME & WEB DEVELOPER</span> YANG BERFOKUS PADA PENGEMBANGAN WEB DAN GAME.</p>
                    <p>Menggunakan Roblox Studio, PHP, Laravel, dan Unity, saya menciptakan aplikasi dan game yang fungsional serta menarik. Selalu belajar dan berkembang, saya siap menghadirkan solusi inovatif dengan pendekatan yang <strong>BRUTAL</strong>                        dan
                        <strong>EFEKTIF</strong>!</p>
                </div>
                <div class="skills-section">
                    <h3 class="skills-title">TECH STACK</h3>
                    <div class="skills-grid">
                        <div class="skill-item skill-primary">PHP</div>
                        <div class="skill-item skill-secondary">LARAVEL</div>
                        <div class="skill-item skill-accent">UNITY</div>
                        <div class="skill-item skill-primary">C#</div>
                        <div class="skill-item skill-secondary">UI/UX</div>
                        <div class="skill-item skill-accent">BLENDER</div>
                        <div class="skill-item skill-primary">JAVASCRIPT</div>
                        <div class="skill-item skill-secondary">REACT</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="projects">
        <div class="section-header">
            <h2 class="section-title">FEATURED PROJECTS</h2>
            <div class="section-number">02</div>
        </div>
        <div class="projects-grid">
            <div class="project-card project-featured">
                <div class="project-image">
                    <img src="{{ asset('Screenshot 2024-12-23 113209.png') }}">
                    <div class="project-overlay">
                        <span class="project-type">GAME DEV</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">GAME DEVELOPMENT</h3>
                    <p class="project-description">Pengembangan game dengan mekanik inovatif, gameplay interaktif, dan storytelling yang mendalam menggunakan Unity dan C#.</p>
                    <div class="project-tags">
                        <span class="tag tag-primary">UNITY</span>
                        <span class="tag tag-secondary">C#</span>
                        <span class="tag tag-accent">BLENDER</span>
                    </div>
                    <div class="project-status">COMPLETED</div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('image/Screenshot 2024-12-27 095319.png') }}">
                    <div class="project-overlay">
                        <span class="project-type">WEB APP</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">WEB APPLICATION</h3>
                    <p class="project-description">Aplikasi web interaktif dengan fitur real-time, dashboard admin, dan UI responsif untuk pengalaman pengguna maksimal.</p>
                    <div class="project-tags">
                        <span class="tag tag-primary">PHP</span>
                        <span class="tag tag-secondary">LARAVEL</span>
                        <span class="tag tag-accent">JS</span>
                    </div>
                    <div class="project-status">LIVE</div>
                </div>
            </div>

            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('image/Screenshot 2025-02-22 153346.png') }}">
                    <div class="project-overlay">
                        <span class="project-type">UI/UX</span>
                    </div>
                </div>
                <div class="project-content">
                    <h3 class="project-title">UI/UX DESIGN</h3>
                    <p class="project-description">Desain antarmuka yang intuitif dan pengalaman pengguna optimal untuk game dan aplikasi web modern.</p>
                    <div class="project-tags">
                        <span class="tag tag-primary">FIGMA</span>
                        <span class="tag tag-secondary">UI/UX</span>
                        <span class="tag tag-accent">PROTOTYPE</span>
                    </div>
                    <div class="project-status">ONGOING</div>
                </div>
            </div>
        </div>
    </section>

    <section class="section" id="certificates">
        <div class="section-header">
            <h2 class="section-title">CERTIFICATES</h2>
            <div class="section-number">03</div>
        </div>
        <div class="certificates-container">
            <div class="certificate-card">
                <div class="certificate-icon">
                    <i class="fas fa-trophy"></i>
                </div>
                <div class="certificate-content">
                    <h3 class="certificate-title">WEB DEVELOPMENT BOOTCAMP</h3>
                    <p class="certificate-issuer">DICODING INDONESIA</p>
                    <p class="certificate-date">2024</p>
                    <div class="certificate-skills">
                        <span class="skill-badge">HTML5</span>
                        <span class="skill-badge">CSS3</span>
                        <span class="skill-badge">JAVASCRIPT</span>
                    </div>
                </div>
                <div class="certificate-status">VERIFIED</div>
            </div>

            <div class="certificate-card">
                <div class="certificate-icon">
                    <i class="fas fa-gamepad"></i>
                </div>
                <div class="certificate-content">
                    <h3 class="certificate-title">UNITY GAME DEVELOPMENT</h3>
                    <p class="certificate-issuer">GAMELAB INDONESIA</p>
                    <p class="certificate-date">2024</p>
                    <div class="certificate-skills">
                        <span class="skill-badge">UNITY</span>
                        <span class="skill-badge">C#</span>
                        <span class="skill-badge">2D/3D</span>
                    </div>
                </div>
                <div class="certificate-status">VERIFIED</div>
            </div>

            <div class="certificate-card">
                <div class="certificate-icon">
                    <i class="fas fa-palette"></i>
                </div>
                <div class="certificate-content">
                    <h3 class="certificate-title">UI/UX DESIGN FUNDAMENTALS</h3>
                    <p class="certificate-issuer">BUILDWITH ANGGA</p>
                    <p class="certificate-date">2023</p>
                    <div class="certificate-skills">
                        <span class="skill-badge">FIGMA</span>
                        <span class="skill-badge">DESIGN</span>
                        <span class="skill-badge">PROTOTYPE</span>
                    </div>
                </div>
                <div class="certificate-status">VERIFIED</div>
            </div>

            <div class="certificate-card">
                <div class="certificate-icon">
                    <i class="fas fa-server"></i>
                </div>
                <div class="certificate-content">
                    <h3 class="certificate-title">BACKEND DEVELOPER</h3>
                    <p class="certificate-issuer">DICODING INDONESIA</p>
                    <p class="certificate-date">2023</p>
                    <div class="certificate-skills">
                        <span class="skill-badge">NODE.JS</span>
                        <span class="skill-badge">API</span>
                        <span class="skill-badge">DATABASE</span>
                    </div>
                </div>
                <div class="certificate-status">VERIFIED</div>
            </div>
        </div>
    </section>

    <section class="section" id="gallery">
        <div class="section-header">
            <h2 class="section-title">GALLERY</h2>
            <div class="section-number">04</div>
        </div>
        <div class="gallery-grid">
            <div class="gallery-item gallery-large">
                <img src="{{ asset('image/_MG_3426.JPG') }}">
                <div class="gallery-overlay">
                    <span>PORTRAIT</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('image/_MG_3432.JPG') }}">
                <div class="gallery-overlay">
                    <span>STUDIO</span>
                </div>
            </div>
            <div class="gallery-item">
                <img src="{{ asset('image/_MG_5181.jpg') }}">
                <div class="gallery-overlay">
                    <span>OUTDOOR</span>
                </div>
            </div>
            <div class="gallery-item gallery-tall">
                <img src="{{ asset('image/_MG_3574.JPG') }}">
                <div class="gallery-overlay">
                    <span>CREATIVE</span>
                </div>
            </div>
        </div>
    </section>



    <section class="section contact" id="contact">
        <div class="section-header">
            <h2 class="section-title">HUBUNGI SAYA</h2>
            <div class="section-number">05</div>
        </div>
        <div class="contact-content">
            <div class="contact-text">
                <p class="contact-intro">SAAT INI SAYA <span class="highlight">TERBUKA</span> UNTUK PELUANG BARU!</p>
                <p class="contact-description">Jika Anda memiliki proyek menarik atau ingin berkolaborasi, jangan ragu untuk menghubungi saya. Mari kita ciptakan sesuatu yang <strong>LUAR BIASA</strong> bersama!</p>
            </div>
            <div class="contact-buttons">
                <a href="https://instagram.com/@chrskyyly" class="btn btn-primary btn-large">SAY HELLO!</a>
                <a href="mailto:rizki76892@email.com" class="btn btn-secondary btn-large">EMAIL ME</a>
            </div>
        </div>

        <div class="social-section">
            <h3 class="social-title">CONNECT WITH ME</h3>
            <div class="social-links">
                <a href="mailto:rizki76892@email.com" class="social-link social-email">
                    <i class="fas fa-envelope"></i>
                    <span>EMAIL</span>
                </a>
                <a href="https://instagram.com/@chrskyyly" class="social-link social-instagram">
                    <i class="fab fa-instagram"></i>
                    <span>INSTAGRAM</span>
                </a>
                <a href="#" class="social-link social-github">
                    <i class="fab fa-github"></i>
                    <span>GITHUB</span>
                </a>
                <a href="https://www.linkedin.com/in/muhammad-rizki-pratama-6a031036b/" class="social-link social-linkedin">
                    <i class="fab fa-linkedin"></i>
                    <span>LINKEDIN</span>
                </a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="footer-content">
            <p>&copy; 2024 MUHAMMAD RIZKI PRATAMA. ALL RIGHTS RESERVED.</p>
            <p class="footer-motto">BUILT WITH <span class="highlight">PASSION</span> & <span class="highlight">CODE</span></p>
        </div>
    </footer>

    <!-- Fullscreen Image Viewer -->
    <div class="fullscreen">
        <!-- Dynamic content will be added here -->
    </div>

 <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
test.html
Menampilkan test.html.