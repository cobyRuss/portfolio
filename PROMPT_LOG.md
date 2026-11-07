# AI PROMPT LOG

This document records all AI-assisted interactions during the development of this portfolio project.

---

## Prompt 1: Reading the Activity Requirements

**Prompt:** "lets make an online portfolio, where i can showcase my about or info/skills/certificates and show my contact- i will also send the pdf for u to understan better"

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

## Prompt 8: Debugging SQLite Database Error

**Prompt:** "proceed" (after seeing Internal Server Error on local server)

**AI Response:** The AI identified the error: `Database file at path [...database.sqlite] does not exist`. The default `.env` had `SESSION_DRIVER=database` and `QUEUE_CONNECTION=database` with SQLite, but no database file existed. The AI:
1. Created the missing `database/database.sqlite` file
2. Changed `.env` to use `SESSION_DRIVER=file`, `QUEUE_CONNECTION=sync`, `CACHE_STORE=file`
3. Restarted the server and verified the site loads correctly

**What I did:** Confirmed the fix worked by seeing the portfolio page render successfully.

---

## Prompt 9: Creating the Project Documentation (.docx)

**Prompt:** "proceed" (continuing the session; requested the Project Documentation deliverable)

**AI Response:** The AI extracted the activity PDF to confirm the documentation requirements (overview, features, tech stack, AI-collaboration summary, setup/deployment steps, screenshots), then:
1. Ran the site locally with `php artisan serve` and captured desktop (full-page) and mobile screenshots using headless Microsoft Edge
2. Set up PHPWord in a temporary directory (outside the repo) to generate the Word document
3. Generated `Portfolio_Documentation.docx` with a title page, project overview, feature list, tech-stack table, Laravel MVC explanation, full git commit history table, AI-collaboration summary table, local setup and InfinityFree deployment steps, the two screenshots, and a conclusion
4. Verified the .docx is a valid Office Open XML file (16 parts, document.xml + 2 embedded images)

A follow-up was needed because PHP's ZIP extension was disabled; the AI enabled it via the CLI flag `-d extension=zip` and regenerated the file.

**What I did:** Accepted the generated documentation and will review it in Word before submission.

---

## Prompt 10: How to Run the Site

**Prompt:** "how to run?"

**AI Response:** Explained that the app runs with `php artisan serve` from the `portfolio-app/` directory, then opening `http://127.0.0.1:8000`.

**What I did:** Applied it as instructed.

---

## Prompt 11: Wrong Site Appearing on Port 8000

**Prompt:** "my flowershop web is whats showing up on the http://127.0.0.1:8000 not the portfolio"

**AI Response:** Diagnosed that XAMPP's Apache (`httpd.exe`) was already listening on port 8000 and serving another project (the flowershop site). Recommended running the portfolio on a different port.

**What I did:** Accepted the diagnosis and the recommendation to use another port.

---

## Prompt 12: Port Conflict / Failed to Load Page

**Prompt:** "Failed to Load Page ERR_CONNECTION_REFUSED (-102) URL: http://127.0.0.1:8080/ its better that its in a diff port since ill still be using the other one for the flowershop site"

**AI Response:** Found that nothing was running on 8080 because the serve command had not started properly, and restarted it detached on port 8080. Verified the portfolio served correctly (HTTP 200).

**What I did:** Confirmed the portfolio loads on `http://127.0.0.1:8080` while keeping the flowershop site on 8000.

---

## Prompt 13: Fix Certifications Data

**Prompt:** "did u get my skills from github? thats nice, remove Certificate of Completion - Web Development Fundamentals [...and] Additional Certification [...] and replace them with these & [screenshot] Civil Service Commission · Eligibility · 2023"

**AI Response:** Clarified that skills come from the controller, not GitHub. Removed the two placeholder "Processing" certifications, added a single Civil Service Professional eligibility (CSC, 2023, Earned), and displayed the provided screenshot as the credential thumbnail.

**What I did:** Accepted the correction and the updated credential.

---

## Prompt 14: Full Certificates List

**Prompt:** gave the civil service screenshot (pasted image) plus two certificate images for DOST Startup Cordillera and DICT Online Safety Through Netiquette.

**AI Response:** Noted the pasted image could not be read (model limitation) and asked for its file path plus the years and issuing organizations for the two certificates.

**What I did:** Provided the requested details.

---

## Prompt 15: Certificate Details

