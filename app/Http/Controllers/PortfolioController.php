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
            'status_badge' => '4th-Year BSIT Student',
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
            ['name' => 'Laravel', 'level' => 'Beginner', 'category' => 'Backend'],
            ['name' => 'PHP', 'level' => 'Intermediate', 'category' => 'Backend'],
            ['name' => 'HTML5', 'level' => 'Intermediate', 'category' => 'Frontend'],
            ['name' => 'CSS3', 'level' => 'Intermediate', 'category' => 'Frontend'],
            ['name' => 'JavaScript', 'level' => 'Beginner', 'category' => 'Frontend'],
            ['name' => 'MySQL', 'level' => 'Intermediate', 'category' => 'Database'],
            ['name' => 'SQLite', 'level' => 'Beginner', 'category' => 'Database'],
            ['name' => 'Git & GitHub', 'level' => 'Beginner', 'category' => 'Tools'],
            ['name' => 'VS Code', 'level' => 'Intermediate', 'category' => 'Tools'],
            ['name' => 'XAMPP', 'level' => 'Intermediate', 'category' => 'Tools'],
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
        ];

        return view('portfolio', compact('profile', 'education', 'skills', 'certifications', 'projects'));
    }
}
