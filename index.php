<?php
$page_title = 'Mey Risa Handayani';
include 'includes/header.php';
?>
<div class="page-wrap">

<section class="hero">

    <!-- ── LEFT ── -->
    <div class="hero-left">
        <h1 class="hero-name">
            MEY RISA<br>
            <span class="italic-line">Handayani</span>
        </h1>

        <div class="hero-subtitle">
            <span class="hero-subtitle-dot"></span>
            Web Developer &nbsp;·&nbsp; Software Developer
        </div>

        <p class="hero-desc">
           Saya mahasiswa Teknik Informatika dari PENS yang berfokus pada pengembangan Full-stack Web dan Manajemen Database. Saya memiliki pengalaman dalam membangun aplikasi berbasis web yang terintegrasi dengan layanan API untuk menciptakan sistem yang efisien. Meskipun memiliki latar belakang di bidang sistem IoT, saat ini saya lebih memfokuskan pengembangan diri pada arsitektur perangkat lunak dan solusi digital yang skalabel.
        </p>

        <div class="hero-actions">
            <a href="about.php" class="btn btn-maroon">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                Tentang Saya
            </a>
            <a href="project.php" class="btn btn-navy">
                <svg width="15" height="15" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M9 9h6M9 13h4"/></svg>
                Lihat Project
            </a>
            <a href="contact.php" class="btn btn-outline">Hubungi Saya</a>
        </div>

        <div class="hero-stats">
            <div class="hs-item">
                <div class="hs-num">1<sup>+</sup></div>
                <div class="hs-lbl">Tahun Exp</div>
            </div>
            <div class="hs-div"></div>
            <div class="hs-item">
                <div class="hs-num">3<sup>+</sup></div>
                <div class="hs-lbl">Project</div>
            </div>
            <div class="hs-div"></div>
            <div class="hs-item">
                <div class="hs-num">10<sup>+</sup></div>
                <div class="hs-lbl">Sertifikat</div>
            </div>
        </div>
    </div>

    <!-- ── RIGHT PHOTO ── -->
    <div class="hero-right">
        <div class="hero-photo-card">
            <div class="hero-photo-frame">
                <!-- Ganti dengan path foto Anda -->
                <img
                    src="assets/images/FotoRisa.jpg"
                    alt="Mey Risa Handayani"
                    onerror="this.src='https://placehold.co/420x560/0F2347/F6EDD9?text=FOTO+ANDA'"
                >
                <div class="hero-photo-overlay"></div>
                <div class="hero-photo-label">
                    <div>
                        <div class="hpl-name">Mey Risa Handayani</div>
                        <div class="hpl-role">Web Developer</div>
                    </div>
                    <div class="hpl-avail" title="Available for work"></div>
                </div>
            </div>
            <div class="corner corner-tl"></div>
            <div class="corner corner-br"></div>
        </div>
    </div>

</section>

<!-- ── QUICK NAVIGATION STRIP ── -->
<div class="section" style="padding-top:0">
    <div class="quick-strip reveal">
        <a href="about.php" class="qs-item">
            <div class="qs-icon">👤</div>
            <div class="qs-label">About</div>
            <div class="qs-sub">Biodata & Pengalaman</div>
        </a>
        <a href="project.php" class="qs-item">
            <div class="qs-icon">💼</div>
            <div class="qs-label">Projects</div>
            <div class="qs-sub">Portofolio Karya</div>
        </a>
        <a href="contact.php" class="qs-item">
            <div class="qs-icon">✉</div>
            <div class="qs-label">Contact</div>
            <div class="qs-sub">Let's Collaborate</div>
        </a>
    </div>
</div>

</div>
<?php include 'includes/footer.php'; ?>
