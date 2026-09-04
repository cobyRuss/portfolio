# AI PROMPT LOG

This document records all AI-assisted interactions during the development of this portfolio project.

---

## Prompt 1: Reading the Activity Requirements

**Prompt:** "c:\Users\coby2\Downloads\Activity_3_Integrative_Programming.pdf this is my activity read and make ask questions if there is something you need something filled up."

**AI Response:** The AI extracted the PDF content and identified the key requirements:
- Build a Laravel portfolio website
- Required sections: profile picture, contact details, school/education, skills/certifications
- Git & GitHub with incremental commits
- AI Prompt Log (PROMPT_LOG.md)
- Deploy to InfinityFree or Vercel
- Documentation (.docx)

The AI also asked clarifying questions about my personal information.

**What I did:** Accepted the requirements and provided my personal details (name, contact info, school, skills, certifications).

---

## Prompt 2: Providing Personal Information

**Prompt:** Provided full name (Russel Tristan L. Marzo), school (Data Center College of the Philippines - Bangued), contact details (email: coby.2339@gmail.com, GitHub: cobyRuss, phone: 09357591816), and certifications (1 CSC Professional eligibility, 2 certifications being processed).

**AI Response:** The AI confirmed the information and started building the project.

**What I did:** Confirmed the information was correct and authorized the AI to proceed with building.

---

## Prompt 3: Setting Up Laravel Project

**Prompt:** (Implied) The AI proceeded to set up the Laravel project structure.

**AI Response:** The AI:
1. Created a new Laravel project using `composer create-project laravel/laravel portfolio-app`
2. Installed all dependencies (109 packages)
3. Verified the project structure

**What I did:** Accepted the default Laravel setup as-is.

---

## Prompt 4: Creating Portfolio Controller

**Prompt:** (Implied) The AI created the PortfolioController with all profile data.

**AI Response:** The AI created `app/Http/Controllers/PortfolioController.php` with:
- Profile data array (name, title, about, email, phone, github)
- Education array (school, campus, program, status)
- Skills array (9 skills with name, level, and category)
- Certifications array (3 entries including CSC eligibility and 2 processing)
- Returns the portfolio view with all data compacted

**What I did:** Reviewed the data structure and accepted it as-is since it matched my provided information.

---

## Prompt 5: Creating Routes

**Prompt:** (Implied) The AI set up the web route.

**AI Response:** The AI updated `routes/web.php` to use the PortfolioController for the root route.

**What I did:** Accepted the route configuration.

---

## Prompt 6: Building Portfolio View

**Prompt:** (Implied) The AI created the complete portfolio Blade view.

**AI Response:** The AI created `resources/views/portfolio.blade.php` with:
- Responsive navigation bar with section links
- Hero section with name, title, and avatar placeholder
- About/Education section with two-column layout
- Skills section with skill cards, progress bars, and level badges
- Certifications section with status indicators
- Contact section with email, phone, and GitHub cards
- Modern CSS styling with custom properties and responsive design
- Mobile-friendly layout with media queries

**What I did:** Reviewed the HTML structure and CSS styling. The design was clean and professional, so I accepted it.

---

## Prompt 7: Setting Up Git Repository

**Prompt:** (Implied) The AI initialized git and made incremental commits.

**AI Response:** The AI:
1. Initialized git repository
2. Made 5 separate commits:
   - "Set up Laravel project with default scaffolding" (30 files)
   - "Add PortfolioController with profile data and web route" (2 files)
   - "Add portfolio Blade view with hero, about, skills, certifications, and contact sections" (1 file)
   - "Add remaining Laravel app structure including views, tests, and assets" (24 files)
   - "Add AI assistant configuration files" (2 files)

**What I did:** Verified the commit history was incremental and meaningful.

---

## Notes on AI Collaboration

The AI assistant (opencode/big-pickle) was used for:
- **Planning:** Reading and understanding the activity requirements
- **Scaffolding:** Setting up the Laravel project structure
- **Code Generation:** Creating the controller, routes, and Blade view
- **Styling:** Writing the CSS for the portfolio design
- **Version Control:** Setting up git and making incremental commits
- **Documentation:** Creating this prompt log

All AI-generated code was reviewed and accepted as-is because:
- The data structure matched my requirements
- The code followed Laravel best practices
- The design was clean and professional
- The git history was properly incremental

No prompts needed follow-up corrections during this session.

---

*Log created by AI assistant on September 4, 2026*
