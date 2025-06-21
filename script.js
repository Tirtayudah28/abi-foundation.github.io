// TRANSLATE
// const translations = {
  // Hanya satu kali deklarasi
//   en: {
//     "tagline": "Welcome to ABI Foundation",
//     "tagline2": "Building ecosystem of creative and skilled youth",
//     "tentang-kami": "About ABI Foundation",
//     "focus-title": "Our Main Focus",
//     "focus-subtitle": "We are committed to making a real contribution in society.",
//     "box1-title": "Community Empowerment",
//     "box1-text": "We collaborate with communities to create sustainable change.",
//     "box2-title": "Access to Education",
//     "box2-text": "Providing programs and facilities for learning.",
//     "box3-title": "Social Initiatives",
//     "box3-text": "Supporting social activities and cooperation.",
//     "view-details": "View Details",
//     "footer-text": "Building a better future through education and innovation."
//   },
//   id: {
//     "tagline": "Selamat Datang di ABI Foundation",
//     "tagline2": "Menginspirasi dan Memperdayakan",
//     "tentang-kami": "Tentang ABI Foundation",
//     "focus-title": "Fokus Utama Kami",
//     "focus-subtitle": "Kami berkomitmen memberikan kontribusi nyata untuk masyarakat.",
//     "box1-title": "Pemberdayaan Komunitas",
//     "box1-text": "Kami bekerja sama menciptakan perubahan positif berkelanjutan",
//     "box2-title": "Akses Pendidikan",
//     "box2-text": "Menyediakan sarana dan program pendidikan",
//     "box3-title": "Inisiatif Sosial",
//     "box3-text": "Mendukung kegiatan sosial dan kerja sama strategis",
//     "view-details": "Lihat Detail",
//     "footer-text": "Membangun masa depan lebih baik melalui pendidikan dan inovasi."
//   }
// };

// const flags = {
//   en: "https://flagcdn.com/gb.svg",
//   id: "https://flagcdn.com/id.svg"
// };

// document.querySelectorAll(".language-option").forEach(button => {
//   button.addEventListener("click", function (e) {
//     e.preventDefault();
//     const lang = this.dataset.lang;

//     document.querySelectorAll(".language-option").forEach(btn => btn.classList.remove("active"));
//     this.classList.add("active");

//     document.getElementById("current-flag").src = flags[lang];

//     document.querySelectorAll("[data-translate]").forEach(el => {
//       const key = el.getAttribute("data-translate");
//       const icon = el.querySelector("i") || el.querySelector("svg");
//       el.innerHTML = translations[lang][key] + (icon ? ` ${icon.outerHTML}` : '');
//     });

//     localStorage.setItem("lang", lang);
//   });
// });

// window.addEventListener("DOMContentLoaded", () => {
//   const savedLang = localStorage.getItem("lang") || "id";
//   const button = document.querySelector(`[data-lang="${savedLang}"]`);
//   if (button) button.click();
// });

// SWIPER
new Swiper(".tripleSwiper", {
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
    0: {
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: false
    },
    490: {
      slidesPerView: 3,
      spaceBetween: 30,
      centeredSlides: true
    }
  }
});

// AOS
AOS.init({ duration: 1000, once: true });

// Dropdown Menu Media
const dropBtn = document.getElementById('mediaToggle');
const menuContent = document.getElementById('mediaMenu');
let isMenuOpen = false;

dropBtn.addEventListener('click', function (e) {
  e.stopPropagation();
  isMenuOpen = !isMenuOpen;
  menuContent.classList.toggle('show', isMenuOpen);
});

window.addEventListener('click', function (e) {
  if (!dropBtn.contains(e.target) && !menuContent.contains(e.target)) {
    menuContent.classList.remove('show');
    isMenuOpen = false;
  }
});

// Highlight Link Aktif
const allNavLinks = document.querySelectorAll('.navbar-nav a, .menu-content a');
const currentUrl = window.location.href;

allNavLinks.forEach(link => {
  const href = link.getAttribute('href');
  if (currentUrl.includes(href)) {
    link.classList.add('active');
  }
});

// Hamburger Menu
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

// Navbar blur saat scroll
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  navbar.classList.toggle('scrolled', window.scrollY > 1);
});


// Toggle dropdown Admin
const adminBtn = document.getElementById('adminToggle');
const adminMenu = document.getElementById('adminMenu');
let isAdminOpen = false;

adminBtn?.addEventListener('click', function (e) {
  e.stopPropagation();
  isAdminOpen = !isAdminOpen;
  adminMenu.classList.toggle('show', isAdminOpen);
});

window.addEventListener('click', function (e) {
  if (!adminBtn.contains(e.target) && !adminMenu.contains(e.target)) {
    adminMenu.classList.remove('show');
    isAdminOpen = false;
  }
});

