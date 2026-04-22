<?php
$page_title = 'Project | Mey Risa Handayani';
include 'includes/header.php';

$projects = [
    [
        'name'   => 'GlowGuide | Skincare & Makeup Ritual',
        'year'   => '2025',
        'desc'   => 'Sistem Monitoring Bayi berbasis IoT dan Web. Memantau berat & tinggi bayi secara real-time menggunakan sensor HX711 dan HC-SR04 dengan fitur notifikasi WhatsApp otomatis via Fonnte API.',
        'tags'   => ['PHP Native'],
        'slides' => [
            'assets/images/proj1-1.jpg',
            'assets/images/proj1-2.jpg',
            'assets/images/proj1-3.jpg',
            'assets/images/proj1-4.jpg',
            'assets/images/proj1-5.jpg',
            'assets/images/proj1-6.jpg',
            'assets/images/proj1-7.jpg',
        ],
    ],
    [
        'name'   => 'Baby Monitoring',
        'year'   => '2025',
        'desc'   => 'Sistem Monitoring Bayi berbasis IoT dan Web. Memantau berat & tinggi bayi secara real-time menggunakan sensor HX711 dan HC-SR04 dengan fitur notifikasi WhatsApp otomatis via Fonnte API.',
        'tags'   => ['PHP Native','MySQL','JSON','Fonnte API'],
        'slides' => [
            'assets/images/proj2-1.jpg',
            'assets/images/proj2-2.jpg',
            'assets/images/proj2-3.jpg',
            'assets/images/proj2-4.jpg',
            'assets/images/proj2-5.jpg',
            'assets/images/proj2-6.jpg',
            'assets/images/proj2-7.jpg',
    ],
    ],
];
?>

<div class="page-wrap">
<section class="section">

    <div class="sh-wrap reveal">
        <div class="sh-eyebrow">Portfolio</div>
        <h1 class="sh-title">Project &amp;<br><em>Karya Saya</em></h1>
        <div class="sh-rule"></div>
    </div>

    <p class="reveal" style="max-width:560px;color:var(--ink-soft);line-height:1.8;margin-bottom:2.5rem;font-size:.97rem">
       Project-project yang pernah saya kerjakan, mayoritas fokus di pengembangan aplikasi web dan integrasi sistem. Semuanya dibuat dengan pertimbangan fungsi dan efisiensi kode.
    </p>

    <div class="proj-grid">
        <?php foreach ($projects as $idx => $proj): ?>
        <article class="proj-card reveal" style="transition-delay:<?= ($idx%2)*.1 ?>s">

            <!-- SLIDER -->
            <div class="slider-wrap">
                <div class="slider-accent"></div>

                <div class="slider-track">
                    <?php foreach ($proj['slides'] as $si => $src): ?>
                    <div class="slider-slide">
                        <img
                            src="<?= htmlspecialchars($src) ?>"
                            alt="<?= htmlspecialchars($proj['name']) ?> - slide <?= $si+1 ?>"
                            loading="lazy"
                            onerror="this.src='https://placehold.co/800x450/0F2347/F6EDD9?text=<?= urlencode($proj['name']) ?>'"
                        >
                    </div>
                    <?php endforeach; ?>
                </div>

                <?php if (count($proj['slides']) > 1): ?>
                <button class="slider-prev" aria-label="Sebelumnya">&#8249;</button>
                <button class="slider-next" aria-label="Selanjutnya">&#8250;</button>
                <div class="slider-dots">
                    <?php for ($d=0; $d<count($proj['slides']); $d++): ?>
                    <button class="slider-dot <?= $d===0?'on':'' ?>" aria-label="Slide <?=$d+1?>"></button>
                    <?php endfor; ?>
                </div>
                <?php endif; ?>
            </div>

            <!-- INFO -->
            <div class="proj-body">
                <div class="proj-meta">
                    <span class="proj-num"><?= sprintf('PROJECT %02d', $idx+1) ?></span>
                    <span class="proj-year"><?= htmlspecialchars($proj['year']) ?></span>
                </div>
                <h2 class="proj-name"><?= htmlspecialchars($proj['name']) ?></h2>
                <p class="proj-desc"><?= htmlspecialchars($proj['desc']) ?></p>
                <div class="proj-tags">
                    <?php foreach ($proj['tags'] as $t): ?>
                    <span class="proj-tag"><?= htmlspecialchars($t) ?></span>
                    <?php endforeach; ?>
                </div>
            </div>

        </article>
        <?php endforeach; ?>
    </div>

</section>
</div>
<?php include 'includes/footer.php'; ?>
