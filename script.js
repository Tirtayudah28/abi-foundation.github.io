// Versi final script.js untuk translasi manual ABI Foundation
const translations = {
  en: {
    "HOME": "HOME",
    "ABOUT US": "ABOUT US",
    "MEDIA": "MEDIA",
    "NEWS": "NEWS",
    "MEDIA COVERAGE": "MEDIA COVERAGE",
    "PUBLICATIONS": "PUBLICATIONS",
    "BLOG": "BLOG",
    "CONTACT US": "CONTACT US",

    "tagline": "Welcome to ABI Foundation",
    "tagline2": "Building ecosystem of creative and skilled youth",
    "learn-more": "Learn More",
    "contact-now": "Contact Us",

    "tentang-kami": "About ABI Foundation",
    "text": "ABI Foundation was launched on May 1, 2025. It was established to build an education ecosystem that equips youth with real-world skills based on creative technology. ABI Foundation plays a role as a consultant and trainer for the younger generation, from high school to higher education.",
    "text2": "Through various innovative programs in education, social development, and economic empowerment, we strive to build a solid foundation for a better future.",

    "focus-title": "Our Main Focus",
    "focus-subtitle": "We are committed to making a real contribution in various aspects of society.",
    "box1-title": "Community Empowerment",
    "box1-text": "We collaborate with communities to create sustainable positive change.",
    "box2-title": "Access to Quality Education",
    "box2-text": "Providing educational facilities and programs for all levels of society.",
    "box3-title": "Social Initiatives",
    "box3-text": "Supporting social activities and cross-sectoral strategic cooperation.",
    "view-details": "View Details",

    "footer-text": "Building a better future through education, innovation, and community empowerment.",
    "footer-contact-title": "Contact Us",
    "footer-address": "Jl. Inspiration No.123, Hope City, Indonesia",
    "footer-links-title": "Quick Links",
    "footer-about": "About Us",
    "footer-news": "Latest News",
    "footer-gallery": "Activity Gallery",
    "footer-blog": "Our Blog",
    "footer-policy": "Privacy Policy",
    "footer-terms": "Terms & Conditions",
    "copyright": "© 2025 ABI Foundation. All Rights Reserved."
  },
  id: {
    "HOME": "BERANDA",
    "ABOUT US": "TENTANG KAMI",
    "MEDIA": "MEDIA",
    "NEWS": "BERITA",
    "MEDIA COVERAGE": "LIPUTAN MEDIA",
    "PUBLICATIONS": "PUBLIKASI",
    "BLOG": "BLOG",
    "CONTACT US": "HUBUNGI KAMI",

    "tagline": "Selamat Datang di ABI Foundation",
    "tagline2": "Membangun ekosistem anak muda kreatif dan berskill",
    "learn-more": "Pelajari Lebih Lanjut",
    "contact-now": "Hubungi Kami",

    "tentang-kami": "Tentang ABI Foundation",
    "text": "ABI Foundation di luncur kan pada tanggal 1 mei 2025. ABI Foundation di bangun bertujuan untuk membangun Ekosistem pendidikan yang memiliki skill di dunia kerja berbasis teknologi kreatif. ABI Foundation memiliki peran sebagai konsultansi dan pelatihan pada generasi muda baik dalam sekolah menengah atau pendidikan tinggi agar memiliki kemampuan yang baik dalam bidangnya.",
    "text2": "Melalui berbagai program inovatif di bidang pendidikan, sosial, dan pemberdayaan ekonomi, kami berupaya membangun fondasi yang kuat untuk masa depan yang lebih baik.",

    "focus-title": "Fokus Utama Kami",
    "focus-subtitle": "Kami berkomitmen untuk memberikan kontribusi nyata dalam berbagai aspek kehidupan masyarakat.",
    "box1-title": "Pemberdayaan Komunitas",
    "box1-text": "Kami bekerja sama dengan komunitas untuk menciptakan perubahan positif yang berkelanjutan",
    "box2-title": "Akses Pendidikan Berkualitas",
    "box2-text": "Menyediakan sarana dan program pendidikan untuk semua kalangan",
    "box3-title": "Inisiatif Sosial",
    "box3-text": "Mendukung kegiatan sosial dan kerja sama strategis lintas sektor",
    "view-details": "Lihat Detail",

    "footer-text": "Membangun masa depan yag lebih baik melalui pendidikan, inovasi, dan pemberdayaan masyarakat.",
    "footer-contact-title": "Hubungi Kami",
    "footer-address": "Jl.Inspirasi No.123, Kota Harapan, Indonesia",
    "footer-links-title": "Tautan Cepat",
    "footer-about": "Tentang Kami",
    "footer-news": "Berita Baru",
    "footer-gallery": "Galeri Kegiatan",
    "footer-blog": "Blog Kami",
    "footer-policy": "Kebijakan Privasi",
    "footer-terms": "Syarat & ketentuan",
    "copyright": "© 2025 ABI Foundation. Semua Hak Cipta Dilindungi."
  }
};

