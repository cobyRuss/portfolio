<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $profile['name'] }} | Developer Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        *, *::before, *::after { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --primary-light: #dbeafe;
            --bg: #f8fafc;
            --surface: #ffffff;
            --text: #0f172a;
            --text-secondary: #64748b;
            --border: #e2e8f0;
            --accent: #0ea5e9;
            --success: #10b981;
            --warning: #f59e0b;
            --radius: 12px;
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
        }

        /* Navigation */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(255,255,255,0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
            z-index: 1000;
            padding: 0 2rem;
        }
        nav .nav-inner {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 64px;
        }
        nav .logo {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--primary);
            text-decoration: none;
        }
        nav .nav-links { display: flex; gap: 2rem; }
        nav .nav-links a {
            text-decoration: none;
            color: var(--text-secondary);
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.2s;
        }
        nav .nav-links a:hover { color: var(--primary); }

        /* Hero Section */
        .hero {
            padding: 8rem 2rem 4rem;
            background: linear-gradient(135deg, var(--primary-light) 0%, #f0f9ff 50%, #ecfdf5 100%);
        }
        .hero .container {
            max-width: 1100px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            gap: 3rem;
        }
        .hero-content { flex: 1; }
        .hero-content h1 {
            font-size: 2.8rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 0.5rem;
        }
        .hero-content .title {
            font-size: 1.2rem;
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 1rem;
        }
        .hero-content p {
            font-size: 1.05rem;
            color: var(--text-secondary);
            max-width: 500px;
            margin-bottom: 1.5rem;
        }
        .hero-buttons { display: flex; gap: 1rem; flex-wrap: wrap; }
        .btn {
            padding: 0.7rem 1.5rem;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }
        .btn-primary {
            background: var(--primary);
            color: white;
        }
        .btn-primary:hover { background: var(--primary-dark); transform: translateY(-1px); }
        .btn-outline {
            background: transparent;
            color: var(--text);
            border: 2px solid var(--border);
        }
        .btn-outline:hover { border-color: var(--primary); color: var(--primary); }

        .hero-avatar {
            width: 260px;
            height: 260px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--accent));
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            box-shadow: 0 20px 60px rgba(37, 99, 235, 0.2);
        }
        .hero-avatar .avatar-text {
            font-size: 5rem;
            font-weight: 800;
            color: white;
        }

        /* Sections */
        section {
            padding: 5rem 2rem;
        }
        .container {
            max-width: 1100px;
            margin: 0 auto;
        }
        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }
        .section-header h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .section-header p {
            color: var(--text-secondary);
            font-size: 1rem;
        }
        .section-divider {
            width: 60px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
            margin: 1rem auto 0;
        }

        /* About */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
            align-items: start;
        }
        .about-card {
            background: var(--surface);
            border-radius: var(--radius);
            padding: 2rem;
            border: 1px solid var(--border);
        }
        .about-card h3 {
            font-size: 1.2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        .about-card p {
            color: var(--text-secondary);
            font-size: 0.95rem;
        }
        .about-card .detail-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            padding: 0.6rem 0;
            border-bottom: 1px solid var(--border);
            font-size: 0.95rem;
        }
        .about-card .detail-item:last-child { border-bottom: none; }
        .detail-label {
            font-weight: 600;
            min-width: 100px;
            color: var(--text);
        }
        .detail-value { color: var(--text-secondary); }

        /* Skills */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }
        .skill-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.5rem;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .skill-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
        }
        .skill-card .skill-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.75rem;
        }
        .skill-card .skill-name {
            font-weight: 600;
            font-size: 1rem;
        }
        .skill-badge {
            padding: 0.2rem 0.6rem;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
        }
        .badge-beginner { background: #fef3c7; color: #92400e; }
        .badge-intermediate { background: #dbeafe; color: #1e40af; }
        .badge-advanced { background: #d1fae5; color: #065f46; }
        .skill-category {
            font-size: 0.8rem;
            color: var(--text-secondary);
        }
        .skill-bar {
            height: 6px;
            background: var(--border);
            border-radius: 3px;
            margin-top: 0.75rem;
            overflow: hidden;
        }
        .skill-bar-fill {
            height: 100%;
            border-radius: 3px;
            transition: width 1s ease;
        }
        .fill-beginner { width: 33%; background: var(--warning); }
        .fill-intermediate { width: 66%; background: var(--primary); }
        .fill-advanced { width: 100%; background: var(--success); }

        /* Certifications */
        .cert-list {
            display: grid;
            gap: 1.5rem;
        }
        .cert-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.5rem 2rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: transform 0.2s;
        }
        .cert-card:hover { transform: translateY(-2px); box-shadow: 0 8px 30px rgba(0,0,0,0.08); }
        .cert-info h3 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 0.3rem;
        }
        .cert-info .cert-meta {
            font-size: 0.85rem;
            color: var(--text-secondary);
        }
        .cert-status {
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            white-space: nowrap;
        }
        .status-earned { background: #d1fae5; color: #065f46; }
        .status-processing { background: #fef3c7; color: #92400e; }

        /* Contact */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }
        .contact-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            text-align: center;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .contact-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.08);
            border-color: var(--primary);
        }
        .contact-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: var(--primary-light);
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            font-size: 1.5rem;
        }
        .contact-card h3 { font-size: 0.9rem; font-weight: 600; margin-bottom: 0.3rem; }
        .contact-card p, .contact-card a {
            color: var(--text-secondary);
            font-size: 0.9rem;
            text-decoration: none;
            word-break: break-all;
        }
        .contact-card a:hover { color: var(--primary); }

        /* Footer */
        footer {
            background: var(--text);
            color: rgba(255,255,255,0.7);
            text-align: center;
            padding: 2rem;
            font-size: 0.85rem;
        }
        footer a { color: rgba(255,255,255,0.9); text-decoration: none; }

        /* Responsive */
        @media (max-width: 768px) {
            .hero .container { flex-direction: column-reverse; text-align: center; }
            .hero-content h1 { font-size: 2rem; }
            .hero-buttons { justify-content: center; }
            .hero-avatar { width: 180px; height: 180px; }
            .hero-avatar .avatar-text { font-size: 3.5rem; }
            .about-grid { grid-template-columns: 1fr; }
            .cert-card { flex-direction: column; gap: 1rem; text-align: center; }
            nav .nav-links { gap: 1rem; }
            nav .nav-links a { font-size: 0.8rem; }
        }
    </style>
