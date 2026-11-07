<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Russel Tristan L. Marzo',
            'nickname' => 'Coby',
            'title' => 'IT Student & Aspiring Developer',
            'tagline' => 'Building clean, practical web applications and offline software systems with modern web technologies.',
            'about' => 'A dedicated Information Technology student at Data Center College of the Philippines - Bangued, passionate about software development and web technologies. Currently building skills in web development, programming, and system administration.',
            'email' => 'coby.2339@gmail.com',
            'phone' => '0935 759 1816',
            'github' => 'https://github.com/cobyRuss',
            'github_username' => 'cobyRuss',
            // Strictly set to requested filename (place image in public/a0d3a185-05a0-4ac0-a10b-c39b51f0f5c0.jpg)
            'photo' => 'a0d3a185-05a0-4ac0-a10b-c39b51f0f5c0.jpg',
            'socials' => [
                'facebook' => 'https://www.facebook.com/llcoby/',
                'facebook_handle' => 'llcoby',
                'messenger' => 'https://m.me/llcoby',
                'messenger_handle' => 'm.me/llcoby',
                'instagram' => 'https://www.instagram.com/cobymarzo/',
                'instagram_handle' => '@cobymarzo',
            ],
        ];

        $education = [
            'school' => 'Data Center College of the Philippines',
            'campus' => 'Bangued',
            'program' => 'Bachelor of Science in Information Technology',
            'degree_short' => 'BSIT',
            'status' => '4th Year - Currently Enrolled',
        ];

        $skills = [
            ['name' => 'Laravel', 'category' => 'Backend', 'icon' => 'laravel'],
            ['name' => 'PHP', 'category' => 'Backend', 'icon' => 'php'],
            ['name' => 'HTML5', 'category' => 'Frontend', 'icon' => 'html5'],
            ['name' => 'CSS3', 'category' => 'Frontend', 'icon' => 'css3'],
            ['name' => 'JavaScript', 'category' => 'Frontend', 'icon' => 'javascript'],
            ['name' => 'MySQL', 'category' => 'Database', 'icon' => 'mysql'],
            ['name' => 'SQLite', 'category' => 'Database', 'icon' => 'sqlite'],
            ['name' => 'Git & GitHub', 'category' => 'Tools', 'icon' => 'github'],
            ['name' => 'VS Code', 'category' => 'Tools', 'icon' => 'vscode'],
            ['name' => 'XAMPP', 'category' => 'Tools', 'icon' => 'xampp'],
        ];

        $certifications = [
            [
                'title' => 'Civil Service Professional',
                'issuer' => 'Civil Service Commission',
                'type' => 'Eligibility',
                'date' => '2023',
                'status' => 'Earned',
                // Structural placeholders: update image path in public/certifications/ or verification link below
                'image' => asset('certifications/csc-eligibility.png'),
                'link' => '', // Optional: insert external verification URL here
            ],
            [
                'title' => 'DOST Startup Cordillera',
                'issuer' => 'DOST - Cordillera Administrative Region',
                'type' => 'Certificate',
                'date' => 'September 2, 2026',
                'status' => 'Earned',
                // Structural placeholders: update image path in public/certifications/ or verification link below
                'image' => asset('certifications/dost-startup-cordillera.png'),
                'link' => '', // Optional: insert external verification URL here
            ],
            [
                'title' => 'Online Safety Through Netiquette',
                'issuer' => 'Department of Information and Communications Technology',
                'type' => 'Certificate',
                'date' => 'July 23, 2026',
                'status' => 'Earned',
                // Structural placeholders: update image path in public/certifications/ or verification link below
                'image' => asset('certifications/dict-online-safety.png'),
                'link' => '', // Optional: insert external verification URL here
            ],
            [
                'title' => 'Introduction to Modern AI',
                'issuer' => 'Cisco Networking Academy Program',
                'type' => 'Certificate',
                'date' => 'October 30, 2026',
                'status' => 'Earned',
                // Structural placeholders: update image path in public/certifications/ or verification link below
                'image' => asset('certifications/cisco-modern-ai.jpg'),
                'link' => '', // Optional: insert external verification URL here
            ],
            [
                'title' => 'Understanding Startups & Getting Your Idea Ready for the Philippine Startup Challenge XI',
                'issuer' => 'DICT - Cordillera Administrative Region',
                'type' => 'Certificate',
                'date' => 'September 7, 2026',
                'status' => 'Earned',
                // Structural placeholders: update image path in public/certifications/ or verification link below
                'image' => asset('certifications/dict-psc-xi-startups.jpg'),
                'link' => '', // Optional: insert external verification URL here
            ],
        ];

        $projects = [
            [
                'title' => 'Web App - Flowershop Online Website',
                'type' => 'Web Application',
                'description' => 'An online flowershop website where customers can browse and order flower arrangements. Built as a web application with product catalog and ordering features.',
                'tags' => ['Web App', 'PHP', 'HTML/CSS', 'Product Catalog'],
                // Structural image placeholders: replace or append screenshot paths in public/projects/flowershop/
                'images' => [
                    asset('projects/flowershop/1.png'),
                    asset('projects/flowershop/2.png'),
                    asset('projects/flowershop/3.png'),
                    asset('projects/flowershop/4.png'),
                    asset('projects/flowershop/5.png'),
                    asset('projects/flowershop/6.png'),
                    asset('projects/flowershop/7.png'),
                    asset('projects/flowershop/8.png'),
                    asset('projects/flowershop/9.png'),
                ],
            ],
            [
                'title' => 'Registrar Grade Report Keeping System',
                'type' => 'Offline Application',
                'description' => 'An offline grade report keeping system for the registrar office, designed to record, manage, and print student grade reports without requiring an internet connection.',
                'tags' => ['Offline System', 'Grade Management', 'Report Printing'],
                // Structural image placeholders: replace or append screenshot paths in public/projects/rgkrs/
                'images' => [
                    asset('projects/rgkrs/1.png'),
                    asset('projects/rgkrs/2.png'),
                    asset('projects/rgkrs/3.png'),
                    asset('projects/rgkrs/4.png'),
                    asset('projects/rgkrs/5.png'),
                ],
            ],
            [
                'title' => 'Desktop App - 88 Mini Mart POS System',
                'type' => 'Desktop Application',
                'description' => 'An offline Point of Sale (POS) system designed for retail management. Built as a desktop application featuring real-time inventory tracking, sales transaction processing, and automated receipt generation for daily store operations.',
                'tags' => ['Desktop App', 'POS System', 'Inventory Tracking', 'Offline'],
                'images' => [
                    asset('projects/88minimart/1.png'),
                    asset('projects/88minimart/2.png'),
                    asset('projects/88minimart/3.png'),
                    asset('projects/88minimart/4.png'),
                    asset('projects/88minimart/5.png'),
                    asset('projects/88minimart/6.png'),
                ],
            ],
            [
                'title' => 'Mobile App - Offline Student Attendance System',
                'type' => 'Mobile Application',
                'description' => 'An offline attendance tracking mobile app built with Flutter & Dart. Features real-time session logging, multi-class academic filtering, one-tap batch marking, and searchable historical logs.',
                'tags' => ['Mobile App', 'Flutter', 'Dart', 'Offline System', 'Attendance Tracking'],
                'images' => [
                    asset('projects/student_attendance/1.jpg'),
                    asset('projects/student_attendance/2.jpg'),
                    asset('projects/student_attendance/3.jpg'),
                    asset('projects/student_attendance/4.jpg'),
                    asset('projects/student_attendance/5.jpg'),
                ],
            ],
        ];

        return view('portfolio', compact('profile', 'education', 'skills', 'certifications', 'projects'));
    }
}
