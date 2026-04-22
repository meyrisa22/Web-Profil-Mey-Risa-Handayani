<?php
$page_title = 'About | Mey Risa Handayani';
include 'includes/header.php';

/* ─────────────────────────────────────────────────────
    DATA BIODATA
───────────────────────────────────────────────────── */
$biodata = [
    'Nama Lengkap'        => 'Mey Risa Handayani',
    'Alamat'              => 'Trenggalek, Indonesia',
    'Email'               => 'meyrisah01@gmail.com',
    'Pendidikan Saat Ini' => 'D3 Teknik Informatika',
    'Universitas'         => 'Politeknik Elektronika Negeri Surabaya PSDKU Lamongan',
    'IPK'                 => '3.6/4.0',
    'Status'              => 'Open to Internship',
];

// GANTI LINK DI BAWAH INI DENGAN LINK GOOGLE DRIVE CV ANDA
$cv_link = "https://drive.google.com/file/d/10Yvrw9L_GsPqAMZywPMufqSxgtVmaC_q/view?usp=sharing";

/* ─────────────────────────────────────────────────────
    BAHASA & TEKNOLOGI
───────────────────────────────────────────────────── */
$skills = [
    'PHP','Laravel','Node.js','Python','Java', 'C',
    'JavaScript','React.js','HTML5','CSS3','Bootstrap','Tailwind',
    'MySQL','PostgreSQL','MongoDB',
    'Linux','REST API','Figma','Flutter'
];

/* ─────────────────────────────────────────────────────
    PENGALAMAN
───────────────────────────────────────────────────── */
$experiences = [
    [
        'period'  => 'Agu 2025 - Sekarang',
        'role'    => 'Komisi Data Center',
        'company' => 'Pemandu LKMM Politeknik Elektronika Negeri Surabaya',
        'desc'    => 'Bertanggung jawab atas pengelolaan dan pendataan peserta LKMM PENS serta membawakan materi pada LKMM Tingkat Pra Dasar dan Tingkat Dasar, dengan fokus pada ketelitian, koordinasi, dan komunikasi yang sistematis.',
        'img'     => 'assets/images/exp-1.jpg',
    ],
    [
        'period'  => 'Sep 2025 - Sekarang',
        'role'    => 'Wakil Kepala Divisi Luar Negeri',
        'company' => 'Himpunan Mahasiswa Politeknik Elektronika Negeri Surabaya Kampus Lamongan',
        'desc'    => 'Bertanggung jawab mengelola kerja sama eksternal dengan menjalin hubungan bersama media partner dan pihak luar melalui komunikasi, negosiasi, serta koordinasi teknis, sekaligus mengembangkan kemampuan komunikasi profesional, networking, dan berpikir strategis.',
        'img'     => 'assets/images/exp-2.jpg',
    ],
    [
        'period'  => 'Nov 2025 - Sekarang',
        'role'    => 'Konselor Sebaya',
        'company' => 'Satgas PPK Politeknik Elektronika Negeri Surabaya',
        'desc'    => 'Berperan sebagai pendamping dan teman diskusi yang aman bagi mahasiswa dengan menyediakan ruang berbagi yang nyaman, menjaga kerahasiaan, serta terlibat dalam edukasi dan kampanye pencegahan kekerasan, sekaligus mengembangkan empati, komunikasi interpersonal, dan tanggung jawab.',
        'img'     => 'assets/images/exp-3.jpg',
    ],
];

