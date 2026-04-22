# 🎓 Web Profil Pribadi v3 — Maroon × Navy × Cream

---

## 📁 Struktur Folder

```
profile-v3/
│
├── index.php            ← Home / Hero
├── about.php            ← Biodata, Skills, Pengalaman, Sertifikat PDF
├── project.php          ← Portfolio + Slider
├── contact.php          ← Instagram, Email, LinkedIn, TikTok
│
├── includes/
│   ├── header.php
│   └── footer.php
│
└── assets/
    ├── css/style.css
    ├── js/main.js
    ├── images/
    │   ├── foto-profil.jpg
    │   ├── exp-1.jpg, exp-2.jpg, exp-3.jpg
    │   ├── cert-1.jpg ... cert-8.jpg   ← thumbnail/preview sertifikat
    │   └── proj1-1.jpg, proj1-2.jpg, ...
    └── files/
        ├── cv.pdf                      ← File CV Anda
        └── certificates/              ← 📌 LETAKKAN PDF SERTIFIKAT DI SINI
            ├── cert-dicoding-backend.pdf
            ├── cert-aws-cloud.pdf
            ├── cert-bangkit-uiux.pdf
            ├── cert-ibm-python.pdf
            ├── cert-bwa-laravel.pdf
            └── cert-bnsp-webdev.pdf
```

---

## 🚀 Cara Menjalankan

```bash
cd profile-v3
php -S localhost:8000
```
Buka: http://localhost:8000

---

## 📄 Cara Setup Sertifikat PDF

Di `about.php`, setiap sertifikat punya 3 pilihan:

### Opsi 1 — PDF Lokal (Disarankan)
Taruh file PDF di `assets/files/certificates/` lalu isi field `pdf`:
```php
[
    'title'  => 'Nama Sertifikat',
    'issuer' => 'Penerbit',
    'year'   => '2024',
    'thumb'  => 'assets/images/cert-1.jpg',  // gambar preview
    'pdf'    => 'assets/files/certificates/nama-file.pdf',  // ← isi ini
    'url'    => '',  // kosongkan
],
```

### Opsi 2 — Link Eksternal (misal Coursera/Credly)
```php
[
    'title'  => 'Nama Sertifikat',
    'issuer' => 'Penerbit',
    'year'   => '2024',
    'thumb'  => 'assets/images/cert-2.jpg',
    'pdf'    => '',  // kosongkan
    'url'    => 'https://coursera.org/verify/xxxxx',  // ← isi ini
],
```

### Opsi 3 — Belum ada file (tampil tapi tidak bisa diklik)
```php
    'pdf' => '',
    'url' => '',
```

---

## 🖼️ Mengganti Gambar

| File | Keterangan |
|------|-----------|
| `assets/images/foto-profil.jpg` | Foto profil (dipakai di Home + About) |
| `assets/images/exp-1.jpg` | Foto bukti pengalaman kerja ke-1 |
| `assets/images/exp-2.jpg` | Foto bukti pengalaman kerja ke-2 |
| `assets/images/cert-1.jpg` | Thumbnail/preview sertifikat ke-1 |
| `assets/images/proj1-1.jpg` | Gambar project 1, slide 1 |
| `assets/images/proj1-2.jpg` | Gambar project 1, slide 2 |

---

## ✏️ Mengganti Data

### Nama & Role (index.php)
Cari `.hero-name` dan `.hero-subtitle` — ganti teks langsung.

### Biodata (about.php)
Edit array `$biodata`:
```php
$biodata = [
    'Nama Lengkap' => 'Budi Santoso',
    'Email'        => 'budi@gmail.com',
    // ...
];
```

### Kontak Sosial (contact.php)
Edit array `$contacts`:
```php
['platform'=>'Instagram', 'handle'=>'@budi_dev', 'url'=>'https://instagram.com/budi_dev', ...],
```

---

## 🎨 Warna (assets/css/style.css)

```css
:root {
    --maroon:  #7B1F1F;   /* Merah Maroon */
    --navy:    #0F2347;   /* Navy Blue */
    --cream:   #F6EDD9;   /* Cream hangat */
}
```