**Prompt:** "& 'c:\Users\coby2\Pictures\Screenshots\Screenshot 2026-09-05 175735.png' heres the image for civil service--- 2. Sept 2 2026 and 3. July 23 2026"

**AI Response:** Copied the civil service screenshot into the app and updated the Certifications section with three entries: Civil Service Professional (CSC, 2023), DOST Startup Cordillera (DOST-CAR, September 2, 2026), and Online Safety Through Netiquette (DICT, July 23, 2026), each with a thumbnail.

**What I did:** Accepted. Noted the AI assumed the DOST issuer name and said I would correct it if needed.

---

## Prompt 16: Add Projects Section with Image Modal

**Prompt:** "add a projects area. ill provide the title for the projects and the corresponding images first is Web App (Flowershop Online website) [...]. 2nd one is an offline app (Registrar Grade Report Keeping System) [...]. all images are numbered show 1 first. when i click images open it as a modal, not in new tab, do the same for the images in certificates and eligibility"

**AI Response:** Added a Projects section (Flowershop web app with 4 numbered screenshots; Registrar system placeholder), made image thumbnails open in a custom modal with prev/next navigation and a counter, and changed certificate/eligibility images to open in the same modal instead of a new tab.

**What I did:** Accepted; confirmed which images belonged to which project.

---

## Prompt 17: Registrar Screenshots, Fix Project Click, Profile Photo

**Prompt:** "heres the link to the folder containing 5 images for the Registrar Grade Report Keeping System (Offline App) c:\Users\coby2\Downloads\rgkrs-------- i cant click the images on the projects" and "c:\Users\coby2\Downloads\249081502.png and heres my image to put in the big circle RM"

**AI Response:** Added the 5 Registrar screenshots. Fixed the broken project thumbnail clicks: the JSON image array rendered with double quotes inside the double-quoted HTML `onclick` attribute, breaking the handler; switched to a `data-images` attribute read via `JSON.parse`. Also set the hero avatar to show the provided profile photo instead of the "RM" initials.

**What I did:** Accepted the fix and confirmed the profile photo appears in the circle.

---

## Prompt 18: Education Status and Footer

**Prompt:** "on the Status Currently Enrolled--add 4th Year before Currently Enrolled and replace © 2026 Russel Tristan L. Marzo · Built with Laravel · Integrative Programming Activity 3 with just © 2026 Russel Tristan L. Marzo · Coby"

**AI Response:** Updated the education status to "4th Year - Currently Enrolled" and simplified the footer to "© 2026 Russel Tristan L. Marzo · Coby".

**What I did:** Accepted both changes.

---

## Prompt 19: Create Prompt Log

**Prompt:** "make a prompt_log.md to record all the prompts i made"

**AI Response:** Appended the prompts from the continuation session (Prompts 10-19) to PROMPT_LOG.md and refreshed the collaboration notes.

**What I did:** Accepted the updated log.

---

## Prompt 20: Full UI Rebuild with Modal Slider & Responsive Layout

**Prompt:** Requested a full modern rebuild of the portfolio UI reusing all existing bio, 4th-Year BSIT education, skills (including SQLite), certifications (CSC, DOST, DICT), and projects (Flowershop Web App, Registrar Grade Report Keeping System), with structural placeholders, native CSS hover/load animations, certificate pop-up modal, project screenshot modal slider, and social links.

**AI Response:** Rebuilt `PortfolioController.php` and `portfolio.blade.php` with a modern responsive layout, smooth CSS fade-in and card hover animations, custom pop-up modal for certificates, multi-slide modal gallery with prev/next/keyboard/touch navigation for projects, and started the local server on port 8080.

**What I did:** Previewed the rebuilt portfolio locally on `http://127.0.0.1:8080`.

---

## Prompt 21: 2x3 Contact Grid & Slim Footer

**Prompt:** "Move the Facebook, Messenger, and Instagram links out of the footer and turn them into contact cards matching the existing ones. Arrange all six contact cards into a responsive 2x3 grid in the Contact Me section. Finally, slim down the footer so it only contains the copyright text: '© 2026 Russel Tristan L. Marzo · Coby'."

**AI Response:** Added Facebook, Messenger, and Instagram cards into `.contact-grid` alongside Email, Phone, and GitHub in a responsive 2x3 layout (3 columns on desktop, 2 on tablet, 1 on mobile) and simplified the footer to display only the copyright text.