/* ─────────────────────────────────────────────────────
    PELATIHAN & SERTIFIKAT (15 Item Lengkap)
───────────────────────────────────────────────────── */
$trainings = [
    [
        'title'  => 'Introduction to Artificial Intelligence',
        'issuer' => 'IBM SkillsBuild',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-1.jpg',
        'url'    => 'https://drive.google.com/file/d/1DUAGbNIQnCoBK6NTHYoHKJdqWFEKtEVU/view?usp=sharing',
    ],
    [
        'title'  => 'Introduction to Generative AI',
        'issuer' => 'IBM SkillsBuild',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-2.jpg',
        'url'    => 'https://drive.google.com/file/d/1T8RX0x6Dgo44XAkrtTJWBbI_3OdC0Dnx/view?usp=sharing',
    ],
    [
        'title'  => 'AI Ethics',
        'issuer' => 'IBM SkillsBuild',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-3.jpg',
        'url'    => 'https://drive.google.com/file/d/1T8RX0x6Dgo44XAkrtTJWBbI_3OdC0Dnx/view?usp=sharing',
    ],
    [
        'title'  => 'Generatif AI untuk Pendidikan',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-4.jpg',
        'url'    => 'https://drive.google.com/file/d/1nGfILc56pY6sJ5jxNijfCsJjjLFFjMUG/view?usp=drive_link',
    ],
    [
        'title'  => 'Dasar-Dasar Implementasi Kecerdasan Artifisial',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-5.jpg',
        'url'    => 'https://drive.google.com/file/d/1lF4bj54Oj6bkv0cfO_7R7G3vlLHVJxHR/view?usp=drive_link',
    ],
    [
        'title'  => 'AI Engineer For Milenial',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-6.jpg',
        'url'    => 'https://drive.google.com/file/d/18tnEe9kJcUKx58NdoI0VDnC3BJZbMsvN/view?usp=drive_link',
    ],
    [
        'title'  => 'Introduction to Cyber Security and Career Awareness',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-7.jpg',
        'url'    => 'https://drive.google.com/file/d/1jTGA84H-nJj6FiE9E0Eu99CEGoTO2V3P/view?usp=drive_link',
    ],
    [
        'title'  => 'Ethical Hacker For Dummies',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-8.jpg',
        'url'    => 'https://drive.google.com/file/d/1dHVxf_T7wSAvMPHyhz21n7M8VLD4VLfw/view?usp=drive_link',
    ],
    [
        'title'  => 'Membangun Lab Virtual & Dasar Linux',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-9.jpg',
        'url'    => 'https://drive.google.com/file/d/16ACmghagysVMFBHe913KUrLxLRyzAvt6/view?usp=drive_link',
    ],
    [
        'title'  => 'Dasar dan Penggunaan Generatif AI',
        'issuer' => 'CODEPOLITAN',
        'year'   => '2026',
        'thumb'  => 'assets/images/cert-10.jpg',
        'url'    => 'https://drive.google.com/file/d/16D_9UTz3h1P0ya6dAuccBai4alDWSo-J/view?usp=drive_link',
    ],
    [
        'title'  => 'Web Development 13.0',
        'issuer' => 'Dibimbing',
        'year'   => '2026',
        'thumb'  => 'assets/images/cert-11.jpg',
        'url'    => 'https://drive.google.com/file/d/12WYfs5GYq2H0X9K5JOAVjDahazsH-pmz/view?usp=drive_link',
    ],
    [
        'title'  => 'Konsep Pemograman',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-12.jpg',
        'url'    => 'https://drive.google.com/file/d/1ACYTjd7PJoEJuoOVgRJOPBb-ZBEYCnHz/view?usp=drive_link',
    ],
    [
        'title'  => 'Seni Public Speaking untuk Pemimpin Muda Berkarakter',
        'issuer' => 'Digitalent KOMDIGI',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-13.jpg',
        'url'    => 'https://drive.google.com/file/d/1-K_rJRi4WY8qthi6pJLNnHu3SvDvn0FB/view?usp=drive_link',
    ],
    [
        'title'  => 'LKMM Tingkat Menengah',
        'issuer' => 'FEB UNESA',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-14.jpg',
        'url'    => 'https://drive.google.com/file/d/1vfB2jRoKkdk4a9mNxDI398liDS2nZUii/view?usp=drive_link',
    ],
    [
        'title'  => 'Mini Class X ECODE',
        'issuer' => 'HIMIT Politeknik Elektronika Negeri Surabaya',
        'year'   => '2025',
        'thumb'  => 'assets/images/cert-15.jpg',
        'url'    => 'https://drive.google.com/file/d/1aIkI_giOxqQLZEgzkUXLNsmpMD0WI2Z6/view?usp=drive_link',
    ],
];

/* helper: tentukan href dan target untuk tiap sertifikat */
function cert_link(array $c): array {
    if (!empty($c['url']))  return ['href' => $c['url'],  'target' => '_blank',  'type' => 'external'];
    if (!empty($c['pdf']))  return ['href' => $c['pdf'],  'target' => '_blank',  'type' => 'pdf'];
    return ['href' => '#', 'target' => '_self', 'type' => 'none'];
}
?>

