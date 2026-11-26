<?php

namespace App\Http\Controllers;

class CvController extends Controller
{
    public function index()
    {
        $profile = [
            'name' => 'Azzahra Zahirah Maspriana',
            'callname' => 'Zahra',
            'tagline' => 'Multimedia · Content & Vlog · MC · Reporter',
            'city' => 'Surabaya',
            'bio' => 'Suka ngobrol di depan kamera, nge-MC di atas panggung, dan turun langsung ke lapangan buat liputan maupun bikin konten. Di sela kuliah TRM PENS, aku juga ngerjain proyek 3D/VR, visual novel, dan ngulik web pakai Laravel.',
            'open_for' => 'Open for MC · Content / Endorse · Creative & Web Collabs',
            'email' => 'azzahra.zahirah@example.com',
            'ig' => '@zahra.ig',
            'tiktok' => '@zahra.tt',
        ];

        $experiences = [
            [
                'year' => '2026',
                'role' => 'Reporter (Gen 20)',
                'place' => 'EEPIS News and Network Team (ENT) · PENS',
                'note' => 'Liputan acara kampus, wawancara narasumber (5W+1H), nulis berita web dan caption media sosial.',
            ],
            [
                'year' => '2026',
                'role' => 'Departemen Minat Bakat & Ristek',
                'place' => 'BSO Teknologi Rekayasa Multimedia · PENS',
                'note' => 'Ikut merancang diskusi/sharing dan ruang eksplorasi kreatif mahasiswa TRM.',
            ],
            [
                'year' => '2026',
                'role' => 'Master of Ceremony (MC) & LO',
                'place' => 'Kegiatan Kampus PENS',
                'note' => 'Bawain acara seperti Welcome Party TRM 2026, sesi berbagi TRM angkatan 23, prosesi akademik, dan dampingi peserta PKKMB x TECHNOGEAR 2026.',
            ],
            [
                'year' => '2026',
                'role' => 'Freelance Reels Creator',
                'place' => 'DinoPlay Playground · Surabaya',
                'note' => 'Bikin konsep, syuting, dan edit Reels promosi untuk aktivitas playground.',
            ],
        ];

        $projects = [
            [
                'title' => '3D Video Mapping — Bung Hatta',
                'meta' => 'PM & 3D Modeller · Blender & After Effects',
                'desc' => 'Atur alur tim, bikin karakter "Ibu Ucup" di Blender, nulis naskah VO, dan rakit animasinya.',
            ],
            [
                'title' => '3D & VR House Environment',
                'meta' => 'Environment Modeller · 3D & VR',
                'desc' => 'Bangun model ruang/rumah untuk proyek VR dan catat logbook perkembangannya.',
            ],
            [
                'title' => 'Visual Novel "Kyai Pacet"',
                'meta' => 'Co-Author & Dev · Ren\'Py',
                'desc' => 'Bikin game visual novel sejarah lokal dan nulis paper risetnya.',
            ],
            [
                'title' => 'KOSTRA (Kos ITS Raya) & CV Web',
                'meta' => 'Web · PHP Native, Laravel & MySQL',
                'desc' => 'Latihan bikin web pendataan kos sekitar ITS dan web CV berbasis Laravel.',
            ],
        ];

        $skills = [
            'Video & Edit' => ['CapCut PC', 'After Effects', 'Canva',],
            '3D & Game' => ['Blender', 'VR Environment', 'Ren\'Py'],
            'Web & Code' => ['Laravel', 'PHP Native', 'HTML/CSS/JS', 'MySQL', 'Java & C'],
            'Stage & Liputan' => ['MC Acara', 'Reporter', 'News Writing'],
        ];

        $education = [
            'program' => 'D4 Teknologi Rekayasa Multimedia',
            'campus' => 'Politeknik Elektronika Negeri Surabaya (PENS)',
            'nim' => 'NIM 5325600081 · Angkatan 2025',
        ];

        return view('cv', compact('profile', 'experiences', 'projects', 'skills', 'education'));
    }
}