const flags = {
  en: "https://flagcdn.com/gb.svg",
  id: "https://flagcdn.com/id.svg"
};

const langButtons = document.querySelectorAll(".language-option");
const currentFlag = document.getElementById("current-flag");

langButtons.forEach(button => {
  button.addEventListener("click", function (e) {
    e.preventDefault();
    const lang = this.dataset.lang;

    langButtons.forEach(btn => btn.classList.remove("active"));
    this.classList.add("active");

    currentFlag.src = flags[lang];

    document.querySelectorAll("[data-translate]").forEach(el => {
      const key = el.getAttribute("data-translate");
      if (translations[lang][key]) {
        const icon = el.querySelector("i") || el.querySelector("svg");
        el.innerHTML = translations[lang][key] + (icon ? ` ${icon.outerHTML}` : '');
      }
    });

    localStorage.setItem("lang", lang);
  });
});

// Auto-load saved language
window.addEventListener("DOMContentLoaded", () => {
  const savedLang = localStorage.getItem("lang") || "id";
  const button = document.querySelector(`[data-lang="${savedLang}"]`);
  if (button) button.click();
});

// Swiper init
const swiper = new Swiper(".tripleSwiper", {
  slidesPerView: 3,
  spaceBetween: 80,
  centeredSlides: true,
  loop: true,
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  breakpoints: {
    0: { // untuk layar 0 - 480px
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: false,
    },
    490: {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true,
    },
  }
});

// AOS init
AOS.init({
  duration: 1000,
  once: true
});

  // Toggle dropdown menu saat tombol Media diklik
  const dropBtn = document.getElementById('mediaToggle');
  const menuContent = document.getElementById('mediaMenu');

  let isMenuOpen = false;

  dropBtn.addEventListener('click', function (e) {
    e.stopPropagation(); // cegah window klik dari menutup menu saat ini diklik
    isMenuOpen = !isMenuOpen;

    if (isMenuOpen) {
      menuContent.classList.add('show');
    } else {
      menuContent.classList.remove('show');
    }
  });

  window.addEventListener('click', function (e) {
    if (!dropBtn.contains(e.target) && !menuContent.contains(e.target)) {
      menuContent.classList.remove('show');
      isMenuOpen = false;
    }
  });


  // Highlight link menu aktif berdasarkan URL
  // Tandai menu aktif berdasarkan URL saat ini
const allNavLinks = document.querySelectorAll('.navbar-nav a, .menu-content a');
const currentUrl = window.location.href;

allNavLinks.forEach(link => {
  const href = link.getAttribute('href');
  if (currentUrl.includes(href)) {
    link.classList.add('active');
  }
});


  // Hamburger Menu

  // Mobile hamburger menu toggle
const hamburgerIcon = document.getElementById("hamburger-icon");
const closeIcon = document.getElementById("close-icon");
const navbarNav = document.querySelector(".navbar-nav");

hamburgerIcon.addEventListener("click", () => {
  navbarNav.classList.add("show");
  hamburgerIcon.style.display = "none";
  closeIcon.style.display = "inline-block";
});

closeIcon.addEventListener("click", () => {
  navbarNav.classList.remove("show");
  hamburgerIcon.style.display = "inline-block";
  closeIcon.style.display = "none";
});

// tidak restart
const allMenuLinks = document.querySelectorAll(".navbar-nav a, .mobile-nav-panel a");

allMenuLinks.forEach(link => {
  link.addEventListener("click", (e) => {
    if (window.location.href.includes(link.getAttribute("href"))) {
      e.preventDefault(); // cegah reload jika sudah di halaman itu
    }
  });
});


  window.addEventListener('scroll', function() {
    const navbar = document.querySelector('.navbar');
    navbar.classList.toggle('scrolled', window.scrollY > 10);
  });

  





