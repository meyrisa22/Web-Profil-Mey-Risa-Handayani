<?php
$page_title = 'Contact | Mey Risa Handayani';
include 'includes/header.php';

/* ─── Ganti data kontak di bawah ini ─── */
$contacts = [
    [
        'platform' => 'Instagram',
        'handle'   => '@the_meyrisa22',
        'url'      => 'https://www.instagram.com/the_meyrisa22/',
        'icon'     => '📸',
        'desc'     => 'Follow for daily updates',
    ],
    [
        'platform' => 'GitHub',
        'handle'   => 'meyrisa22', // Ganti dengan username GitHub aslimu
        'url'      => 'https://github.com/meyrisa22', // Ganti dengan URL GitHub aslimu
        'icon'     => '💻', // Kamu bisa pakai emoji atau tag <i> jika pakai FontAwesome
        'desc'     => 'Check out my repositories',
    ],
    [
        'platform' => 'Email',
        'handle'   => 'meyrisah01@gmail.com',
        'url'      => 'mailto:meyrisah01@gmail.com',
        'icon'     => '✉',
        'desc'     => 'Balas dalam 1-5 hari kerja',
    ],
    [
        'platform' => 'LinkedIn',
        'handle'   => 'linkedin.com/in/mey-risa-handayani',
        'url'      => 'https://www.linkedin.com/in/mey-risa-handayani/',
        'icon'     => '💼',
        'desc'     => 'Professional network',
    ],
    [
        'platform' => 'TikTok',
        'handle'   => '@the_meyrisa22',
        'url'      => 'https://www.tiktok.com/@the_meyrisa22',
        'icon'     => '🎵',
        'desc'     => 'Daily Content',
    ],
];
?>

<div class="page-wrap">
<section class="section">

    <div class="contact-wrap">

        <!-- LEFT -->
        <div>
            <div class="sh-eyebrow reveal">Contact Me</div>

            <h1 class="contact-hero-text reveal">
                Punya Ide?
                <em>Mari Mengobrol</em>
            </h1>

            <p class="contact-lead reveal">
                Saya terbuka untuk kolaborasi, diskusi project, peluang kerja,
                atau sekadar berbagi pengetahuan seputar teknologi dan desain.
                Jangan ragu untuk menghubungi saya melalui platform di bawah ini.
            </p>

            <div class="avail-pill reveal">
                <span class="avail-dot"></span>
                Open for intern & collaborations.
            </div>

            <!-- decorative block -->
            <div class="reveal" style="
                margin-top:2.5rem;
                padding:1.2rem 1.5rem;
                background:var(--navy);
                border-radius:var(--radius);
                border-left:4px solid var(--maroon);
                max-width:380px;
            ">
                <p style="font-family:var(--mono);font-size:.72rem;color:rgba(246,237,217,.5);letter-spacing:.12em;text-transform:uppercase;margin-bottom:.4rem">Response Time</p>
                <p style="color:var(--cream);font-size:.9rem;line-height:1.6">
                    Email &amp; LinkedIn biasanya dibalas dalam <strong style="color:var(--cream)">1–2 hari kerja</strong>.
                    Instagram DM bisa lebih cepat untuk pertanyaan singkat.
                </p>
            </div>
        </div>

        <!-- RIGHT -->
        <div>
            <div class="contact-cards">
                <?php foreach ($contacts as $i => $c): ?>
                <a
                    href="<?= htmlspecialchars($c['url']) ?>"
                    target="<?= str_starts_with($c['url'],'mailto') ? '_self' : '_blank' ?>"
                    rel="noopener noreferrer"
                    class="contact-card reveal"
                    style="transition-delay:<?= $i * .1 ?>s"
                >
                    <div class="cc-icon"><?= $c['icon'] ?></div>
                    <div class="cc-body">
                        <div class="cc-platform"><?= htmlspecialchars($c['platform']) ?></div>
                        <div class="cc-handle"><?= htmlspecialchars($c['handle']) ?></div>
                        <div style="font-family:var(--mono);font-size:.65rem;color:var(--ink-muted);margin-top:.15rem">
                            <?= htmlspecialchars($c['desc']) ?>
                        </div>
                    </div>
                    <span class="cc-arrow">
                        <svg width="14" height="14" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <path d="M7 17L17 7M7 7h10v10"/>
                        </svg>
                    </span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

</section>
</div>
<?php include 'includes/footer.php'; ?>