**What I did:** Verified the 6-card contact grid and compact footer on the live preview.

---

## Prompt 22: Midnight Slate Dark Theme, Light/Dark Switch & Cursor Spotlight

**Prompt:** Asked for design suggestions so the portfolio feels less plain—specifically exploring a darker background and subtle cursor-reactive effects without distracting from achievements and experience. Selected Midnight Slate dark mode with a navbar Light/Dark toggle plus a soft cursor-following spotlight and glowing card borders.

**AI Response:** Implemented a Midnight Slate dark theme default (`data-theme="dark"`) with a persistent Light/Dark toggle in the navbar, a 650px ambient cursor-following radial spotlight, and proximity-reactive glowing 1px card borders (automatically disabled on touch devices for mobile performance).

**What I did:** Reviewed and accepted the interactive dark theme upgrade, then requested pushing the updated project to GitHub.

---

## Prompt 23: Remove Redundant 4th-Year Mentions & Simplify Bio

**Prompt:** "this bitch show im 4th year 3 times, what should we dooo?" (Noted duplicate 4th-Year badges and bio repetition).

**AI Response:** Cleaned up redundant entries across the hero and about section. Removed the top hero badge, updated the hero intro to a concise tagline, swapped duplicate chips in About Me to "System Administration", and consolidated the 4th-Year student status exclusively inside the Education card.

**What I did:** Verified single appearance of the status and clearer layout.

---

## Prompt 24: Add Cisco Modern AI & DICT Philippine Startup Challenge XI Certificates

**Prompt:** Added certificates for "Introduction to Modern AI - Cisco Networking Academy Program (Oct 30 2026)" and "Understanding Startups & Getting Your Idea Ready for the Philippine Startup Challenge XI (Sept 7 2026)".

**AI Response:** Added both certificate images to `public/certifications/`, updated the credentials array in `PortfolioController.php`, and adjusted layout rules.

**What I did:** Confirmed all 5 credentials appear correctly with modal previews.

---

## Prompt 25: Horizontal Slider & Full-Screen Grid Modal for Certifications

**Prompt:** Restructured the Certifications section to display as a smooth horizontal slider track with left/right overlay buttons, while creating a full-screen grid modal accessible via "View All Grid" and directly through the navbar "Certifications" link.

**AI Response:** Updated HTML, CSS slider track rules, and JavaScript scroll math/modal trigger handlers specifically for the certifications section without affecting other areas.

**What I did:** Tested smooth sliding and instant modal display from the navbar.

---

## Prompt 26: Update Flowershop Screenshots, Add 88 Mini Mart POS Project & Clean Up Tags

**Prompt:** Replaced existing Flowershop Online Website screenshots with 9 numbered images, added "Desktop App - 88 Mini Mart POS System" with 6 screenshots, and removed tag pills from the bottom of project cards.

**AI Response:** Updated project assets in `public/projects/`, updated `PortfolioController.php` with 88 Mini Mart POS metadata, and streamlined card design by removing bottom tag badges.

**What I did:** Verified all project sliders and confirmed clean card presentation.

---

## Prompt 27: Modernize Technical Stack with Unified Monochromatic Logos

**Prompt:** "on my technical stack, remove the beginner/intermidate texts and the energy bars below it, and turn them all into icons/logos preferrably all same colors"

**AI Response:** 
1. Updated `PortfolioController.php` to remove the `level` attributes and add `icon` identifiers for each skill.
2. Replaced the proficiency badges and energy progress bars with a sleek, unified icon container (`.skill-icon-wrap`) using official brand SVGs (Laravel, PHP, HTML5, CSS3, JavaScript, MySQL, SQLite, GitHub, VS Code, XAMPP).
3. Styled all icons with `currentColor` bound to the theme's primary accent color (`var(--primary)`), ensuring consistent visual identity in both light and dark themes with subtle hover micro-interactions.
4. Synchronized changes across `portfolio.blade.php`, `index.html`, and rebuilt the static assets via Vite for Vercel deployment.

**What I did:** Verified that the skills section displays clean, cohesive icons without clutter, matching the modern portfolio aesthetic across devices.

---

## Prompt 28: Add Offline Student Attendance System (Flutter Mobile App)

**Prompt:** "add this to projects, its a flutter app, offline stundent attendance. you analyze the pic to have a more specific description"