<div class="page-wrap">
<section class="section">

    <div class="sh-wrap reveal">
        <div class="sh-eyebrow">About Me</div>
        <h1 class="sh-title">Kenali Saya<br><em>Lebih Dalam</em></h1>
        <div class="sh-rule"></div>
    </div>

    <div class="about-layout">

        <div class="about-sidebar reveal">
            <div class="sidebar-photo">
                <img src="assets/images/FotoKuliah.jpg" alt="Mey Risa Handayani" onerror="this.src='https://placehold.co/400x533/0F2347/F6EDD9?text=Mey+Risa'">
                <div class="sidebar-photo-overlay"></div>
                <div class="sidebar-badge">
                    <div class="sb-name">Mey Risa Handayani</div>
                    <div class="sb-title">Software Developer</div>
                </div>
            </div>

            <a href="<?= $cv_link ?>" target="_blank" class="cv-btn">
                <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
                    <polyline points="7 10 12 15 17 10"/>
                    <line x1="12" y1="15" x2="12" y2="3"/>
                </svg>
                Lihat & Unduh CV
            </a>
        </div>

        <div class="about-main">

            <div class="panel reveal">
                <div class="panel-head">
                    <span class="panel-head-dot" style="background:#c8a96e"></span>
                    Biodata Pribadi
                </div>
                <div class="panel-body">
                    <div class="biodata-rows">
                        <?php foreach ($biodata as $k => $v): ?>
                        <div class="bio-row">
                            <span class="bio-key"><?= htmlspecialchars($k) ?></span>
                            <span class="bio-val"><?= htmlspecialchars($v) ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="panel reveal">
                <div class="panel-head">
                    <span class="panel-head-dot" style="background:var(--maroon-lt)"></span>
                    Bahasa &amp; Teknologi
                </div>
                <div class="panel-body">
                    <div class="skills-cloud">
                        <?php foreach ($skills as $s): ?>
                        <span class="skill-pill"><?= htmlspecialchars($s) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <div class="reveal">
                <div class="sh-eyebrow" style="margin-bottom:1rem">Pengalaman</div>
                <div class="exp-list">
                    <?php foreach ($experiences as $exp): ?>
                    <div class="exp-card">
                        <div class="exp-thumb">
                            <img src="<?= htmlspecialchars($exp['img']) ?>" alt="Foto Pengalaman" onerror="this.src='https://placehold.co/300x200/7B1F1F/F6EDD9?text=Bukti+Pengalaman'">
                            <div class="exp-thumb-overlay"></div>
                        </div>
                        <div class="exp-body">
                            <span class="exp-period"><?= htmlspecialchars($exp['period']) ?></span>
                            <div class="exp-role"><?= htmlspecialchars($exp['role']) ?></div>
                            <div class="exp-company"><?= htmlspecialchars($exp['company']) ?></div>
                            <p class="exp-desc"><?= htmlspecialchars($exp['desc']) ?></p>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="reveal">
                <div class="sh-eyebrow" style="margin-bottom:.5rem">Pelatihan &amp; Sertifikat</div>
                <p class="cert-intro">Klik kartu sertifikat untuk membuka dokumen asli</p>
                <div class="cert-grid">
                    <?php foreach ($trainings as $cert):
                        $link = cert_link($cert);
                        $has_file = ($link['type'] !== 'none');
                    ?>
                    <a href="<?= htmlspecialchars($link['href']) ?>" target="<?= $link['target'] ?>" rel="noopener noreferrer" class="cert-card <?= !$has_file ? 'no-link' : '' ?>" <?= !$has_file ? 'style="pointer-events:none;opacity:.7"' : '' ?>>
                        <div class="cert-thumb">
                            <img src="<?= htmlspecialchars($cert['thumb']) ?>" alt="<?= htmlspecialchars($cert['title']) ?>" onerror="this.src='https://placehold.co/300x225/0F2347/F6EDD9?text=Sertifikat'" loading="lazy">
                            <?php if ($has_file): ?>
                            <div class="cert-pdf-badge">
                                <?= $link['type']==='pdf' ? 'PDF' : 'LINK' ?>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="cert-info">
                            <div class="cert-title"><?= htmlspecialchars($cert['title']) ?></div>
                            <div class="cert-issuer"><?= htmlspecialchars($cert['issuer']) ?></div>
                            <div class="cert-file-note"><?= htmlspecialchars($cert['year']) ?></div>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>

        </div></div></section>
</div>

<?php include 'includes/footer.php'; ?>