<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Portfolio of Khairul Hasan - Full Stack Developer" />
    <title>Khairul Hasan &mdash; Portfolio</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <style>
        /* ── Reset & Base ──────────────────────────────────────────── */
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        :root {
            --bg:         #0d0f14;
            --surface:    #13161e;
            --border:     #1f2433;
            --accent:     #6366f1;
            --accent-dim: #4f52c9;
            --accent-glow:rgba(99,102,241,.18);
            --text:       #e2e8f0;
            --muted:      #64748b;
            --radius:     12px;
            --transition: .25s cubic-bezier(.4,0,.2,1);
        }

        html { scroll-behavior: smooth; }

        body {
            font-family: 'Inter', sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            overflow-x: hidden;
        }

        a { color: inherit; text-decoration: none; }

        /* ── Nav ───────────────────────────────────────────────────── */
        .nav {
            position: fixed;
            inset: 0 0 auto 0;
            z-index: 100;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 2rem;
            background: rgba(13,15,20,.85);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
        }

        .nav-logo {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text);
        }

        .nav-logo span { color: var(--accent); }

        .nav-links {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-links a {
            font-size: .875rem;
            font-weight: 500;
            color: var(--muted);
            transition: color var(--transition);
        }

        .nav-links a:hover { color: var(--text); }

        /* ── Sections ──────────────────────────────────────────────── */
        section {
            padding: 6rem 2rem;
            max-width: 1100px;
            margin: 0 auto;
        }

        section:first-of-type { padding-top: 9rem; }

        .section-label {
            font-size: .75rem;
            font-weight: 600;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .section-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(1.75rem, 4vw, 2.75rem);
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .section-divider {
            width: 60px;
            height: 3px;
            background: var(--accent);
            border-radius: 2px;
            margin-bottom: 3rem;
        }

        /* ── Hero ──────────────────────────────────────────────────── */
        .hero {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 2rem;
            max-width: 1100px;
            margin: 0 auto;
            gap: 4rem;
        }

        .hero-text { flex: 1; }

        .hero-greeting {
            font-size: .875rem;
            font-weight: 600;
            letter-spacing: .12em;
            text-transform: uppercase;
            color: var(--accent);
            margin-bottom: .75rem;
        }

        .hero-name {
            font-family: 'Space Grotesk', sans-serif;
            font-size: clamp(2.5rem, 7vw, 5rem);
            font-weight: 700;
            line-height: 1.05;
            margin-bottom: .75rem;
        }

        .hero-role {
            font-size: clamp(1.1rem, 2.5vw, 1.5rem);
            color: var(--muted);
            margin-bottom: 1.5rem;
            font-weight: 400;
        }

        .hero-role span { color: var(--accent); font-weight: 600; }

        .hero-bio {
            max-width: 520px;
            color: var(--muted);
            font-size: 1rem;
            margin-bottom: 2.5rem;
        }

        .hero-cta {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .75rem 1.75rem;
            border-radius: var(--radius);
            font-weight: 600;
            font-size: .9375rem;
            transition: var(--transition);
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: var(--accent);
            color: #fff;
        }

        .btn-primary:hover {
            background: var(--accent-dim);
            transform: translateY(-2px);
            box-shadow: 0 8px 24px var(--accent-glow);
        }

        .btn-ghost {
            background: transparent;
            color: var(--text);
            border: 1px solid var(--border);
        }

        .btn-ghost:hover {
            border-color: var(--accent);
            color: var(--accent);
            transform: translateY(-2px);
        }

        .hero-avatar {
            flex-shrink: 0;
            width: 320px;
            height: 320px;
            border-radius: 50%;
            overflow: hidden;
            border: 3px solid var(--border);
            box-shadow: 0 0 80px var(--accent-glow);
            background: var(--surface);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .hero-avatar svg {
            width: 200px;
            height: 200px;
            color: var(--muted);
        }

        /* ── About ─────────────────────────────────────────────────── */
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .about-text p { color: var(--muted); margin-bottom: 1rem; }
        .about-text p:last-child { margin-bottom: 0; }

        .about-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.25rem;
        }

        .stat-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.5rem;
            text-align: center;
        }

        .stat-number {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 2.25rem;
            font-weight: 700;
            color: var(--accent);
        }

        .stat-label {
            font-size: .8125rem;
            color: var(--muted);
            margin-top: .25rem;
        }

        /* ── Skills ────────────────────────────────────────────────── */
        #skills { background: none; }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 1.5rem;
        }

        .skill-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 1.75rem;
            transition: border-color var(--transition), transform var(--transition);
        }

        .skill-card:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
        }

        .skill-icon {
            width: 44px;
            height: 44px;
            border-radius: 10px;
            background: var(--accent-glow);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            font-size: 1.4rem;
        }

        .skill-name {
            font-weight: 600;
            margin-bottom: .5rem;
        }

        .skill-desc { font-size: .875rem; color: var(--muted); }

        /* ── Projects ──────────────────────────────────────────────── */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 1.5rem;
        }

        .project-card {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 2rem;
            display: flex;
            flex-direction: column;
            transition: border-color var(--transition), transform var(--transition);
        }

        .project-card:hover {
            border-color: var(--accent);
            transform: translateY(-4px);
        }

        .project-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .project-icon {
            font-size: 1.75rem;
        }

        .project-links { display: flex; gap: .75rem; }

        .project-link {
            color: var(--muted);
            transition: color var(--transition);
            display: flex;
        }

        .project-link:hover { color: var(--accent); }

        .project-title {
            font-family: 'Space Grotesk', sans-serif;
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: .5rem;
        }

        .project-desc { font-size: .875rem; color: var(--muted); flex: 1; margin-bottom: 1.5rem; }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: .5rem;
        }

        .tag {
            font-size: .75rem;
            font-weight: 500;
            padding: .25rem .75rem;
            border-radius: 999px;
            background: var(--accent-glow);
            color: var(--accent);
            border: 1px solid rgba(99,102,241,.25);
        }

        /* ── Contact ───────────────────────────────────────────────── */
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: start;
        }

        .contact-info p { color: var(--muted); margin-bottom: 2rem; }

        .contact-links { display: flex; flex-direction: column; gap: 1rem; }

        .contact-link {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem 1.25rem;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            transition: border-color var(--transition), transform var(--transition);
        }

        .contact-link:hover {
            border-color: var(--accent);
            transform: translateX(4px);
        }

        .contact-link-icon {
            width: 40px;
            height: 40px;
            border-radius: 8px;
            background: var(--accent-glow);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            flex-shrink: 0;
        }

        .contact-link-label { font-size: .75rem; color: var(--muted); }
        .contact-link-value { font-weight: 500; font-size: .9375rem; }

        /* ── Contact Form ──────────────────────────────────────────── */
        .contact-form { display: flex; flex-direction: column; gap: 1rem; }

        .form-group { display: flex; flex-direction: column; gap: .375rem; }

        .form-label {
            font-size: .8125rem;
            font-weight: 500;
            color: var(--muted);
        }

        .form-input, .form-textarea {
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
            padding: .75rem 1rem;
            color: var(--text);
            font-family: inherit;
            font-size: .9375rem;
            transition: border-color var(--transition);
            outline: none;
            resize: vertical;
        }

        .form-input:focus, .form-textarea:focus {
            border-color: var(--accent);
        }

        .form-textarea { min-height: 130px; }

        /* ── Footer ────────────────────────────────────────────────── */
        footer {
            border-top: 1px solid var(--border);
            padding: 2rem;
            text-align: center;
            color: var(--muted);
            font-size: .875rem;
        }

        footer span { color: var(--accent); }

        /* ── Responsive ────────────────────────────────────────────── */
        @media (max-width: 768px) {
            .nav-links { display: none; }

            .hero {
                flex-direction: column-reverse;
                text-align: center;
                min-height: auto;
                padding-top: 8rem;
                padding-bottom: 4rem;
            }

            .hero-cta { justify-content: center; }
            .hero-bio { margin: 0 auto 2.5rem; }

            .hero-avatar {
                width: 200px;
                height: 200px;
            }

            .about-grid,
            .contact-wrapper { grid-template-columns: 1fr; gap: 2.5rem; }

            section { padding: 4rem 1.25rem; }
        }
    </style>
