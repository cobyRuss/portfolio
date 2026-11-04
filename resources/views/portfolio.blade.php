<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $profile['name'] }} — {{ $profile['title'] }}. Personal developer portfolio showcasing skills, certifications, and software projects.">
    <title>{{ $profile['name'] }} | Developer Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
    <script>
        (function () {
            try {
                var saved = localStorage.getItem('portfolio-theme');
                if (saved === 'light' || saved === 'dark') {
                    document.documentElement.setAttribute('data-theme', saved);
                }
            } catch (e) {}
        })();
    </script>
    <style>
        /* ==========================================================================
           Design Tokens — Default: Dark Midnight Slate + Light Mode Override
           ========================================================================== */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root,
        [data-theme="dark"] {
            --bg-main: #0b1120;
            --bg-alt: #0f172a;
            --surface: rgba(30, 41, 59, 0.58);
            --surface-solid: #162033;
            --surface-glass: rgba(11, 17, 32, 0.80);

            --text-primary: #f8fafc;
            --text-secondary: #cbd5e1;
            --text-muted: #94a3b8;

            --primary: #60a5fa;
            --primary-hover: #93c5fd;
            --btn-primary-bg: #2563eb;
            --btn-primary-hover: #3b82f6;
            --primary-soft: rgba(59, 130, 246, 0.14);
            --primary-soft-border: rgba(96, 165, 250, 0.26);
            --accent: #38bdf8;

            --emerald-bg: rgba(16, 185, 129, 0.14);
            --emerald-text: #34d399;
            --amber-bg: rgba(245, 158, 11, 0.15);
            --amber-text: #fbbf24;
            --blue-bg: rgba(59, 130, 246, 0.16);
            --blue-text: #93c5fd;

            --border: rgba(148, 163, 184, 0.14);
            --border-hover: rgba(96, 165, 250, 0.42);
            --section-divider: rgba(148, 163, 184, 0.10);

            --shadow-sm: 0 4px 18px -2px rgba(2, 6, 23, 0.45);
            --shadow-md: 0 12px 30px -6px rgba(2, 6, 23, 0.6);
            --shadow-hover: 0 22px 44px -10px rgba(2, 6, 23, 0.75), 0 0 28px -6px rgba(56, 189, 248, 0.16);

            --spotlight-core: rgba(56, 189, 248, 0.11);
            --spotlight-mid: rgba(37, 99, 235, 0.05);
            --card-glow-fill: rgba(56, 189, 248, 0.08);
            --card-glow-border: rgba(96, 165, 250, 0.65);

            --hero-bg:
                radial-gradient(circle at 14% 18%, rgba(37, 99, 235, 0.16) 0%, transparent 44%),
                radial-gradient(circle at 86% 22%, rgba(14, 165, 233, 0.13) 0%, transparent 45%),
                linear-gradient(180deg, #090e1a 0%, var(--bg-main) 100%);
            --thumb-bg: linear-gradient(135deg, #111c33 0%, #172542 100%);
            --chip-bg: rgba(15, 23, 42, 0.65);
            --track-bg: rgba(15, 23, 42, 0.85);
            --footer-bg: #070b14;

            --radius-sm: 10px;
            --radius-md: 16px;
            --radius-lg: 24px;
            --radius-full: 9999px;

            --ease-out: cubic-bezier(0.22, 1, 0.36, 1);
        }

        [data-theme="light"] {
            --bg-main: #f8fafc;
            --bg-alt: #f1f5f9;
            --surface: rgba(255, 255, 255, 0.90);
            --surface-solid: #ffffff;
            --surface-glass: rgba(255, 255, 255, 0.86);

            --text-primary: #0f172a;
            --text-secondary: #475569;
            --text-muted: #64748b;

            --primary: #2563eb;
            --primary-hover: #1d4ed8;
            --btn-primary-bg: #2563eb;
            --btn-primary-hover: #1d4ed8;
            --primary-soft: #eff6ff;
            --primary-soft-border: #dbeafe;
            --accent: #0ea5e9;

            --emerald-bg: #ecfdf5;
            --emerald-text: #047857;
            --amber-bg: #fffbeb;
            --amber-text: #b45309;
            --blue-bg: #eff6ff;
            --blue-text: #1d4ed8;

            --border: #e2e8f0;
            --border-hover: #93c5fd;
            --section-divider: rgba(226, 232, 240, 0.75);

            --shadow-sm: 0 2px 8px -2px rgba(15, 23, 42, 0.05), 0 1px 3px -1px rgba(15, 23, 42, 0.03);
            --shadow-md: 0 10px 25px -5px rgba(15, 23, 42, 0.06), 0 4px 10px -3px rgba(15, 23, 42, 0.03);
            --shadow-hover: 0 20px 38px -10px rgba(37, 99, 235, 0.13), 0 8px 16px -6px rgba(15, 23, 42, 0.05);

            --spotlight-core: rgba(37, 99, 235, 0.08);
            --spotlight-mid: rgba(14, 165, 233, 0.04);
            --card-glow-fill: rgba(37, 99, 235, 0.05);
            --card-glow-border: rgba(37, 99, 235, 0.55);

            --hero-bg:
                radial-gradient(circle at 12% 18%, rgba(37, 99, 235, 0.08) 0%, transparent 42%),
                radial-gradient(circle at 88% 22%, rgba(14, 165, 233, 0.09) 0%, transparent 45%),
                linear-gradient(180deg, #ffffff 0%, var(--bg-main) 100%);
            --thumb-bg: linear-gradient(135deg, #eff6ff 0%, #f8fafc 100%);
            --chip-bg: #f8fafc;
            --track-bg: #e2e8f0;
            --footer-bg: #0f172a;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 84px;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background-color: var(--bg-main);
            color: var(--text-primary);
            line-height: 1.65;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            transition: background-color 0.35s ease, color 0.35s ease;
        }

        h1, h2, h3, h4, .logo {
            font-family: 'Plus Jakarta Sans', 'Inter', sans-serif;
            letter-spacing: -0.02em;
            color: var(--text-primary);
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 1.5rem;
            position: relative;
            z-index: 2;
        }

        /* ==========================================================================
           Ambient Cursor-Following Spotlight Overlay
           ========================================================================== */
        .cursor-spotlight {
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 1;
            background: radial-gradient(
                650px circle at var(--mouse-x, 50vw) var(--mouse-y, 28vh),
                var(--spotlight-core),
                var(--spotlight-mid) 40%,
                transparent 75%
            );
            transition: opacity 0.3s ease;
        }

        @media (hover: none), (pointer: coarse) {
            .cursor-spotlight {
                display: none;
            }
        }

        /* ==========================================================================
           Page-Load & Hover Animations
           ========================================================================== */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(22px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes pulseGlow {
            0%, 100% {
                transform: scale(1);
                opacity: 0.55;
            }
            50% {
                transform: scale(1.06);
                opacity: 0.85;
            }
        }

        .fade-in {
            opacity: 0;
            animation: fadeInUp 0.75s var(--ease-out) forwards;
            animation-delay: var(--delay, 0s);
        }

        @media (prefers-reduced-motion: reduce) {
            html { scroll-behavior: auto; }
            .fade-in { opacity: 1; animation: none; }
            *, *::before, *::after {
                transition-duration: 0.01ms !important;
                animation-duration: 0.01ms !important;
            }
        }

        /* ==========================================================================
           Header, Theme Toggle & Navigation
           ========================================================================== */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: var(--surface-glass);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            transition: background-color 0.35s ease, border-color 0.35s ease;
        }

        .nav-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 72px;
        }

        .logo {
            display: inline-flex;
            align-items: center;
            gap: 0.55rem;
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--text-primary);
        }

        .logo-mark {
            width: 36px;
            height: 36px;
            border-radius: 10px;
            background: linear-gradient(135deg, var(--btn-primary-bg), var(--accent));
            color: #ffffff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.95rem;
            font-weight: 800;
            box-shadow: 0 6px 16px rgba(37, 99, 235, 0.3);
        }

        .logo span.dot {
            color: var(--primary);
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 0.6rem;
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 0.3rem;
            list-style: none;
        }

        .nav-links a {
            padding: 0.5rem 0.9rem;
            border-radius: var(--radius-full);
            font-size: 0.92rem;
            font-weight: 500;
            color: var(--text-secondary);
            transition: color 0.2s var(--ease-out), background-color 0.2s var(--ease-out);
        }

        .nav-links a:hover {
            color: var(--primary);
            background-color: var(--primary-soft);
        }

        .nav-links a.nav-cta {
            margin-left: 0.35rem;
            background: var(--btn-primary-bg);
            color: #ffffff;
            font-weight: 600;
            padding: 0.55rem 1.15rem;
            box-shadow: 0 4px 14px rgba(37, 99, 235, 0.3);
        }

        .nav-links a.nav-cta:hover {
            background: var(--btn-primary-hover);
            color: #ffffff;
        }

        /* Theme Toggle Button */
        .theme-toggle-btn {
            width: 40px;
            height: 40px;
            border-radius: 11px;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--text-primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            flex-shrink: 0;
            transition: border-color 0.2s, transform 0.2s var(--ease-out), background-color 0.2s, color 0.2s;
        }

        .theme-toggle-btn:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-1px);
        }

        .theme-toggle-btn svg {
            width: 19px;
            height: 19px;
        }

        [data-theme="dark"] .icon-moon { display: none; }
        [data-theme="dark"] .icon-sun { display: block; }
        [data-theme="light"] .icon-sun { display: none; }
        [data-theme="light"] .icon-moon { display: block; }

        /* Pure CSS Mobile Nav Toggle */
        .nav-toggle {
            display: none;
        }

        .nav-toggle-label {
            display: none;
            cursor: pointer;
            width: 40px;
            height: 40px;
            border-radius: 11px;
            border: 1px solid var(--border);
            background: var(--surface);
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 5px;
            transition: border-color 0.2s, background-color 0.2s;
        }

        .nav-toggle-label span {
            display: block;
            width: 18px;
            height: 2px;
            background: var(--text-primary);
            border-radius: 2px;
            transition: transform 0.25s var(--ease-out), opacity 0.2s;
        }

        /* ==========================================================================
           Hero Section
           ========================================================================== */
        .hero {
            position: relative;
            padding: 9.5rem 0 5.5rem;
            background: var(--hero-bg);
            overflow: hidden;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
            gap: 3.5rem;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.4rem 0.95rem;
            border-radius: var(--radius-full);
            background: var(--primary-soft);
            border: 1px solid var(--primary-soft-border);
            color: var(--primary);
            font-size: 0.83rem;
            font-weight: 600;
            margin-bottom: 1.25rem;
        }

        .hero-badge-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--primary);
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.22);
        }

        .hero-title {
            font-size: clamp(2.25rem, 4.5vw, 3.35rem);
            font-weight: 800;
            line-height: 1.15;
            margin-bottom: 0.75rem;
        }

        .hero-role {
            font-size: clamp(1.1rem, 2vw, 1.35rem);
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 1.15rem;
        }

        .hero-bio {
            font-size: 1.04rem;
            color: var(--text-secondary);
            max-width: 560px;
            margin-bottom: 2rem;
            line-height: 1.75;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.55rem;
            padding: 0.8rem 1.55rem;
            border-radius: 12px;
            font-size: 0.94rem;
            font-weight: 600;
            cursor: pointer;
            border: 1px solid transparent;
            transition: transform 0.25s var(--ease-out), box-shadow 0.25s var(--ease-out), background-color 0.2s, border-color 0.2s, color 0.2s;
        }

        .btn svg {
            width: 18px;
            height: 18px;
            flex-shrink: 0;
        }

        .btn-primary {
            background: var(--btn-primary-bg);
            color: #ffffff;
            box-shadow: 0 8px 22px -4px rgba(37, 99, 235, 0.45);
        }

        .btn-primary:hover {
            background: var(--btn-primary-hover);
            transform: translateY(-2px);
            box-shadow: 0 12px 28px -4px rgba(59, 130, 246, 0.55);
        }

        .btn-secondary {
            background: var(--surface);
            color: var(--text-primary);
            border-color: var(--border);
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-sm);
        }

        .btn-secondary:hover {
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-md);
        }

        .hero-visual {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .avatar-wrapper {
            position: relative;
            width: 300px;
            height: 300px;
            border-radius: 50%;
            padding: 7px;
            background: linear-gradient(135deg, var(--btn-primary-bg) 0%, var(--accent) 100%);
            box-shadow: 0 25px 60px -12px rgba(37, 99, 235, 0.38);
            transition: transform 0.4s var(--ease-out), box-shadow 0.4s var(--ease-out);
        }

        .avatar-wrapper::before {
            content: '';
            position: absolute;
            inset: -20px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(56, 189, 248, 0.24) 0%, transparent 70%);
            z-index: -1;
            animation: pulseGlow 5s ease-in-out infinite;
        }

        .avatar-wrapper:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 30px 70px -12px rgba(56, 189, 248, 0.45);
        }

        .avatar-inner {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            background: var(--surface-solid);
            border: 4px solid var(--bg-main);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .hero-photo {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .avatar-fallback {
            display: none;
            width: 100%;
            height: 100%;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--btn-primary-bg), var(--accent));
            color: #ffffff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 4.2rem;
            font-weight: 800;
        }

        /* ==========================================================================
           Section Scaffolding
           ========================================================================== */
        .section {
            position: relative;
            padding: 5.5rem 0;
        }

        .section-alt {
            background-color: var(--bg-alt);
            border-top: 1px solid var(--section-divider);
            border-bottom: 1px solid var(--section-divider);
        }

        .section-header {
            text-align: center;
            max-width: 640px;
            margin: 0 auto 3.25rem;
        }

        .section-eyebrow {
            display: inline-block;
            font-size: 0.78rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
            color: var(--primary);
            background: var(--primary-soft);
            border: 1px solid var(--primary-soft-border);
            padding: 0.3rem 0.85rem;
            border-radius: var(--radius-full);
            margin-bottom: 0.75rem;
        }

        .section-header h2 {
            font-size: clamp(1.75rem, 3vw, 2.25rem);
            font-weight: 800;
            margin-bottom: 0.6rem;
        }

        .section-header p {
            color: var(--text-secondary);
            font-size: 1rem;
        }

        /* ==========================================================================
           Interactive Cards with Cursor-Reactive Glowing Borders
           ========================================================================== */
        .card-surface {
            position: relative;
            background: var(--surface);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--border);
            border-radius: var(--radius-md);
            box-shadow: var(--shadow-sm);
            transition: transform 0.3s var(--ease-out), box-shadow 0.3s var(--ease-out), border-color 0.3s var(--ease-out), background-color 0.35s ease;
        }

        /* Soft cursor sheen inside card */
        .card-surface::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: inherit;
            background: radial-gradient(
                420px circle at var(--card-x, -999px) var(--card-y, -999px),
                var(--card-glow-fill),
                transparent 45%
            );
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
            z-index: 0;
        }

        /* Cursor-reactive glowing 1px border (works even when cursor approaches nearby cards) */
        .card-surface::after {
            content: '';
            position: absolute;
            inset: -1px;
            border-radius: inherit;
            padding: 1px;
            background: radial-gradient(
                300px circle at var(--card-x, -999px) var(--card-y, -999px),
                var(--card-glow-border),
                transparent 48%
            );
            -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
            -webkit-mask-composite: xor;
            mask-composite: exclude;
            pointer-events: none;
            z-index: 3;
        }

        .card-surface > * {
            position: relative;
            z-index: 1;
        }

        .card-surface:hover {
            transform: translateY(-4px) scale(1.008);
            box-shadow: var(--shadow-hover);
            border-color: var(--border-hover);
        }

        .card-surface:hover::before {
            opacity: 1;
        }

        @media (hover: none), (pointer: coarse) {
            .card-surface::before,
            .card-surface::after {
                display: none;
            }
        }

        /* ==========================================================================
           About & Education Section
           ========================================================================== */
        .about-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 2rem;
            align-items: stretch;
        }

        .info-card {
            padding: 2.25rem;
            display: flex;
            flex-direction: column;
        }

        .info-card-header {
            display: flex;
            align-items: center;
            gap: 0.9rem;
            margin-bottom: 1.35rem;
        }

        .icon-box {
            width: 46px;
            height: 46px;
            border-radius: 12px;
            background: var(--primary-soft);
            border: 1px solid var(--primary-soft-border);
            color: var(--primary);
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .icon-box svg {
            width: 22px;
            height: 22px;
        }

        .info-card-header h3 {
            font-size: 1.25rem;
            font-weight: 700;
        }

        .about-text {
            color: var(--text-secondary);
            font-size: 1rem;
            line-height: 1.78;
            margin-bottom: 1.5rem;
        }

        .about-highlights {
            margin-top: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            padding-top: 1.25rem;
            border-top: 1px solid var(--border);
        }

        .highlight-chip {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.38rem 0.85rem;
            border-radius: var(--radius-full);
            background: var(--chip-bg);
            border: 1px solid var(--border);
            font-size: 0.82rem;
            font-weight: 600;
            color: var(--text-secondary);
        }

        .edu-list {
            display: flex;
            flex-direction: column;
            gap: 0.95rem;
        }

        .edu-row {
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 1rem;
            padding-bottom: 0.9rem;
            border-bottom: 1px solid var(--border);
        }

        .edu-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .edu-label {
            font-size: 0.85rem;
            font-weight: 600;
            color: var(--text-muted);
            min-width: 88px;
            flex-shrink: 0;
        }

        .edu-value {
            font-size: 0.95rem;
            font-weight: 600;
            color: var(--text-primary);
            text-align: right;
        }

        .edu-status-pill {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.28rem 0.75rem;
            border-radius: var(--radius-full);
            background: var(--emerald-bg);
            color: var(--emerald-text);
            font-size: 0.82rem;
            font-weight: 700;
        }

        /* ==========================================================================
           Skills & Certifications Section
           ========================================================================== */
        .subsection-title {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 1.35rem;
            display: flex;
            align-items: center;
            gap: 0.65rem;
        }

        .subsection-title span.count-pill {
            font-size: 0.78rem;
            font-weight: 600;
            padding: 0.18rem 0.65rem;
            border-radius: var(--radius-full);
            background: var(--surface);
            border: 1px solid var(--border);
            color: var(--text-muted);
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 1.25rem;
            margin-bottom: 4rem;
        }

        .skill-card {
            padding: 1.35rem 1.45rem;
        }

        .skill-top {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            margin-bottom: 0.45rem;
        }

        .skill-name {
            font-size: 1rem;
            font-weight: 700;
            color: var(--text-primary);
        }

        .skill-badge {
            padding: 0.2rem 0.65rem;
            border-radius: var(--radius-full);
            font-size: 0.73rem;
            font-weight: 600;
        }

        .badge-beginner {
            background: var(--amber-bg);
            color: var(--amber-text);
        }

        .badge-intermediate {
            background: var(--blue-bg);
            color: var(--blue-text);
        }

        .badge-advanced {
            background: var(--emerald-bg);
            color: var(--emerald-text);
        }

        .skill-category {
            font-size: 0.8rem;
            color: var(--text-muted);
            font-weight: 500;
            margin-bottom: 0.85rem;
            display: block;
        }

        .skill-track {
            width: 100%;
            height: 6px;
            background: var(--track-bg);
            border-radius: var(--radius-full);
            overflow: hidden;
        }

        .skill-fill {
            height: 100%;
            border-radius: var(--radius-full);
            transition: width 0.8s var(--ease-out);
        }

        .fill-beginner {
            width: 40%;
            background: linear-gradient(90deg, #f59e0b, #fbbf24);
        }

        .fill-intermediate {
            width: 72%;
            background: linear-gradient(90deg, var(--btn-primary-bg), var(--accent));
        }

        .fill-advanced {
            width: 95%;
            background: linear-gradient(90deg, #10b981, #34d399);
        }

        /* Certifications Grid */
        .cert-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 1.5rem;
        }

        .cert-card {
            padding: 1.4rem;
            display: flex;
            flex-direction: column;
            gap: 1.15rem;
        }

        .cert-thumb-btn {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 10;
            border-radius: 12px;
            border: 1px dashed var(--border-hover);
            background: var(--thumb-bg);
            overflow: hidden;
            cursor: pointer;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            transition: border-color 0.25s var(--ease-out);
        }

        .cert-thumb-btn:hover {
            border-color: var(--primary);
        }

        .cert-thumb-btn img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s var(--ease-out);
        }

        .cert-thumb-btn:hover img {
            transform: scale(1.05);
        }

        .cert-hover-hint {
            position: absolute;
            inset: 0;
            background: rgba(11, 17, 32, 0.65);
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.45rem;
            font-size: 0.85rem;
            font-weight: 600;
            opacity: 0;
            transition: opacity 0.25s var(--ease-out);
        }

        .cert-thumb-btn:hover .cert-hover-hint,
        .cert-thumb-btn:focus-visible .cert-hover-hint {
            opacity: 1;
        }

        .media-placeholder {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 1.25rem;
            color: var(--text-muted);
        }

        .media-placeholder svg {
            width: 32px;
            height: 32px;
            color: var(--primary);
            opacity: 0.85;
        }

        .media-placeholder span {
            font-size: 0.8rem;
            font-weight: 600;
        }

        .cert-body {
            display: flex;
            flex-direction: column;
            gap: 0.45rem;
            flex: 1;
        }

        .cert-top-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.5rem;
        }

        .cert-type {
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            color: var(--primary);
        }

        .cert-status {
            padding: 0.2rem 0.65rem;
            border-radius: var(--radius-full);
            font-size: 0.74rem;
            font-weight: 700;
            background: var(--emerald-bg);
            color: var(--emerald-text);
        }

        .cert-title {
            font-size: 1.08rem;
            font-weight: 700;
            line-height: 1.35;
        }

        .cert-issuer {
            font-size: 0.88rem;
            color: var(--text-secondary);
        }

        .cert-footer {
            margin-top: auto;
            padding-top: 0.9rem;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 0.75rem;
            font-size: 0.82rem;
            color: var(--text-muted);
        }

        .cert-action-group {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
        }

        .link-btn {
            background: none;
            border: none;
            color: var(--primary);
            font-size: 0.83rem;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            padding: 0;
            font-family: inherit;
            transition: color 0.2s;
        }

        .link-btn:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }

        /* ==========================================================================
           Projects Section
           ========================================================================== */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 2rem;
        }

        .project-card {
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .project-media-btn {
            position: relative;
            width: 100%;
            aspect-ratio: 16 / 10;
            border: none;
            border-bottom: 1px solid var(--border);
            background: var(--thumb-bg);
            cursor: pointer;
            overflow: hidden;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .project-media-btn img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.45s var(--ease-out);
        }

        .project-card:hover .project-media-btn img {
            transform: scale(1.05);
        }

        .project-count-badge {
            position: absolute;
            bottom: 0.85rem;
            right: 0.85rem;
            background: rgba(11, 17, 32, 0.82);
            backdrop-filter: blur(6px);
            color: #f8fafc;
            border: 1px solid rgba(255, 255, 255, 0.14);
            padding: 0.32rem 0.75rem;
            border-radius: var(--radius-full);
            font-size: 0.76rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
        }

        .project-body {
            padding: 1.75rem;
            display: flex;
            flex-direction: column;
            flex: 1;
        }

        .project-badge {
            align-self: flex-start;
            padding: 0.25rem 0.75rem;
            border-radius: var(--radius-full);
            background: var(--primary-soft);
            border: 1px solid var(--primary-soft-border);
            color: var(--primary);
            font-size: 0.76rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
        }

        .project-title {
            font-size: 1.22rem;
            font-weight: 700;
            margin-bottom: 0.6rem;
        }

        .project-desc {
            color: var(--text-secondary);
            font-size: 0.94rem;
            line-height: 1.7;
            margin-bottom: 1.25rem;
        }

        .project-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 0.45rem;
            margin-top: auto;
            margin-bottom: 1.25rem;
        }

        .project-tag {
            font-size: 0.75rem;
            font-weight: 600;
            padding: 0.25rem 0.65rem;
            border-radius: 8px;
            background: var(--chip-bg);
            border: 1px solid var(--border);
            color: var(--text-secondary);
        }

        .project-footer {
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        /* ==========================================================================
           Contact Section (Responsive 2x3 Grid)
           ========================================================================== */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
        }

        .contact-card {
            padding: 2rem 1.5rem;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
        }

        .contact-icon-wrap {
            width: 54px;
            height: 54px;
            border-radius: 16px;
            background: var(--primary-soft);
            border: 1px solid var(--primary-soft-border);
            color: var(--primary);
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0.5rem;
            transition: background-color 0.25s var(--ease-out), border-color 0.25s var(--ease-out), color 0.25s var(--ease-out), transform 0.25s var(--ease-out);
        }

        .contact-card:hover .contact-icon-wrap {
            background: var(--btn-primary-bg);
            border-color: var(--btn-primary-bg);
            color: #ffffff;
            transform: scale(1.08);
        }

        .contact-icon-wrap svg {
            width: 24px;
            height: 24px;
        }

        .contact-card h3 {
            font-size: 1rem;
            font-weight: 700;
        }

        .contact-card p {
            color: var(--text-secondary);
            font-size: 0.92rem;
            word-break: break-word;
        }

        /* ==========================================================================
           Slim Footer (Copyright Text Only)
           ========================================================================== */
        .site-footer {
            position: relative;
            z-index: 2;
            background: var(--footer-bg);
            border-top: 1px solid var(--section-divider);
            color: #94a3b8;
            padding: 1.65rem 0;
        }

        .footer-inner {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
        }

        .footer-copy {
            font-size: 0.9rem;
            color: #cbd5e1;
            font-weight: 500;
        }

        /* ==========================================================================
           Custom Pop-Up Modal & Slider (Native CSS Transitions)
           ========================================================================== */
        .modal-backdrop {
            position: fixed;
            inset: 0;
            z-index: 2500;
            background: rgba(7, 11, 20, 0.90);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.28s var(--ease-out), visibility 0.28s var(--ease-out);
        }

        .modal-backdrop.is-open {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .modal-dialog {
            position: relative;
            width: 100%;
            max-width: 960px;
            display: flex;
            flex-direction: column;
            align-items: center;
            transform: scale(0.95) translateY(10px);
            transition: transform 0.3s var(--ease-out);
        }

        .modal-backdrop.is-open .modal-dialog {
            transform: scale(1) translateY(0);
        }

        .modal-topbar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 0.9rem;
            color: #f8fafc;
        }

        .modal-caption {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 1rem;
            font-weight: 600;
            color: #f8fafc;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .modal-close-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            font-size: 1.5rem;
            line-height: 1;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: background-color 0.2s, transform 0.2s;
        }

        .modal-close-btn:hover {
            background: rgba(255, 255, 255, 0.24);
            transform: scale(1.06);
        }

        .modal-stage {
            position: relative;
            width: 100%;
            min-height: 280px;
            max-height: 76vh;
            background: rgba(15, 23, 42, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: var(--radius-md);
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            padding: 0.75rem;
        }

        .modal-img {
            max-width: 100%;
            max-height: 72vh;
            object-fit: contain;
            border-radius: 10px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.5);
            transition: opacity 0.2s ease;
        }

        .modal-placeholder-box {
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 0.75rem;
            padding: 3.5rem 2rem;
            color: #e2e8f0;
            text-align: center;
        }

        .modal-placeholder-box svg {
            width: 48px;
            height: 48px;
            color: #60a5fa;
        }

        .modal-nav-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 48px;
            height: 48px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.22);
            background: rgba(15, 23, 42, 0.78);
            color: #ffffff;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background-color 0.2s, transform 0.2s;
            z-index: 5;
        }

        .modal-nav-btn:hover {
            background: var(--btn-primary-bg);
            border-color: var(--btn-primary-bg);
            transform: translateY(-50%) scale(1.07);
        }

        .modal-nav-btn svg {
            width: 22px;
            height: 22px;
        }

        .modal-prev { left: 1rem; }
        .modal-next { right: 1rem; }

        .modal-bottombar {
            margin-top: 0.95rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .modal-counter {
            color: #e2e8f0;
            font-size: 0.85rem;
            font-weight: 600;
            background: rgba(255, 255, 255, 0.12);
            padding: 0.3rem 0.85rem;
            border-radius: var(--radius-full);
        }

        .modal-dots {
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }

        .modal-dot {
            width: 9px;
            height: 9px;
            border-radius: 50%;
            border: none;
            background: rgba(255, 255, 255, 0.32);
            cursor: pointer;
            padding: 0;
            transition: transform 0.2s, background-color 0.2s, width 0.2s;
        }

        .modal-dot.active {
            width: 22px;
            border-radius: var(--radius-full);
            background: #60a5fa;
        }

        /* ==========================================================================
           Responsive Breakpoints (Tablets & Smartphones)
           ========================================================================== */
        @media (max-width: 920px) {
            .hero-grid {
                grid-template-columns: 1fr;
                text-align: center;
                gap: 2.5rem;
            }

            .hero-visual {
                order: -1;
            }

            .avatar-wrapper {
                width: 230px;
                height: 230px;
            }

            .hero-bio {
                margin-left: auto;
                margin-right: auto;
            }

            .hero-actions {
                justify-content: center;
            }

            .about-grid {
                grid-template-columns: 1fr;
            }

            .contact-grid {
                grid-template-columns: repeat(2, 1fr);
                max-width: 680px;
                margin: 0 auto;
            }
        }

        @media (max-width: 768px) {
            .hero {
                padding: 7.5rem 0 4rem;
            }

            .section {
                padding: 4rem 0;
            }

            .nav-toggle-label {
                display: inline-flex;
            }

            .nav-links {
                position: absolute;
                top: 72px;
                left: 0;
                right: 0;
                background: var(--surface-solid);
                border-bottom: 1px solid var(--border);
                box-shadow: var(--shadow-md);
                flex-direction: column;
                align-items: stretch;
                padding: 1rem 1.5rem 1.35rem;
                gap: 0.35rem;
                opacity: 0;
                visibility: hidden;
                transform: translateY(-8px);
                transition: opacity 0.25s var(--ease-out), transform 0.25s var(--ease-out), visibility 0.25s;
            }

            .nav-links a {
                padding: 0.7rem 1rem;
                border-radius: 10px;
            }

            .nav-links a.nav-cta {
                margin-left: 0;
                margin-top: 0.35rem;
                text-align: center;
            }

            .nav-toggle:checked ~ .nav-links {
                opacity: 1;
                visibility: visible;
                transform: translateY(0);
            }

            .nav-toggle:checked ~ .nav-toggle-label span:nth-child(1) {
                transform: translateY(7px) rotate(45deg);
            }

            .nav-toggle:checked ~ .nav-toggle-label span:nth-child(2) {
                opacity: 0;
            }

            .nav-toggle:checked ~ .nav-toggle-label span:nth-child(3) {
                transform: translateY(-7px) rotate(-45deg);
            }

            .edu-row {
                flex-direction: column;
                gap: 0.25rem;
            }

            .edu-value {
                text-align: left;
            }

            .projects-grid,
            .cert-grid {
                grid-template-columns: 1fr;
            }

            .modal-backdrop {
                padding: 0.85rem;
            }

            .modal-nav-btn {
                width: 40px;
                height: 40px;
            }

            .modal-prev { left: 0.5rem; }
            .modal-next { right: 0.5rem; }
        }

        @media (max-width: 560px) {
            .contact-grid {
                grid-template-columns: 1fr;
                max-width: 420px;
            }
        }

        @media (max-width: 420px) {
            .avatar-wrapper {
                width: 196px;
                height: 196px;
            }

            .info-card {
                padding: 1.5rem;
            }

            .hero-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

    <!-- Ambient Cursor-Following Spotlight -->
    <div class="cursor-spotlight" aria-hidden="true"></div>

    <!-- ========================================================================
         Navigation Bar (with Light/Dark Theme Switch)
         ======================================================================== -->
    <header class="navbar">
        <div class="container nav-inner">
            <a href="#" class="logo" aria-label="{{ $profile['name'] }} Home">
                <span class="logo-mark">RM</span>
                <span>Coby<span class="dot">.</span></span>
            </a>

            <div class="nav-right">
                <input type="checkbox" id="nav-toggle" class="nav-toggle" aria-hidden="true">

                <nav class="nav-links" aria-label="Primary Navigation">
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#certifications">Certifications</a>
                    <a href="#projects">Projects</a>
                    <a href="#contact" class="nav-cta">Contact Me</a>
                </nav>

                <button type="button" id="themeToggle" class="theme-toggle-btn" aria-label="Switch color theme" title="Toggle Dark / Light Mode">
                    <!-- Sun icon (shown in dark mode to switch to light) -->
                    <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <circle cx="12" cy="12" r="5"></circle>
                        <line x1="12" y1="1" x2="12" y2="3"></line>
                        <line x1="12" y1="21" x2="12" y2="23"></line>
                        <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                        <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                        <line x1="1" y1="12" x2="3" y2="12"></line>
                        <line x1="21" y1="12" x2="23" y2="12"></line>
                        <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                        <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                    </svg>
                    <!-- Moon icon (shown in light mode to switch to dark) -->
                    <svg class="icon-moon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                    </svg>
                </button>

                <label for="nav-toggle" class="nav-toggle-label" aria-label="Toggle navigation menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
            </div>
        </div>
    </header>

    <main>
        <!-- ====================================================================
             1. Hero Section
             ==================================================================== -->
        <section class="hero" id="top">
            <div class="container hero-grid">
                <div class="hero-content fade-in" style="--delay: 0.05s;">
                    <div class="hero-badge">
                        <span class="hero-badge-dot"></span>
                        <span>{{ $profile['status_badge'] }} &middot; {{ $education['campus'] }}</span>
                    </div>

                    <h1 class="hero-title">{{ $profile['name'] }}</h1>
                    <p class="hero-role">{{ $profile['title'] }}</p>
                    <p class="hero-bio">{{ $profile['about'] }}</p>

                    <div class="hero-actions">
                        <a href="#projects" class="btn btn-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                            View Projects
                        </a>
                        <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">
                            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                            GitHub ({{ $profile['github_username'] }})
                        </a>
                    </div>
                </div>

                <div class="hero-visual fade-in" style="--delay: 0.16s;">
                    <div class="avatar-wrapper">
                        <div class="avatar-inner">
                            <!-- Profile photo source strictly set to a0d3a185-05a0-4ac0-a10b-c39b51f0f5c0.jpg -->
                            <img
                                src="{{ $profile['photo'] }}"
                                alt="{{ $profile['name'] }}"
                                class="hero-photo"
                                onerror="if (!this.dataset.triedFallback) { this.dataset.triedFallback = '1'; this.src = '{{ asset('images/profile.png') }}'; } else { this.style.display = 'none'; this.nextElementSibling.style.display = 'flex'; }"
                            >
                            <div class="avatar-fallback" aria-hidden="true">RM</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             2. About & Education Section
             ==================================================================== -->
        <section class="section" id="about">
            <div class="container">
                <div class="section-header fade-in" style="--delay: 0.08s;">
                    <span class="section-eyebrow">Profile &amp; Academics</span>
                    <h2>About &amp; Education</h2>
                    <p>Background, academic journey, and current focus as a 4th-Year BSIT student.</p>
                </div>

                <div class="about-grid">
                    <!-- Brief Bio Card -->
                    <article class="card-surface info-card fade-in" style="--delay: 0.14s;">
                        <div class="info-card-header">
                            <div class="icon-box" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </div>
                            <h3>About Me</h3>
                        </div>

                        <p class="about-text">{{ $profile['about'] }}</p>

                        <div class="about-highlights">
                            <span class="highlight-chip">4th-Year BSIT Student</span>
                            <span class="highlight-chip">Web &amp; Offline Systems</span>
                            <span class="highlight-chip">Software Development</span>
                        </div>
                    </article>

                    <!-- Education Card -->
                    <article class="card-surface info-card fade-in" style="--delay: 0.22s;">
                        <div class="info-card-header">
                            <div class="icon-box" aria-hidden="true">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                </svg>
                            </div>
                            <h3>Education</h3>
                        </div>

                        <div class="edu-list">
                            <div class="edu-row">
                                <span class="edu-label">Institution</span>
                                <span class="edu-value">{{ $education['school'] }}</span>
                            </div>
                            <div class="edu-row">
                                <span class="edu-label">Campus</span>
                                <span class="edu-value">{{ $education['campus'] }}</span>
                            </div>
                            <div class="edu-row">
                                <span class="edu-label">Degree</span>
                                <span class="edu-value">{{ $education['program'] }}</span>
                            </div>
                            <div class="edu-row">
                                <span class="edu-label">Status</span>
                                <span class="edu-value">
                                    <span class="edu-status-pill">{{ $education['status'] }}</span>
                                </span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             3. Skills & Certifications Section
             ==================================================================== -->
        <section class="section section-alt" id="skills">
            <div class="container">
                <div class="section-header fade-in" style="--delay: 0.08s;">
                    <span class="section-eyebrow">Capabilities &amp; Credentials</span>
                    <h2>Skills &amp; Certifications</h2>
                    <p>Core technologies I build with and verified professional credentials.</p>
                </div>

                <!-- Tech Stack Grid -->
                <h3 class="subsection-title">
                    Technical Stack
                    <span class="count-pill">{{ count($skills) }} Technologies</span>
                </h3>

                <div class="skills-grid">
                    @foreach($skills as $index => $skill)
                        <div class="card-surface skill-card fade-in" style="--delay: {{ number_format(0.05 * ($index % 5), 2) }}s;">
                            <div class="skill-top">
                                <span class="skill-name">{{ $skill['name'] }}</span>
                                <span class="skill-badge badge-{{ strtolower($skill['level']) }}">{{ $skill['level'] }}</span>
                            </div>
                            <span class="skill-category">{{ $skill['category'] }}</span>
                            <div class="skill-track" role="progressbar" aria-label="{{ $skill['name'] }} proficiency: {{ $skill['level'] }}">
                                <div class="skill-fill fill-{{ strtolower($skill['level']) }}"></div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Certifications Anchor & Grid -->
                <div id="certifications" style="scroll-margin-top: 96px;">
                    <h3 class="subsection-title">
                        Certifications &amp; Eligibility
                        <span class="count-pill">{{ count($certifications) }} Credentials</span>
                    </h3>

                    <div class="cert-grid">
                        @foreach($certifications as $certIndex => $cert)
                            <article class="card-surface cert-card fade-in" style="--delay: {{ number_format(0.08 * ($certIndex + 1), 2) }}s;">
                                <!-- Structural Placeholder: Certificate Image Thumbnail (Opens in Custom Pop-Up Modal, NOT a new tab) -->
                                <button
                                    type="button"
                                    class="cert-thumb-btn"
                                    data-title="{{ $cert['title'] }} — {{ $cert['issuer'] }}"
                                    data-images='@json([!empty($cert['image']) ? $cert['image'] : ""])'
                                    onclick="openGalleryFromTrigger(this)"
                                    aria-label="Preview certificate for {{ $cert['title'] }}"
                                >
                                    @if(!empty($cert['image']))
                                        <img
                                            src="{{ $cert['image'] }}"
                                            alt="{{ $cert['title'] }} credential preview"
                                            loading="lazy"
                                            onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                        >
                                    @endif
                                    <div class="media-placeholder" style="{{ !empty($cert['image']) ? 'display: none;' : 'display: flex;' }}">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <rect x="3" y="4" width="18" height="16" rx="2"></rect>
                                            <circle cx="9" cy="10" r="2"></circle>
                                            <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"></path>
                                        </svg>
                                        <span>Certificate Image Placeholder</span>
                                    </div>
                                    <span class="cert-hover-hint">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                            <circle cx="11" cy="11" r="8"></circle>
                                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                            <line x1="11" y1="8" x2="11" y2="14"></line>
                                            <line x1="8" y1="11" x2="14" y2="11"></line>
                                        </svg>
                                        Preview in Modal
                                    </span>
                                </button>

                                <div class="cert-body">
                                    <div class="cert-top-meta">
                                        <span class="cert-type">{{ $cert['type'] }}</span>
                                        <span class="cert-status">{{ $cert['status'] }}</span>
                                    </div>
                                    <h4 class="cert-title">{{ $cert['title'] }}</h4>
                                    <p class="cert-issuer">{{ $cert['issuer'] }}</p>
                                </div>

                                <div class="cert-footer">
                                    <span>{{ $cert['date'] }}</span>
                                    <div class="cert-action-group">
                                        <button
                                            type="button"
                                            class="link-btn"
                                            data-title="{{ $cert['title'] }} — {{ $cert['issuer'] }}"
                                            data-images='@json([!empty($cert['image']) ? $cert['image'] : ""])'
                                            onclick="openGalleryFromTrigger(this)"
                                        >
                                            View Certificate
                                        </button>
                                        {{-- Structural Placeholder: Insert official verification URL in PortfolioController 'link' key --}}
                                        @if(!empty($cert['link']))
                                            <a href="{{ $cert['link'] }}" class="link-btn" target="_blank" rel="noopener noreferrer">
                                                Verify &nearr;
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <!-- ====================================================================
             4. Projects Section
             ==================================================================== -->
        <section class="section" id="projects">
            <div class="container">
                <div class="section-header fade-in" style="--delay: 0.08s;">
                    <span class="section-eyebrow">Featured Work</span>
                    <h2>Projects</h2>
                    <p>Selected web and offline applications built to solve real-world workflows.</p>
                </div>

                <div class="projects-grid">
                    @foreach($projects as $projIndex => $project)
                        @php
                            $slideImages = !empty($project['images']) ? $project['images'] : [''];
                            $imageCount = !empty($project['images']) ? count($project['images']) : 0;
                        @endphp
                        <article class="card-surface project-card fade-in" style="--delay: {{ number_format(0.1 * ($projIndex + 1), 2) }}s;">
                            <!-- Structural Placeholder: Project Cover Image (Opens Modal Slider with Prev/Next) -->
                            <button
                                type="button"
                                class="project-media-btn"
                                data-title="{{ $project['title'] }}"
                                data-images='@json($slideImages)'
                                onclick="openGalleryFromTrigger(this)"
                                aria-label="Open screenshot slider for {{ $project['title'] }}"
                            >
                                @if($imageCount > 0 && !empty($project['images'][0]))
                                    <img
                                        src="{{ $project['images'][0] }}"
                                        alt="{{ $project['title'] }} preview"
                                        loading="lazy"
                                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                                    >
                                @endif
                                <div class="media-placeholder" style="{{ ($imageCount > 0 && !empty($project['images'][0])) ? 'display: none;' : 'display: flex;' }}">
                                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    <span>Project Screenshot Placeholder</span>
                                </div>

                                <span class="project-count-badge">
                                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                        <polyline points="21 15 16 10 5 21"></polyline>
                                    </svg>
                                    {{ $imageCount > 0 ? $imageCount . ' Screenshot' . ($imageCount > 1 ? 's' : '') : 'Preview Slider' }}
                                </span>
                            </button>

                            <div class="project-body">
                                <span class="project-badge">{{ $project['type'] }}</span>
                                <h3 class="project-title">{{ $project['title'] }}</h3>
                                <p class="project-desc">{{ $project['description'] }}</p>

                                @if(!empty($project['tags']))
                                    <div class="project-tags">
                                        @foreach($project['tags'] as $tag)
                                            <span class="project-tag">{{ $tag }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="project-footer">
                                    <button
                                        type="button"
                                        class="link-btn"
                                        data-title="{{ $project['title'] }}"
                                        data-images='@json($slideImages)'
                                        onclick="openGalleryFromTrigger(this)"
                                    >
                                        Open Gallery Slider &rarr;
                                    </button>
                                </div>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ====================================================================
             5. Contact Section (Responsive 2x3 Grid)
             ==================================================================== -->
        <section class="section section-alt" id="contact">
            <div class="container">
                <div class="section-header fade-in" style="--delay: 0.08s;">
                    <span class="section-eyebrow">Get In Touch</span>
                    <h2>Contact Me</h2>
                    <p>Have a question, project idea, or collaboration opportunity? Feel free to reach out.</p>
                </div>

                <div class="contact-grid">
                    <a href="mailto:{{ $profile['email'] }}" class="card-surface contact-card fade-in" style="--delay: 0.1s;">
                        <div class="contact-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <h3>Email</h3>
                        <p>{{ $profile['email'] }}</p>
                    </a>

                    <a href="tel:{{ preg_replace('/\s+/', '', $profile['phone']) }}" class="card-surface contact-card fade-in" style="--delay: 0.16s;">
                        <div class="contact-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <h3>Phone</h3>
                        <p>{{ $profile['phone'] }}</p>
                    </a>

                    <a href="{{ $profile['github'] }}" target="_blank" rel="noopener noreferrer" class="card-surface contact-card fade-in" style="--delay: 0.22s;">
                        <div class="contact-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.53 1.032 1.53 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"/>
                            </svg>
                        </div>
                        <h3>GitHub</h3>
                        <p>{{ $profile['github_username'] }}</p>
                    </a>

                    <a href="{{ $profile['socials']['facebook'] }}" target="_blank" rel="noopener noreferrer" class="card-surface contact-card fade-in" style="--delay: 0.28s;">
                        <div class="contact-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"/>
                            </svg>
                        </div>
                        <h3>Facebook</h3>
                        <p>{{ $profile['socials']['facebook_handle'] }}</p>
                    </a>

                    <a href="{{ $profile['socials']['messenger'] }}" target="_blank" rel="noopener noreferrer" class="card-surface contact-card fade-in" style="--delay: 0.34s;">
                        <div class="contact-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2C6.36 2 2 6.13 2 11.7c0 2.91 1.19 5.44 3.14 7.17.16.14.26.35.27.57l.05 1.78c.02.57.61.94 1.13.71l1.98-.87c.17-.08.36-.1.55-.06.91.25 1.87.38 2.88.38 5.64 0 10-4.13 10-9.7C22 6.13 17.64 2 12 2zm5.95 7.56-2.93 4.65c-.47.74-1.47.92-2.17.4l-2.34-1.75a.6.6 0 0 0-.72 0l-3.16 2.4c-.42.32-.97-.19-.69-.64l2.93-4.65c.47-.74 1.47-.92 2.17-.4l2.34 1.75a.6.6 0 0 0 .72 0l3.16-2.4c.42-.32.97.19.69.64z"/>
                            </svg>
                        </div>
                        <h3>Messenger</h3>
                        <p>{{ $profile['socials']['messenger_handle'] }}</p>
                    </a>

                    <a href="{{ $profile['socials']['instagram'] }}" target="_blank" rel="noopener noreferrer" class="card-surface contact-card fade-in" style="--delay: 0.4s;">
                        <div class="contact-icon-wrap" aria-hidden="true">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </div>
                        <h3>Instagram</h3>
                        <p>{{ $profile['socials']['instagram_handle'] }}</p>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <!-- ========================================================================
         Slim Footer with Copyright Text Only
         ======================================================================== -->
    <footer class="site-footer">
        <div class="container footer-inner">
            <p class="footer-copy">&copy; 2026 Russel Tristan L. Marzo &middot; Coby</p>
        </div>
    </footer>

    <!-- ========================================================================
         Custom Pop-Up Modal & Project Image Slider
         ======================================================================== -->
    <div id="galleryModal" class="modal-backdrop" role="dialog" aria-modal="true" aria-labelledby="modalCaption" onclick="handleBackdropClick(event)">
        <div class="modal-dialog">
            <div class="modal-topbar">
                <div id="modalCaption" class="modal-caption">Preview</div>
                <button type="button" class="modal-close-btn" onclick="closeModal()" aria-label="Close modal">&times;</button>
            </div>

            <div class="modal-stage">
                <button type="button" id="modalPrevBtn" class="modal-nav-btn modal-prev" onclick="changeSlide(-1, event)" aria-label="Previous image">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="15 18 9 12 15 6"></polyline>
                    </svg>
                </button>

                <img
                    id="modalImage"
                    class="modal-img"
                    src=""
                    alt="Modal preview"
                    onerror="this.style.display='none'; document.getElementById('modalPlaceholder').style.display='flex';"
                >

                <div id="modalPlaceholder" class="modal-placeholder-box">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                        <circle cx="8.5" cy="8.5" r="1.5"></circle>
                        <polyline points="21 15 16 10 5 21"></polyline>
                    </svg>
                    <strong id="modalPlaceholderTitle">Image Placeholder</strong>
                    <span style="font-size: 0.85rem; color: #94a3b8;">Insert your image path in <code>PortfolioController.php</code> to display it here.</span>
                </div>

                <button type="button" id="modalNextBtn" class="modal-nav-btn modal-next" onclick="changeSlide(1, event)" aria-label="Next image">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </button>
            </div>

            <div id="modalBottomBar" class="modal-bottombar">
                <span id="modalCounter" class="modal-counter"></span>
                <div id="modalDots" class="modal-dots"></div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            /* ----------------------------------------------------------------
               1. Dark / Light Theme Switcher
               ---------------------------------------------------------------- */
            const rootEl = document.documentElement;
            const themeToggle = document.getElementById('themeToggle');

            if (themeToggle) {
                themeToggle.addEventListener('click', function () {
                    const current = rootEl.getAttribute('data-theme') === 'light' ? 'light' : 'dark';
                    const next = current === 'dark' ? 'light' : 'dark';
                    rootEl.setAttribute('data-theme', next);
                    try {
                        localStorage.setItem('portfolio-theme', next);
                    } catch (e) {}
                });
            }

            /* ----------------------------------------------------------------
               2. Cursor-Following Spotlight & Glowing Card Borders
               ---------------------------------------------------------------- */
            const cards = document.querySelectorAll('.card-surface');
            const hasFinePointer = window.matchMedia && window.matchMedia('(hover: hover) and (pointer: fine)').matches;

            if (hasFinePointer) {
                let rafPending = false;
                let mouseX = 0;
                let mouseY = 0;

                window.addEventListener('mousemove', function (e) {
                    mouseX = e.clientX;
                    mouseY = e.clientY;
                    if (!rafPending) {
                        rafPending = true;
                        window.requestAnimationFrame(function () {
                            rootEl.style.setProperty('--mouse-x', mouseX + 'px');
                            rootEl.style.setProperty('--mouse-y', mouseY + 'px');

                            cards.forEach(function (card) {
                                const rect = card.getBoundingClientRect();
                                card.style.setProperty('--card-x', (mouseX - rect.left) + 'px');
                                card.style.setProperty('--card-y', (mouseY - rect.top) + 'px');
                            });
                            rafPending = false;
                        });
                    }
                }, { passive: true });
            }

            /* ----------------------------------------------------------------
               3. Custom Modal & Project Gallery Slider
               ---------------------------------------------------------------- */
            let slides = [];
            let currentIndex = 0;
            let currentTitle = '';
            let touchStartX = 0;

            const modal = document.getElementById('galleryModal');
            const modalImg = document.getElementById('modalImage');
            const modalPlaceholder = document.getElementById('modalPlaceholder');
            const modalPlaceholderTitle = document.getElementById('modalPlaceholderTitle');
            const modalCaption = document.getElementById('modalCaption');
            const prevBtn = document.getElementById('modalPrevBtn');
            const nextBtn = document.getElementById('modalNextBtn');
            const bottomBar = document.getElementById('modalBottomBar');
            const counterEl = document.getElementById('modalCounter');
            const dotsEl = document.getElementById('modalDots');
            const navToggle = document.getElementById('nav-toggle');

            window.openGalleryFromTrigger = function (triggerEl) {
                const raw = triggerEl.getAttribute('data-images') || '[]';
                const title = triggerEl.getAttribute('data-title') || 'Preview';
                let parsed = [];
                try {
                    parsed = JSON.parse(raw);
                } catch (e) {
                    parsed = [];
                }
                if (!Array.isArray(parsed) || parsed.length === 0) {
                    parsed = [''];
                }
                slides = parsed;
                currentIndex = 0;
                currentTitle = title;
                renderSlide();
                modal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            };

            function renderSlide() {
                const src = slides[currentIndex] || '';
                modalCaption.textContent = currentTitle;

                if (src) {
                    modalPlaceholder.style.display = 'none';
                    modalImg.style.display = 'block';
                    modalImg.src = src;
                    modalImg.alt = currentTitle + (slides.length > 1 ? ' (' + (currentIndex + 1) + ' of ' + slides.length + ')' : '');
                } else {
                    modalImg.removeAttribute('src');
                    modalImg.style.display = 'none';
                    modalPlaceholder.style.display = 'flex';
                    modalPlaceholderTitle.textContent = currentTitle + (slides.length > 1 ? ' — Slide ' + (currentIndex + 1) : '');
                }

                const hasMultiple = slides.length > 1;
                prevBtn.style.display = hasMultiple ? 'flex' : 'none';
                nextBtn.style.display = hasMultiple ? 'flex' : 'none';
                bottomBar.style.display = hasMultiple ? 'flex' : 'none';

                if (hasMultiple) {
                    counterEl.textContent = (currentIndex + 1) + ' / ' + slides.length;
                    dotsEl.innerHTML = '';
                    slides.forEach(function (_, idx) {
                        const dot = document.createElement('button');
                        dot.type = 'button';
                        dot.className = 'modal-dot' + (idx === currentIndex ? ' active' : '');
                        dot.setAttribute('aria-label', 'Go to slide ' + (idx + 1));
                        dot.onclick = function (e) {
                            e.stopPropagation();
                            currentIndex = idx;
                            renderSlide();
                        };
                        dotsEl.appendChild(dot);
                    });
                }
            }

            window.changeSlide = function (step, event) {
                if (event) event.stopPropagation();
                if (slides.length <= 1) return;
                currentIndex = (currentIndex + step + slides.length) % slides.length;
                renderSlide();
            };

            window.closeModal = function () {
                modal.classList.remove('is-open');
                document.body.style.overflow = '';
            };

            window.handleBackdropClick = function (event) {
                if (event.target === modal) {
                    closeModal();
                }
            };

            document.addEventListener('keydown', function (e) {
                if (!modal.classList.contains('is-open')) return;
                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowLeft') changeSlide(-1);
                if (e.key === 'ArrowRight') changeSlide(1);
            });

            modal.addEventListener('touchstart', function (e) {
                if (e.changedTouches && e.changedTouches.length > 0) {
                    touchStartX = e.changedTouches[0].screenX;
                }
            }, { passive: true });

            modal.addEventListener('touchend', function (e) {
                if (slides.length <= 1 || !e.changedTouches || e.changedTouches.length === 0) return;
                const diff = e.changedTouches[0].screenX - touchStartX;
                if (Math.abs(diff) > 45) {
                    changeSlide(diff < 0 ? 1 : -1);
                }
            }, { passive: true });

            document.querySelectorAll('.nav-links a').forEach(function (link) {
                link.addEventListener('click', function () {
                    if (navToggle) navToggle.checked = false;
                });
            });
        })();
    </script>
</body>
</html>