</head>
<body>

    <!-- Navigation -->
    <nav>
        <div class="nav-inner">
            <a href="#" class="logo">RM.</a>
            <div class="nav-links">
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#certifications">Certifications</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>{{ $profile['name'] }}</h1>
                <div class="title">{{ $profile['title'] }}</div>
                <p>{{ $profile['about'] }}</p>
                <div class="hero-buttons">
                    <a href="#contact" class="btn btn-primary">Get In Touch</a>
                    <a href="{{ $profile['github'] }}" class="btn btn-outline" target="_blank">GitHub Profile</a>
                </div>
            </div>
            <div class="hero-avatar">
                <span class="avatar-text">RM</span>
            </div>
        </div>
    </section>

    <!-- About / Education -->
    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2>About Me</h2>
                <p>Education & background</p>
                <div class="section-divider"></div>
            </div>
            <div class="about-grid">
                <div class="about-card">
                    <h3>&#128218; Education</h3>
                    <div class="detail-item">
                        <span class="detail-label">School</span>
                        <span class="detail-value">{{ $education['school'] }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Campus</span>
                        <span class="detail-value">{{ $education['campus'] }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Program</span>
                        <span class="detail-value">{{ $education['program'] }}</span>
                    </div>
                    <div class="detail-item">
                        <span class="detail-label">Status</span>
                        <span class="detail-value">{{ $education['status'] }}</span>
                    </div>
                </div>
                <div class="about-card">
                    <h3>&#128100; About</h3>
                    <p>{{ $profile['about'] }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills -->
    <section id="skills" style="background: #f1f5f9;">
        <div class="container">
            <div class="section-header">
                <h2>Skills</h2>
                <p>Technical abilities and tools I work with</p>
                <div class="section-divider"></div>
            </div>
            <div class="skills-grid">
                @foreach($skills as $skill)
                <div class="skill-card">
                    <div class="skill-header">
                        <span class="skill-name">{{ $skill['name'] }}</span>
                        <span class="skill-badge badge-{{ strtolower($skill['level']) }}">{{ $skill['level'] }}</span>
                    </div>
                    <span class="skill-category">{{ $skill['category'] }}</span>
                    <div class="skill-bar">
                        <div class="skill-bar-fill fill-{{ strtolower($skill['level']) }}"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Certifications -->
    <section id="certifications">
        <div class="container">
            <div class="section-header">
                <h2>Certifications & Eligibility</h2>
                <p>Professional credentials and ongoing certifications</p>
                <div class="section-divider"></div>
            </div>
            <div class="cert-list">
                @foreach($certifications as $cert)
                <div class="cert-card">
                    <div class="cert-info">
                        <h3>{{ $cert['title'] }}</h3>
                        <div class="cert-meta">{{ $cert['issuer'] }} &middot; {{ $cert['type'] }} &middot; {{ $cert['date'] }}</div>
                    </div>
                    <span class="cert-status status-{{ strtolower($cert['status']) }}">{{ $cert['status'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" style="background: #f1f5f9;">
        <div class="container">
            <div class="section-header">
                <h2>Contact Me</h2>
                <p>Feel free to reach out</p>
                <div class="section-divider"></div>
            </div>
            <div class="contact-grid">
                <a href="mailto:{{ $profile['email'] }}" class="contact-card">
                    <div class="contact-icon">&#9993;</div>
                    <h3>Email</h3>
                    <p>{{ $profile['email'] }}</p>
                </a>
                <a href="tel:{{ $profile['phone'] }}" class="contact-card">
                    <div class="contact-icon">&#9742;</div>
                    <h3>Phone</h3>
                    <p>{{ $profile['phone'] }}</p>
                </a>
                <a href="{{ $profile['github'] }}" class="contact-card" target="_blank">
                    <div class="contact-icon">&#60;/&#62;</div>
                    <h3>GitHub</h3>
                    <p>{{ $profile['github_username'] }}</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} {{ $profile['name'] }} &middot; Built with Laravel &middot; Integrative Programming Activity 3</p>
    </footer>

</body>
</html>
