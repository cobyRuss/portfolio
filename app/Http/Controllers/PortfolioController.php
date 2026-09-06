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

        return view('portfolio', compact('profile', 'education', 'skills', 'certifications'));
    }
}