</head>
<body>

    <!-- ── Navigation ─────────────────────────────────────────────── -->
    <nav class="nav">
        <div class="nav-logo">KH<span>.</span></div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#projects">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="#contact" class="btn btn-primary" style="padding:.55rem 1.25rem;font-size:.875rem;">Hire Me</a>
    </nav>

    <!-- ── Hero ───────────────────────────────────────────────────── -->
    <div class="hero">
        <div class="hero-text">
            <p class="hero-greeting">Hello, I'm</p>
            <h1 class="hero-name">Khairul<br/>Hasan</h1>
            <p class="hero-role">Full Stack <span>Laravel</span> Developer</p>
            <p class="hero-bio">
                I build clean, scalable web applications with modern PHP and JavaScript.
                Passionate about developer experience, performance, and elegant code.
            </p>
            <div class="hero-cta">
                <a href="#projects" class="btn btn-primary">View Projects</a>
                <a href="#contact" class="btn btn-ghost">Get In Touch</a>
            </div>
        </div>
        <div class="hero-avatar">
            <!-- Placeholder avatar — swap src with your actual photo -->
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </div>

    <!-- ── About ──────────────────────────────────────────────────── -->
    <section id="about">
        <p class="section-label">About Me</p>
        <h2 class="section-title">Crafting digital<br/>experiences</h2>
        <div class="section-divider"></div>
        <div class="about-grid">
            <div class="about-text">
                <p>
                    I'm a full-stack developer with a focus on Laravel and Vue.js. I have a strong
                    background in building RESTful APIs, designing database schemas, and shipping
                    production-ready features.
                </p>
                <p>
                    When I'm not coding I enjoy open-source contributions, exploring new frameworks,
                    and writing about software engineering on my blog.
                </p>
                <p>
                    I believe great software is simple, maintainable, and solves real problems.
                </p>
            </div>
            <div class="about-stats">
                <div class="stat-card">
                    <div class="stat-number">3+</div>
                    <div class="stat-label">Years experience</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Projects shipped</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Happy clients</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">∞</div>
                    <div class="stat-label">Cups of coffee</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── Skills ─────────────────────────────────────────────────── -->
    <section id="skills">
        <p class="section-label">What I Do</p>
        <h2 class="section-title">Skills &amp; Technologies</h2>
        <div class="section-divider"></div>
        <div class="skills-grid">
            <div class="skill-card">
                <div class="skill-icon">🐘</div>
                <div class="skill-name">Laravel / PHP</div>
                <div class="skill-desc">Artisan commands, Eloquent ORM, queues, events, and package development.</div>
            </div>
            <div class="skill-card">
                <div class="skill-icon">⚡</div>
                <div class="skill-name">Vue.js / Inertia</div>
                <div class="skill-desc">Reactive UIs with the Composition API, Pinia, and Inertia.js for SPA-style Laravel apps.</div>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🗄️</div>
                <div class="skill-name">Databases</div>
                <div class="skill-desc">MySQL, PostgreSQL, Redis — schema design, migrations, and query optimisation.</div>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🐳</div>
                <div class="skill-name">DevOps</div>
                <div class="skill-desc">Docker, Nginx, CI/CD with GitHub Actions, and deployment to Linux servers.</div>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🔌</div>
                <div class="skill-name">REST &amp; APIs</div>
                <div class="skill-desc">Designing and consuming RESTful services with proper authentication (Sanctum/Passport).</div>
            </div>
            <div class="skill-card">
                <div class="skill-icon">🎨</div>
                <div class="skill-name">Tailwind CSS</div>
                <div class="skill-desc">Utility-first styling with responsive layouts and dark-mode support.</div>
            </div>
        </div>
    </section>

    <!-- ── Projects ───────────────────────────────────────────────── -->
    <section id="projects">
        <p class="section-label">My Work</p>
        <h2 class="section-title">Featured Projects</h2>
        <div class="section-divider"></div>
        <div class="projects-grid">

            <div class="project-card">
                <div class="project-header">
                    <span class="project-icon">🛒</span>
                    <div class="project-links">
                        <a href="#" class="project-link" title="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                        </a>
                        <a href="#" class="project-link" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                </div>
                <h3 class="project-title">E-Commerce Platform</h3>
                <p class="project-desc">A multi-vendor marketplace built with Laravel + Inertia.js featuring real-time notifications, Stripe payments, and an admin dashboard.</p>
                <div class="project-tags">
                    <span class="tag">Laravel</span>
                    <span class="tag">Vue.js</span>
                    <span class="tag">Inertia</span>
                    <span class="tag">Stripe</span>
                </div>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <span class="project-icon">📋</span>
                    <div class="project-links">
                        <a href="#" class="project-link" title="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                        </a>
                        <a href="#" class="project-link" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                </div>
                <h3 class="project-title">Task Management SaaS</h3>
                <p class="project-desc">Project and task manager with Kanban boards, team collaboration, time tracking, and PDF report export.</p>
                <div class="project-tags">
                    <span class="tag">Laravel</span>
                    <span class="tag">Livewire</span>
                    <span class="tag">Alpine.js</span>
                    <span class="tag">MySQL</span>
                </div>
            </div>

            <div class="project-card">
                <div class="project-header">
                    <span class="project-icon">🔑</span>
                    <div class="project-links">
                        <a href="#" class="project-link" title="GitHub">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/></svg>
                        </a>
                        <a href="#" class="project-link" title="Live Demo">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 13v6a2 2 0 01-2 2H5a2 2 0 01-2-2V8a2 2 0 012-2h6"/><polyline points="15 3 21 3 21 9"/><line x1="10" y1="14" x2="21" y2="3"/></svg>
                        </a>
                    </div>
                </div>
                <h3 class="project-title">Auth Microservice</h3>
                <p class="project-desc">Centralized authentication service with OAuth2, social logins, role-based access control, and audit logging.</p>
                <div class="project-tags">
                    <span class="tag">Laravel Passport</span>
                    <span class="tag">Redis</span>
                    <span class="tag">Docker</span>
                </div>
            </div>

        </div>
    </section>

    <!-- ── Contact ────────────────────────────────────────────────── -->
    <section id="contact">
        <p class="section-label">Get In Touch</p>
        <h2 class="section-title">Let's work together</h2>
        <div class="section-divider"></div>
        <div class="contact-wrapper">
            <div class="contact-info">
                <p>Have a project in mind or just want to say hello? Drop me a message — I typically reply within 24 hours.</p>
                <div class="contact-links">
                    <a href="mailto:hello@example.com" class="contact-link">
                        <div class="contact-link-icon">📧</div>
                        <div>
                            <div class="contact-link-label">Email</div>
                            <div class="contact-link-value">hello@example.com</div>
                        </div>
                    </a>
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="contact-link">
                        <div class="contact-link-icon">🐙</div>
                        <div>
                            <div class="contact-link-label">GitHub</div>
                            <div class="contact-link-value">github.com/khairulhasanmd</div>
                        </div>
                    </a>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="contact-link">
                        <div class="contact-link-icon">💼</div>
                        <div>
                            <div class="contact-link-label">LinkedIn</div>
                            <div class="contact-link-value">linkedin.com/in/khairulhasanmd</div>
                        </div>
                    </a>
                </div>
            </div>

            <form class="contact-form" onsubmit="handleSubmit(event)">
                @csrf
                <div class="form-group">
                    <label class="form-label" for="name">Full Name</label>
                    <input class="form-input" id="name" type="text" name="name" placeholder="John Doe" required />
                </div>
                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <input class="form-input" id="email" type="email" name="email" placeholder="john@example.com" required />
                </div>
                <div class="form-group">
                    <label class="form-label" for="message">Message</label>
                    <textarea class="form-textarea" id="message" name="message" placeholder="Tell me about your project..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary" style="align-self:flex-start;">Send Message</button>
            </form>
        </div>
    </section>

    <!-- ── Footer ─────────────────────────────────────────────────── -->
    <footer>
        <p>Built with <span>Laravel</span> &mdash; &copy; {{ date('Y') }} Khairul Hasan. All rights reserved.</p>
    </footer>

    <script>
        // Smooth active-link highlight
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.nav-links a');

        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    navLinks.forEach(link => {
                        link.style.color = link.getAttribute('href') === '#' + entry.target.id
                            ? 'var(--text)'
                            : '';
                    });
                }
            });
        }, { threshold: 0.4 });

        sections.forEach(s => observer.observe(s));

        // Contact form demo handler (wire up to a real endpoint as needed)
        function handleSubmit(e) {
            e.preventDefault();
            const btn = e.target.querySelector('button[type="submit"]');
            btn.disabled = true;
            btn.textContent = 'Sending…';
            setTimeout(() => {
                btn.textContent = 'Message Sent ✓';
                btn.style.background = '#22c55e';
                e.target.reset();
            }, 1000);
        }
    </script>
</body>
</html>