**AI Response:** 
1. Extracted and analyzed the 5 mobile screenshots (`1.jpg` to `5.jpg`), identifying the offline workspace dashboard (metrics, academic year, active student counters), session filtering (by subject e.g., Mobile Technology 4A, class section ITCS 4·A), live attendance marking (Present, Late, Absent, Excused with 'All present' batch action), and searchable attendance logs.
2. Copied all 5 screenshot assets to `public/projects/student_attendance/`.
3. Added "Mobile App - Offline Student Attendance System" to `$projects` in `PortfolioController.php` with a detailed, tailored description and slider data.
4. Updated `index.html` with the new project card and screenshot gallery trigger, and compiled the production build with Vite (`npm run build`).

**What I did:** Verified that the 4th project appears on the live site with all 5 screenshots viewable in the gallery slider.

---

## Prompt 29: Horizontal Slider Track with Uniform Equal-Sized Cards for Projects

**Prompt:** "can you make the projects like the certificates where i can see it verticaly by clickin left right button and make the cards be the same size so it fits other devices like phones."

**AI Response:** 
1. Converted the projects container into a horizontal slider track (`.projects-slider-track`) with left (`#projSlideLeft`) and right (`#projSlideRight`) smooth navigation arrows, identical to the Certifications slider structure.
2. Unified all project cards to have identical fixed dimensions (`370px` width on desktop, `320px` / `86vw` on tablets and phones) and equal stretched heights via flex alignment.
3. Added flexbox distribution to `.project-body` and `.project-desc` (`flex: 1`, `margin-top: auto` for footer) ensuring uniform height and footer button alignment across all cards.
4. Synchronized changes across `portfolio.blade.php`, `index.html`, and rebuilt Vite static output for deployment.

**What I did:** Tested smooth scrolling with the left/right arrow buttons, verified equal card dimensions and responsive mobile layout.

---

## Prompt 30: Mobile UI Enhancements (Condensed Description, Card-Targeted Slider Navigation & Sticky Hover Removal)

**Prompt:** "on the projects, the description is too long on one of the that it doesnt fit the phone, and when i click the buttons(left or right) the highlight stays; it shouldnt; same with the certificates, and on the projects again when i click on the right button, it skips the 3rd project, i had to manually slide them slowly with a swipe to see the project, the highlight also persists in the contacts below-------------these are all on phone"

**AI Response:** 
1. **Shortened Student Attendance Description:** Trimmed from 77 words down to a concise, balanced 26 words matching the other three projects, fitting comfortably inside phone screen viewports without overflowing.
2. **Prevented Skipping Cards in Slider:** Replaced imprecise pixel offset calculation with a card-by-card boundary-targeted navigation algorithm (`scrollSliderTrack`) that finds the exact adjacent card and scrolls smoothly to it without skipping.
3. **Eliminated Persistent Mobile Tap Highlights:** Guarded all `:hover` rules (`.proj-slider-arrow:hover`, `.cert-slider-arrow:hover`, `.contact-card:hover`, `.skill-card:hover`) behind `@media (hover: hover) and (pointer: fine)`, and substituted momentary `:active` touch feedback for mobile devices so buttons and contact links never stay stuck in a highlighted state.
4. **Added Automatic Focus Clearing:** Added `this.blur()` on click events for slider arrows to remove mobile browser focus outlines.

**What I did:** Verified mobile responsive layout, smooth sequential card stepping without skipping, and clean tap responses without lingering highlight states.

---

## Notes on AI Collaboration

The AI assistant (opencode/big-pickle) was used for:
- **Planning:** Reading and understanding the activity requirements
- **Scaffolding:** Setting up the Laravel project structure
- **Code Generation:** Creating the controller, routes, and Blade view
- **Styling:** Writing the CSS for the portfolio design
- **Version Control:** Setting up git and making incremental commits
- **Documentation:** Creating this prompt log

All AI-generated code was reviewed and accepted, with several prompts needing follow-up corrections that the AI resolved:
- Port conflict with XAMPP Apache (switched to port 8080)
- Certifications placeholder data corrected with real credentials
- Project thumbnail clicks broken by JSON quoting (fixed with a data attribute)
- Screenshot file paths gathered when an inline pasted image could not be read

Every correction was confirmed against the live site before moving on.

---

*Log created by AI assistant on September 4, 2026, and updated on September 5, 2026*
