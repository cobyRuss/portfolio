<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Russel Tristan L. Marzo',
            'title' => 'IT Student & Aspiring Developer',
            'about' => 'A dedicated Information Technology student at Data Center College of the Philippines - Bangued, passionate about software development and web technologies. Currently building skills in web development, programming, and system administration.',
            'email' => 'coby.2339@gmail.com',
            'phone' => '0935 759 1816',
            'github' => 'https://github.com/cobyRuss',
            'github_username' => 'cobyRuss',
            'photo' => asset('images/profile.png'),
        ];

        $education = [
            'school' => 'Data Center College of the Philippines',
            'campus' => 'Bangued',
            'program' => 'Bachelor of Science in Information Technology',
            'status' => '4th Year - Currently Enrolled',
        ];

        $skills = [
            ['name' => 'HTML5', 'level' => 'Intermediate', 'category' => 'Frontend'],
            ['name' => 'CSS3', 'level' => 'Intermediate', 'category' => 'Frontend'],
            ['name' => 'JavaScript', 'level' => 'Beginner', 'category' => 'Frontend'],
            ['name' => 'PHP', 'level' => 'Intermediate', 'category' => 'Backend'],
            ['name' => 'Laravel', 'level' => 'Beginner', 'category' => 'Backend'],
            ['name' => 'MySQL', 'level' => 'Intermediate', 'category' => 'Database'],
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
                'image' => asset('certifications/csc-eligibility.png'),
            ],
            [
                'title' => 'DOST Startup Cordillera',
                'issuer' => 'DOST - Cordillera Administrative Region',
                'type' => 'Certificate',
                'date' => 'September 2, 2026',
                'status' => 'Earned',
                'image' => asset('certifications/dost-startup-cordillera.png'),
            ],
            [
                'title' => 'Online Safety Through Netiquette',
                'issuer' => 'Department of Information and Communications Technology',
                'type' => 'Certificate',
                'date' => 'July 23, 2026',
                'status' => 'Earned',
                'image' => asset('certifications/dict-online-safety.png'),
            ],
        ];

        $projects = [
            [
                'title' => 'Web App - Flowershop Online Website',
                'type' => 'Web Application',
                'description' => 'An online flowershop website where customers can browse and order flower arrangements. Built as a web application with product catalog and ordering features.',
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
