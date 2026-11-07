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
            -webkit-tap-highlight-color: transparent;
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
            grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
            gap: 1.25rem;
            margin-bottom: 4rem;
        }

        .skill-card {
            display: flex;
            align-items: center;
            gap: 1.15rem;
            padding: 1.2rem 1.35rem;
            border-radius: var(--radius-lg);
            transition: transform var(--transition-base), border-color var(--transition-base), box-shadow var(--transition-base);
        }

        .skill-card:hover {
            transform: translateY(-3px);
            border-color: var(--card-hover-border);
            box-shadow: var(--card-hover-shadow);
        }

        .skill-icon-wrap {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            border-radius: var(--radius-md);
            background: var(--primary-soft);
            border: 1px solid var(--primary-soft-border);
            color: var(--primary);
            flex-shrink: 0;
            transition: transform var(--transition-fast), background var(--transition-fast), color var(--transition-fast), border-color var(--transition-fast);
        }



        .skill-icon-wrap svg {
            width: 24px;
            height: 24px;
            display: block;
        }

        .skill-info {
            display: flex;
            flex-direction: column;
            gap: 0.2rem;
            min-width: 0;
        }

        .skill-name {
            font-size: 1.02rem;
            font-weight: 700;
            color: var(--text-primary);
            line-height: 1.25;
            letter-spacing: -0.01em;
        }

        .skill-category {
            font-size: 0.78rem;
            color: var(--text-muted);
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        /* Certifications Horizontal Slider & Full-Screen Grid Modal */
        .certifications-header-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            flex-wrap: wrap;
            margin-bottom: 1.35rem;
        }

        .certifications-header-row .subsection-title {
            margin-bottom: 0;
        }

        .cert-view-all-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.5rem 1rem;
            border-radius: 10px;
            border: 1px solid var(--border);
            background: var(--surface);
            color: var(--primary);
            font-family: inherit;
            font-size: 0.84rem;
            font-weight: 600;
            cursor: pointer;
            transition: border-color 0.2s, background-color 0.2s, transform 0.2s var(--ease-out);
        }

        .cert-view-all-btn:hover {
            border-color: var(--primary);
            background: var(--primary-soft);
            transform: translateY(-1px);
        }

        .certifications-slider-wrapper {
            position: relative;
        }

        .certifications-slider-track {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            padding: 0.4rem 0.25rem 1rem;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .certifications-slider-track::-webkit-scrollbar {
            display: none;
        }

        .certifications-slider-track .cert-card {
            flex: 0 0 345px;
            width: 345px;
            max-width: 345px;
            scroll-snap-align: start;
        }

        .cert-card {
            padding: 1.4rem;
            display: flex;
            flex-direction: column;
            gap: 1.15rem;
        }

        .cert-slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-55%);
            z-index: 12;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1px solid var(--border-hover);
            background: rgba(17, 26, 46, 0.92);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: #f8fafc;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(2, 6, 23, 0.55);
            transition: background-color 0.22s var(--ease-out), border-color 0.22s var(--ease-out), transform 0.22s var(--ease-out), opacity 0.22s;
        }

        [data-theme="light"] .cert-slider-arrow {
            background: rgba(255, 255, 255, 0.95);
            color: var(--text-primary);
            box-shadow: var(--shadow-md);
        }



        .cert-slider-arrow svg {
            width: 20px;
            height: 20px;
        }

        .cert-arrow-left {
            left: -18px;
        }

        .cert-arrow-right {
            right: -18px;
        }

        /* Full-Screen Certifications Grid Modal (#cert-full-modal) */
        #cert-full-modal.modal {
            position: fixed;
            inset: 0;
            z-index: 2200;
            background: rgba(11, 17, 30, 0.92);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            overflow-y: auto;
            padding: 3rem 1.5rem 4rem;
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
            transition: opacity 0.28s var(--ease-out), visibility 0.28s var(--ease-out);
        }

        [data-theme="light"] #cert-full-modal.modal {
            background: rgba(15, 23, 42, 0.82);
        }

        #cert-full-modal.modal.is-open {
            opacity: 1;
            visibility: visible;
            pointer-events: auto;
        }

        .cert-full-modal-inner {
            max-width: 1140px;
            margin: 0 auto;
            transform: translateY(14px) scale(0.98);
            transition: transform 0.3s var(--ease-out);
        }

        #cert-full-modal.modal.is-open .cert-full-modal-inner {
            transform: translateY(0) scale(1);
        }

        .cert-full-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            margin-bottom: 2rem;
            padding-bottom: 1.15rem;
            border-bottom: 1px solid rgba(148, 163, 184, 0.18);
        }

        .cert-full-modal-title-wrap h3 {
            font-size: clamp(1.4rem, 2.5vw, 1.85rem);
            font-weight: 800;
            color: #f8fafc;
            margin-bottom: 0.25rem;
        }

        .cert-full-modal-title-wrap p {
            font-size: 0.92rem;
            color: #94a3b8;
        }

        .cert-modal-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
        }

        .cert-modal-grid .cert-card {
            flex: 1 1 300px;
            max-width: calc(33.333% - 1rem);
            background: #111a2e;
            border-color: rgba(148, 163, 184, 0.18);
        }

        [data-theme="light"] .cert-modal-grid .cert-card {
            background: #ffffff;
            border-color: #e2e8f0;
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
        /* Projects Horizontal Slider */
        .projects-slider-wrapper {
            position: relative;
        }

        .projects-slider-track {
            display: flex;
            align-items: stretch;
            gap: 1.5rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
            padding: 0.5rem 0.25rem 1.25rem;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .projects-slider-track::-webkit-scrollbar {
            display: none;
        }

        .projects-slider-track .project-card {
            flex: 0 0 370px;
            width: 370px;
            max-width: 370px;
            scroll-snap-align: start;
            border-radius: var(--radius-lg);
            overflow: hidden;
            display: flex;
            flex-direction: column;
            transition: transform var(--transition-base), border-color var(--transition-base), box-shadow var(--transition-base);
        }

        .projects-slider-track .project-card:hover {
            transform: translateY(-4px);
            border-color: var(--card-hover-border);
            box-shadow: var(--card-hover-shadow);
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
            flex-shrink: 0;
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
            padding: 1.5rem;
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
            font-size: 1.18rem;
            font-weight: 700;
            line-height: 1.35;
            margin-bottom: 0.65rem;
            color: var(--text-primary);
        }

        .project-desc {
            color: var(--text-secondary);
            font-size: 0.92rem;
            line-height: 1.65;
            margin-bottom: 1.25rem;
            flex: 1;
        }

        .project-footer {
            margin-top: auto;
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .proj-slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 12;
            width: 46px;
            height: 46px;
            border-radius: 50%;
            border: 1px solid var(--border-hover);
            background: rgba(17, 26, 46, 0.92);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            color: #f8fafc;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(2, 6, 23, 0.55);
            transition: background-color 0.22s var(--ease-out), border-color 0.22s var(--ease-out), transform 0.22s var(--ease-out), opacity 0.22s;
        }

        [data-theme="light"] .proj-slider-arrow {
            background: rgba(255, 255, 255, 0.95);
            color: var(--text-primary);
            box-shadow: var(--shadow-md);
        }



        .proj-slider-arrow svg {
            width: 20px;
            height: 20px;
        }

        .proj-arrow-left {
            left: -20px;
        }

        .proj-arrow-right {
            right: -20px;
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

        
        /* Touch & Focus Cleanups: prevent sticky hover on mobile */
        .cert-slider-arrow,
        .proj-slider-arrow,
        .contact-card {
            outline: none;
            -webkit-tap-highlight-color: transparent;
        }

        .cert-slider-arrow:focus,
        .proj-slider-arrow:focus,
        .contact-card:focus {
            outline: none;
        }

        @media (hover: hover) and (pointer: fine) {
            .cert-slider-arrow:hover {
                background: var(--btn-primary-bg);
                border-color: var(--btn-primary-bg);
                color: #ffffff;
                transform: translateY(-55%) scale(1.08);
            }

            .proj-slider-arrow:hover {
                background: var(--btn-primary-bg);
                border-color: var(--btn-primary-bg);
                color: #ffffff;
                transform: translateY(-50%) scale(1.08);
            }

            .contact-card:hover .contact-icon-wrap {
                background: var(--btn-primary-bg);
                border-color: var(--btn-primary-bg);
                color: #ffffff;
                transform: scale(1.08);
            }

            .skill-card:hover .skill-icon-wrap {
                transform: scale(1.08);
                background: var(--primary);
                color: #ffffff;
                border-color: var(--primary);
            }
        }

        @media (hover: none), (pointer: coarse) {
            .cert-slider-arrow:active {
                transform: translateY(-55%) scale(0.92);
                background: var(--btn-primary-bg);
                color: #ffffff;
            }

            .proj-slider-arrow:active {
                transform: translateY(-50%) scale(0.92);
                background: var(--btn-primary-bg);
                color: #ffffff;
            }

            .contact-card:active .contact-icon-wrap {
                background: var(--btn-primary-bg);
                color: #ffffff;
            }

            .skill-card:active .skill-icon-wrap {
                background: var(--primary);
                color: #ffffff;
            }
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

            .cert-modal-grid .cert-card {
                max-width: calc(50% - 0.75rem);
            }

            .cert-arrow-left {
                left: 0.35rem;
            }

            .cert-arrow-right {
                right: 0.35rem;
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

            /* Mobile Horizontal Navbar (No RM icon, horizontal links + CTA + Theme Toggle) */
            .navbar {
                height: 60px;
            }

            .nav-inner {
                height: 60px;
                padding: 0 0.5rem;
            }

            .logo {
                display: none !important;
            }

            .nav-toggle,
            .nav-toggle-label {
                display: none !important;
            }

            .nav-right {
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 0.3rem;
            }

            .nav-links {
                position: static;
                top: auto;
                left: auto;
                right: auto;
                background: transparent;
                border: none;
                box-shadow: none;
                padding: 0;
                flex-direction: row;
                align-items: center;
                gap: 0.15rem;
                opacity: 1;
                visibility: visible;
                transform: none;
                overflow-x: auto;
                scrollbar-width: none;
                -ms-overflow-style: none;
                -webkit-overflow-scrolling: touch;
                flex: 1;
                min-width: 0;
            }

            .nav-links::-webkit-scrollbar {
                display: none;
            }

            .nav-links a {
                padding: 0.35rem 0.45rem;
                font-size: 0.8rem;
                font-weight: 600;
                color: var(--text-secondary);
                white-space: nowrap;
                flex-shrink: 0;
                border-radius: var(--radius-full);
            }

            .nav-links a:hover,
            .nav-links a:focus {
                color: var(--text-primary);
                background-color: transparent;
            }

            .nav-links a.nav-cta {
                margin-left: 0.2rem;
                padding: 0.4rem 0.85rem;
                font-size: 0.8rem;
                font-weight: 700;
                background: var(--btn-primary-bg);
                color: #ffffff !important;
                border-radius: var(--radius-full);
                box-shadow: 0 4px 12px rgba(37, 99, 235, 0.35);
                white-space: nowrap;
                flex-shrink: 0;
            }

            .theme-toggle-btn {
                width: 36px;
                height: 36px;
                border-radius: 10px;
                flex-shrink: 0;
            }

            .theme-toggle-btn svg {
                width: 18px;
                height: 18px;
            }

            .edu-row {
                flex-direction: column;
                gap: 0.25rem;
            }

            .edu-value {
                text-align: left;
            }

            .projects-slider-track .project-card {
                flex: 0 0 320px;
                width: 320px;
                max-width: 86vw;
            }

            .proj-slider-arrow {
                width: 40px;
                height: 40px;
            }

            .proj-arrow-left {
                left: -10px;
            }

            .proj-arrow-right {
                right: -10px;
            }

            .certifications-slider-track .cert-card {
                flex: 0 0 300px;
                width: 300px;
                max-width: 84vw;
            }

            .cert-modal-grid .cert-card {
                max-width: 100%;
                flex-basis: 100%;
            }

            .cert-slider-arrow {
                width: 40px;
                height: 40px;
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

        /* Mobile Contact Grid: All 6 links fit simultaneously on screen as compact icon tiles */
        @media (max-width: 640px) {
            .contact-grid {
                grid-template-columns: repeat(3, 1fr) !important;
                gap: 0.75rem;
                max-width: 360px;
                margin: 0 auto;
            }

            .contact-card {
                padding: 1.05rem 0.5rem;
                min-height: auto;
                gap: 0;
                border-radius: var(--radius-lg);
            }

            .contact-icon-wrap {
                margin-bottom: 0;
                width: 48px;
                height: 48px;
                border-radius: 14px;
            }

            .contact-icon-wrap svg {
                width: 24px;
                height: 24px;
            }

            .contact-card h3,
            .contact-card p {
                display: none !important;
            }
        }

        @media (max-width: 480px) {
            .projects-slider-track .project-card {
                flex: 0 0 85vw;
                width: 85vw;
                max-width: 85vw;
            }
            .project-media-btn {
                aspect-ratio: 16 / 9;
            }
            .project-body {
                padding: 1.15rem 1.15rem 1.25rem;
            }
            .project-title {
                font-size: 1.06rem;
                line-height: 1.3;
                margin-bottom: 0.45rem;
            }
            .project-desc {
                font-size: 0.86rem;
                line-height: 1.5;
                margin-bottom: 0.9rem;
            }
            .project-footer {
                padding-top: 0.85rem;
            }
            .proj-arrow-left {
                left: -6px;
            }
            .proj-arrow-right {
                right: -6px;
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
                    <h1 class="hero-title">{{ $profile['name'] }}</h1>
                    <p class="hero-role">{{ $profile['title'] }}</p>
                    <p class="hero-bio">{{ $profile['tagline'] }}</p>

                    <div class="hero-actions">
                        <a href="#projects" class="btn btn-primary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="2" y="3" width="20" height="14" rx="2" ry="2"></rect>
                                <line x1="8" y1="21" x2="16" y2="21"></line>
                                <line x1="12" y1="17" x2="12" y2="21"></line>
                            </svg>
                            View Projects
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                            Contact Me
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
                    <p>Academic background, technical focus, and passion for building practical software.</p>
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
                            <span class="highlight-chip">Web &amp; Offline Systems</span>
                            <span class="highlight-chip">Software Development</span>
                            <span class="highlight-chip">System Administration</span>
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
                            <div class="skill-icon-wrap" aria-hidden="true">
                                @if($skill['icon'] === 'laravel')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>
                                @elseif($skill['icon'] === 'php')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M7.01 10.207h-.944l-.515 2.648h.838c.556 0 .97-.105 1.242-.314.272-.21.455-.559.55-1.049.092-.47.05-.802-.124-.995-.175-.193-.523-.29-1.047-.29zM12 5.688C5.373 5.688 0 8.514 0 12s5.373 6.313 12 6.313S24 15.486 24 12c0-3.486-5.373-6.312-12-6.312zm-3.26 7.451c-.261.25-.575.438-.917.551-.336.108-.765.164-1.285.164H5.357l-.327 1.681H3.652l1.23-6.326h2.65c.797 0 1.378.209 1.744.628.366.418.476 1.002.33 1.752a2.836 2.836 0 0 1-.305.847c-.143.255-.33.49-.561.703zm4.024.715l.543-2.799c.063-.318.039-.536-.068-.651-.107-.116-.336-.174-.687-.174H11.46l-.704 3.625H9.388l1.23-6.327h1.367l-.327 1.682h1.218c.767 0 1.295.134 1.586.401s.378.7.263 1.299l-.572 2.944h-1.389zm7.597-2.265a2.782 2.782 0 0 1-.305.847c-.143.255-.33.49-.561.703a2.44 2.44 0 0 1-.917.551c-.336.108-.765.164-1.286.164h-1.18l-.327 1.682h-1.378l1.23-6.326h2.649c.797 0 1.378.209 1.744.628.366.417.477 1.001.331 1.751zM17.766 10.207h-.943l-.516 2.648h.838c.557 0 .971-.105 1.242-.314.272-.21.455-.559.551-1.049.092-.47.049-.802-.125-.995s-.524-.29-1.047-.29z"/></svg>
                                @elseif($skill['icon'] === 'html5')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M1.5 0h21l-1.91 21.563L11.977 24l-8.564-2.438L1.5 0zm7.031 9.75l-.232-2.718 10.059.003.23-2.622L5.412 4.41l.698 8.01h9.126l-.326 3.426-2.91.804-2.955-.81-.188-2.11H6.248l.33 4.171L12 19.351l5.379-1.443.744-8.157H8.531z"/></svg>
                                @elseif($skill['icon'] === 'css3')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M0 0v20.16A3.84 3.84 0 0 0 3.84 24h16.32A3.84 3.84 0 0 0 24 20.16V3.84A3.84 3.84 0 0 0 20.16 0Zm14.256 13.08c1.56 0 2.28 1.08 2.304 2.64h-1.608c.024-.288-.048-.6-.144-.84-.096-.192-.288-.264-.552-.264-.456 0-.696.264-.696.84-.024.576.288.888.768 1.08.72.288 1.608.744 1.92 1.296q.432.648.432 1.656c0 1.608-.912 2.592-2.496 2.592-1.656 0-2.4-1.032-2.424-2.688h1.68c0 .792.264 1.176.792 1.176.264 0 .456-.072.552-.24.192-.312.24-1.176-.048-1.512-.312-.408-.912-.6-1.32-.816q-.828-.396-1.224-.936c-.24-.36-.36-.888-.36-1.536 0-1.44.936-2.472 2.424-2.448m5.4 0c1.584 0 2.304 1.08 2.328 2.64h-1.608c0-.288-.048-.6-.168-.84-.096-.192-.264-.264-.528-.264-.48 0-.72.264-.72.84s.288.888.792 1.08c.696.288 1.608.744 1.92 1.296.264.432.408.984.408 1.656.024 1.608-.888 2.592-2.472 2.592-1.68 0-2.424-1.056-2.448-2.688h1.68c0 .744.264 1.176.792 1.176.264 0 .456-.072.552-.24.216-.312.264-1.176-.048-1.512-.288-.408-.888-.6-1.32-.816-.552-.264-.96-.576-1.2-.936s-.36-.888-.36-1.536c-.024-1.44.912-2.472 2.4-2.448m-11.031.018c.711-.006 1.419.198 1.839.63.432.432.672 1.128.648 1.992H9.336c.024-.456-.096-.792-.432-.96-.312-.144-.768-.048-.888.24-.12.264-.192.576-.168.864v3.504c0 .744.264 1.128.768 1.128a.65.65 0 0 0 .552-.264c.168-.24.192-.552.168-.84h1.776c.096 1.632-.984 2.712-2.568 2.688-1.536 0-2.496-.864-2.472-2.472v-4.032c0-.816.24-1.44.696-1.848.432-.408 1.146-.624 1.857-.63"/></svg>
                                @elseif($skill['icon'] === 'javascript')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M0 0h24v24H0V0zm22.034 18.276c-.175-1.095-.888-2.015-3.003-2.873-.736-.345-1.554-.585-1.797-1.14-.091-.33-.105-.51-.046-.705.15-.646.915-.84 1.515-.66.39.12.75.42.976.9 1.034-.676 1.034-.676 1.755-1.125-.27-.42-.404-.601-.586-.78-.63-.705-1.469-1.065-2.834-1.034l-.705.089c-.676.165-1.32.525-1.71 1.005-1.14 1.291-.811 3.541.569 4.471 1.365 1.02 3.361 1.244 3.616 2.205.24 1.17-.87 1.545-1.966 1.41-.811-.18-1.26-.586-1.755-1.336l-1.83 1.051c.21.48.45.689.81 1.109 1.74 1.756 6.09 1.666 6.871-1.004.029-.09.24-.705.074-1.65l.046.067zm-8.983-7.245h-2.248c0 1.938-.009 3.864-.009 5.805 0 1.232.063 2.363-.138 2.711-.33.689-1.18.601-1.566.48-.396-.196-.597-.466-.83-.855-.063-.105-.11-.196-.127-.196l-1.825 1.125c.305.63.75 1.172 1.324 1.517.855.51 2.004.675 3.207.405.783-.226 1.458-.691 1.811-1.411.51-.93.402-2.07.397-3.346.012-2.054 0-4.109 0-6.179l.004-.056z"/></svg>
                                @elseif($skill['icon'] === 'mysql')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16.405 5.501c-.115 0-.193.014-.274.033v.013h.014c.054.104.146.18.214.273.054.107.1.214.154.32l.014-.015c.094-.066.14-.172.14-.333-.04-.047-.046-.094-.08-.14-.04-.067-.126-.1-.18-.153zM5.77 18.695h-.927a50.854 50.854 0 00-.27-4.41h-.008l-1.41 4.41H2.45l-1.4-4.41h-.01a72.892 72.892 0 00-.195 4.41H0c.055-1.966.192-3.81.41-5.53h1.15l1.335 4.064h.008l1.347-4.064h1.095c.242 2.015.384 3.86.428 5.53zm4.017-4.08c-.378 2.045-.876 3.533-1.492 4.46-.482.716-1.01 1.073-1.583 1.073-.153 0-.34-.046-.566-.138v-.494c.11.017.24.026.386.026.268 0 .483-.075.647-.222.197-.18.295-.382.295-.605 0-.155-.077-.47-.23-.944L6.23 14.615h.91l.727 2.36c.164.536.233.91.205 1.123.4-1.064.678-2.227.835-3.483zm12.325 4.08h-2.63v-5.53h.885v4.85h1.745zm-3.32.135l-1.016-.5c.09-.076.177-.158.255-.25.433-.506.648-1.258.648-2.253 0-1.83-.718-2.746-2.155-2.746-.704 0-1.254.232-1.65.697-.43.508-.646 1.256-.646 2.245 0 .972.19 1.686.574 2.14.35.41.877.615 1.583.615.264 0 .506-.033.725-.098l1.325.772.36-.622zM15.5 17.588c-.225-.36-.337-.94-.337-1.736 0-1.393.424-2.09 1.27-2.09.443 0 .77.167.977.5.224.362.336.936.336 1.723 0 1.404-.424 2.108-1.27 2.108-.445 0-.77-.167-.978-.5zm-1.658-.425c0 .47-.172.856-.516 1.156-.344.3-.803.45-1.384.45-.543 0-1.064-.172-1.573-.515l.237-.476c.438.22.833.328 1.19.328.332 0 .593-.073.783-.22a.754.754 0 00.3-.615c0-.33-.23-.61-.648-.845-.388-.213-1.163-.657-1.163-.657-.422-.307-.632-.636-.632-1.177 0-.45.157-.81.47-1.085.315-.278.72-.415 1.22-.415.512 0 .98.136 1.4.41l-.213.476a2.726 2.726 0 00-1.064-.23c-.283 0-.502.068-.654.206a.685.685 0 00-.248.524c0 .328.234.61.666.85.393.215 1.187.67 1.187.67.433.305.648.63.648 1.168zm9.382-5.852c-.535-.014-.95.04-1.297.188-.1.04-.26.04-.274.167.055.053.063.14.11.214.08.134.218.313.346.407.14.11.28.216.427.31.26.16.555.255.81.416.145.094.293.213.44.313.073.05.12.14.214.172v-.02c-.046-.06-.06-.147-.105-.214-.067-.067-.134-.127-.2-.193a3.223 3.223 0 00-.695-.675c-.214-.146-.682-.35-.77-.595l-.013-.014c.146-.013.32-.066.46-.106.227-.06.435-.047.67-.106.106-.027.213-.06.32-.094v-.06c-.12-.12-.21-.283-.334-.395a8.867 8.867 0 00-1.104-.823c-.21-.134-.476-.22-.697-.334-.08-.04-.214-.06-.26-.127-.12-.146-.19-.34-.275-.514a17.69 17.69 0 01-.547-1.163c-.12-.262-.193-.523-.34-.763-.69-1.137-1.437-1.826-2.586-2.5-.247-.14-.543-.2-.856-.274-.167-.008-.334-.02-.5-.027-.11-.047-.216-.174-.31-.235-.38-.24-1.364-.76-1.644-.072-.18.434.267.862.422 1.082.115.153.26.328.34.5.047.116.06.235.107.356.106.294.207.622.347.897.073.14.153.287.247.413.054.073.146.107.167.227-.094.136-.1.334-.154.5-.24.757-.146 1.693.194 2.25.107.166.362.534.703.393.3-.12.234-.5.32-.835.02-.08.007-.133.048-.187v.015c.094.188.188.367.274.555.206.328.566.668.867.895.16.12.287.328.487.402v-.02h-.015c-.043-.058-.1-.086-.154-.133a3.445 3.445 0 01-.35-.4 8.76 8.76 0 01-.747-1.218c-.11-.21-.202-.436-.29-.643-.04-.08-.04-.2-.107-.24-.1.146-.247.273-.32.453-.127.288-.14.642-.188 1.01-.027.007-.014 0-.027.014-.214-.052-.287-.274-.367-.46-.2-.475-.233-1.238-.06-1.785.047-.14.247-.582.167-.716-.042-.127-.174-.2-.247-.303a2.478 2.478 0 01-.24-.427c-.16-.374-.24-.788-.414-1.162-.08-.173-.22-.354-.334-.513-.127-.18-.267-.307-.368-.52-.033-.073-.08-.194-.027-.274.014-.054.042-.075.094-.09.088-.072.335.022.422.062.247.1.455.194.662.334.094.066.195.193.315.226h.14c.214.047.455.014.655.073.355.114.675.28.962.46a5.953 5.953 0 012.085 2.286c.08.154.115.295.188.455.14.33.313.663.455.982.14.315.275.636.476.897.1.14.502.213.682.286.133.06.34.115.46.188.23.14.454.3.67.454.11.076.443.243.463.378z"/></svg>
                                @elseif($skill['icon'] === 'sqlite')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M21.678.521c-1.032-.92-2.28-.55-3.513.544a8.71 8.71 0 0 0-.547.535c-2.109 2.237-4.066 6.38-4.674 9.544.237.48.422 1.093.544 1.561a13.044 13.044 0 0 1 .164.703s-.019-.071-.096-.296l-.05-.146a1.689 1.689 0 0 0-.033-.08c-.138-.32-.518-.995-.686-1.289-.143.423-.27.818-.376 1.176.484.884.778 2.4.778 2.4s-.025-.099-.147-.442c-.107-.303-.644-1.244-.772-1.464-.217.804-.304 1.346-.226 1.478.152.256.296.698.422 1.186.286 1.1.485 2.44.485 2.44l.017.224a22.41 22.41 0 0 0 .056 2.748c.095 1.146.273 2.13.5 2.657l.155-.084c-.334-1.038-.47-2.399-.41-3.967.09-2.398.642-5.29 1.661-8.304 1.723-4.55 4.113-8.201 6.3-9.945-1.993 1.8-4.692 7.63-5.5 9.788-.904 2.416-1.545 4.684-1.931 6.857.666-2.037 2.821-2.912 2.821-2.912s1.057-1.304 2.292-3.166c-.74.169-1.955.458-2.362.629-.6.251-.762.337-.762.337s1.945-1.184 3.613-1.72C21.695 7.9 24.195 2.767 21.678.521m-18.573.543A1.842 1.842 0 0 0 1.27 2.9v16.608a1.84 1.84 0 0 0 1.835 1.834h9.418a22.953 22.953 0 0 1-.052-2.707c-.006-.062-.011-.141-.016-.2a27.01 27.01 0 0 0-.473-2.378c-.121-.47-.275-.898-.369-1.057-.116-.197-.098-.31-.097-.432 0-.12.015-.245.037-.386a9.98 9.98 0 0 1 .234-1.045l.217-.028c-.017-.035-.014-.065-.031-.097l-.041-.381a32.8 32.8 0 0 1 .382-1.194l.2-.019c-.008-.016-.01-.038-.018-.053l-.043-.316c.63-3.28 2.587-7.443 4.8-9.791.066-.069.133-.128.198-.194Z"/></svg>
                                @elseif($skill['icon'] === 'github')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                                @elseif($skill['icon'] === 'vscode')
                                    <svg viewBox="0 0 128 128" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" clip-rule="evenodd" d="M90.767 127.126a7.968 7.968 0 0 0 6.35-.244l26.353-12.681a8 8 0 0 0 4.53-7.209V21.009a8 8 0 0 0-4.53-7.21L97.117 1.12a7.97 7.97 0 0 0-9.093 1.548l-50.45 46.026L15.6 32.013a5.328 5.328 0 0 0-6.807.302l-7.048 6.411a5.335 5.335 0 0 0-.006 7.888L20.796 64 1.74 81.387a5.336 5.336 0 0 0 .006 7.887l7.048 6.411a5.327 5.327 0 0 0 6.807.303l21.974-16.68 50.45 46.025a7.96 7.96 0 0 0 2.743 1.793Zm5.252-92.183L57.74 64l38.28 29.058V34.943Z"/></svg>
                                @elseif($skill['icon'] === 'xampp')
                                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M16.792,11.923c0.113,0.043,0.226,0.079,0.334,0.128c0.45,0.203,0.715,0.553,0.748,1.044 c0.041,0.634,0.044,1.271,0.002,1.905c-0.049,0.732-0.725,1.292-1.483,1.271c-0.735-0.021-1.369-0.62-1.397-1.341 c-0.017-0.441-0.003-0.884-0.006-1.326c-0.001-0.239-0.003-0.242-0.245-0.243c-1.363-0.001-2.726,0.008-4.089-0.003 c-0.888-0.007-1.421,0.482-1.471,1.46c-0.019,0.38-0.1,0.727-0.357,1.018c-0.397,0.451-0.898,0.601-1.472,0.466 c-0.554-0.131-0.867-0.522-1.035-1.048c-0.117-0.367-0.056-0.737,0.012-1.094c0.341-1.797,1.366-3.006,3.125-3.555 c0.357-0.112,0.731-0.166,1.105-0.166c0.94,0.001,1.881,0.001,2.821-0.001c0.128,0,0.257-0.012,0.385-0.021 c0.702-0.051,1.166-0.511,1.22-1.352c0.004-0.064,0-0.129,0.001-0.193c0.011-0.788,0.605-1.396,1.393-1.425 c0.787-0.029,1.438,0.527,1.493,1.318c0.076,1.083-0.265,2.046-0.913,2.907C16.903,11.751,16.819,11.816,16.792,11.923z M8.249,10.436c-0.258-0.008-0.571,0.018-0.882-0.035c-0.536-0.09-0.876-0.39-1.02-0.916C6.19,8.912,6.25,8.388,6.698,7.96 C7.154,7.526,7.694,7.4,8.285,7.645c0.52,0.216,0.859,0.731,0.89,1.293C9.2,9.382,9.178,9.828,9.182,10.272 c0.001,0.116-0.043,0.167-0.161,0.165C8.781,10.434,8.542,10.436,8.249,10.436z M21.682,0H2.318C1.102,0,0.116,0.986,0.116,2.202 v19.317c0,1.37,1.111,2.481,2.481,2.481h18.807c1.37,0,2.481-1.111,2.481-2.481V2.202C23.884,0.986,22.898,0,21.682,0z M20.125,12.473c0.519,0.804,0.733,1.69,0.677,2.657c-0.108,1.886-1.413,3.474-3.25,3.916c-2.585,0.623-4.566-0.923-5.233-2.794 c-0.109-0.304-0.16-0.622-0.224-0.985c-0.068,0.414-0.115,0.789-0.264,1.134c-0.697,1.617-1.884,2.603-3.665,2.799 c-2.104,0.232-4.048-1.067-4.632-3.084c-0.25-0.863-0.175-1.747-0.068-2.625c0.08-0.653,0.321-1.268,0.632-1.848 c0.057-0.106,0.057-0.184-0.01-0.285c-0.561-0.845-0.779-1.777-0.7-2.784C3.43,8.035,3.56,7.52,3.805,7.038 C4.52,5.626,6.09,4.427,8.193,4.626c1.849,0.175,3.562,1.77,3.83,3.564c0.013,0.09,0.039,0.178,0.068,0.311 c0.044-0.241,0.076-0.439,0.118-0.636c0.344-1.63,1.94-3.335,4.201-3.357c2.292-0.021,3.99,1.776,4.31,3.446 c0.17,0.888,0.089,1.776-0.103,2.663c-0.112,0.517-0.31,1.008-0.524,1.492C20.034,12.245,20.043,12.345,20.125,12.473z"/></svg>
                                @endif
                            </div>
                            <div class="skill-info">
                                <span class="skill-name">{{ $skill['name'] }}</span>
                                <span class="skill-category">{{ $skill['category'] }}</span>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Certifications Horizontal Slider Subsection -->
                <div id="certifications" style="scroll-margin-top: 96px;">
                    <div class="certifications-header-row">
                        <h3 class="subsection-title">
                            Certifications &amp; Eligibility
                            <span class="count-pill">{{ count($certifications) }} Credentials</span>
                        </h3>
                        <button type="button" class="cert-view-all-btn" onclick="openCertFullModal()">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg>
                            View All Grid
                        </button>
                    </div>

                    <div class="certifications-slider-wrapper">
                        <button type="button" id="certSlideLeft" class="cert-slider-arrow cert-arrow-left" aria-label="Slide certificates left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="15 18 9 12 15 6"></polyline>
                            </svg>
                        </button>

                        <div class="certifications-slider-track" id="certSliderTrack">
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

                        <button type="button" id="certSlideRight" class="cert-slider-arrow cert-arrow-right" aria-label="Slide certificates right">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polyline points="9 18 15 12 9 6"></polyline>
                            </svg>
                        </button>
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

                <div class="projects-slider-wrapper">
                    <button type="button" id="projSlideLeft" class="proj-slider-arrow proj-arrow-left" aria-label="Slide projects left">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="15 18 9 12 15 6"></polyline>
                        </svg>
                    </button>

                    <div class="projects-slider-track" id="projSliderTrack">
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

                    <button type="button" id="projSlideRight" class="proj-slider-arrow proj-arrow-right" aria-label="Slide projects right">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                            <polyline points="9 18 15 12 9 6"></polyline>
                        </svg>
                    </button>
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
         Full-Screen Certifications Grid Modal (#cert-full-modal)
         ======================================================================== -->
    <div id="cert-full-modal" class="modal" role="dialog" aria-modal="true" aria-labelledby="certFullModalTitle" onclick="handleCertFullBackdrop(event)">
        <div class="cert-full-modal-inner">
            <div class="cert-full-modal-header">
                <div class="cert-full-modal-title-wrap">
                    <h3 id="certFullModalTitle">Certifications &amp; Eligibility</h3>
                    <p>All {{ count($certifications) }} verified credentials and certificates</p>
                </div>
                <button type="button" class="modal-close-btn" onclick="closeCertFullModal()" aria-label="Close certifications modal">&times;</button>
            </div>

            <div class="cert-modal-grid">
                @foreach($certifications as $cert)
                    <article class="card-surface cert-card">
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
                                Preview Full Image
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
                if (!certFullModal || !certFullModal.classList.contains('is-open')) {
                    document.body.style.overflow = '';
                }
            };

            window.handleBackdropClick = function (event) {
                if (event.target === modal) {
                    closeModal();
                }
            };

            /* ----------------------------------------------------------------
               4. Certifications Horizontal Slider & Full-Screen Grid Modal
               ---------------------------------------------------------------- */
            const certSliderTrack = document.getElementById('certSliderTrack');
            const certSlideLeft = document.getElementById('certSlideLeft');
            const certSlideRight = document.getElementById('certSlideRight');
            const certFullModal = document.getElementById('cert-full-modal');

            /* Precise card-by-card scroll navigation (prevents skipping) */
            function scrollSliderTrack(track, direction, cardSelector) {
                if (!track) return;
                const cards = Array.from(track.querySelectorAll(cardSelector));
                if (!cards.length) return;

                const trackLeft = track.getBoundingClientRect().left;
                if (direction > 0) {
                    // Moving forward: find the next card whose left edge is past trackLeft + 25px
                    const nextCard = cards.find(card => card.getBoundingClientRect().left > trackLeft + 25);
                    if (nextCard) {
                        const delta = nextCard.getBoundingClientRect().left - trackLeft;
                        track.scrollBy({ left: delta, behavior: 'smooth' });
                    }
                } else {
                    // Moving backward: find the card preceding current view
                    const prevCards = cards.filter(card => card.getBoundingClientRect().left < trackLeft - 25);
                    if (prevCards.length > 0) {
                        const prevCard = prevCards[prevCards.length - 1];
                        const delta = prevCard.getBoundingClientRect().left - trackLeft;
                        track.scrollBy({ left: delta, behavior: 'smooth' });
                    } else {
                        track.scrollTo({ left: 0, behavior: 'smooth' });
                    }
                }
            }

            if (certSlideLeft && certSliderTrack) {
                certSlideLeft.addEventListener('click', function () {
                    this.blur();
                    scrollSliderTrack(certSliderTrack, -1, '.cert-card');
                });
            }

            if (certSlideRight && certSliderTrack) {
                certSlideRight.addEventListener('click', function () {
                    this.blur();
                    scrollSliderTrack(certSliderTrack, 1, '.cert-card');
                });
            }

            /* ----------------------------------------------------------------
               Projects Horizontal Slider Controls
               ---------------------------------------------------------------- */
            const projSliderTrack = document.getElementById('projSliderTrack');
            const projSlideLeft = document.getElementById('projSlideLeft');
            const projSlideRight = document.getElementById('projSlideRight');

            if (projSlideLeft && projSliderTrack) {
                projSlideLeft.addEventListener('click', function () {
                    this.blur();
                    scrollSliderTrack(projSliderTrack, -1, '.project-card');
                });
            }

            if (projSlideRight && projSliderTrack) {
                projSlideRight.addEventListener('click', function () {
                    this.blur();
                    scrollSliderTrack(projSliderTrack, 1, '.project-card');
                });
            }

            window.openCertFullModal = function () {
                if (!certFullModal) return;
                certFullModal.classList.add('is-open');
                document.body.style.overflow = 'hidden';
            };

            window.closeCertFullModal = function () {
                if (!certFullModal) return;
                certFullModal.classList.remove('is-open');
                if (!modal.classList.contains('is-open')) {
                    document.body.style.overflow = '';
                }
            };

            window.handleCertFullBackdrop = function (event) {
                if (event.target === certFullModal) {
                    closeCertFullModal();
                }
            };

// Certifications nav link scrolls natively to #certifications

            document.addEventListener('keydown', function (e) {
                if (modal.classList.contains('is-open')) {
                    if (e.key === 'Escape') closeModal();
                    if (e.key === 'ArrowLeft') changeSlide(-1);
                    if (e.key === 'ArrowRight') changeSlide(1);
                    return;
                }
                if (certFullModal && certFullModal.classList.contains('is-open') && e.key === 'Escape') {
                    closeCertFullModal();
                }
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
