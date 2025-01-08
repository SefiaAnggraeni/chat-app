<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>caremal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->

  <link href="{{ asset('assets/img/logobulat.png') }}" rel="icon">

  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
 <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> <!-- ini untuk mengatur layout nya biar rapi -->
   <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet"><!-- ini ada icon nya -->
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> 


  <!-- Main CSS File -->
</head>

<style>
    :root {
  --default-font: "Roboto",  system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --heading-font: "Raleway",  sans-serif;
  --nav-font: "Poppins",  sans-serif;
}

/* Global Colors - The following color variables are used throughout the website. Updating them here will change the color scheme of the entire website */
:root { 
  --background-color: #ffffff; /* Background color for the entire website, including individual sections */
  --default-color: #7EBEF1; /* Default color used for the majority of the text content across the entire website */
  --heading-color: #7EBEF1; /* Color for headings, subheadings and title throughout the website */
  --accent-color: #0563bb; /* Accent color that represents your brand on the website. It's used for buttons, links, and other elements that need to stand out */
  --surface-color: #ffffff; /* The surface color is used as a background of boxed elements within sections, such as cards, icon boxes, or other elements that require a visual separation from the global background. */
  --contrast-color: #ffffff; /* Contrast color for text, ensuring readability against backgrounds of accent, heading, or default colors. */
}

/* Nav Menu Colors - The following color variables are used specifically for the navigation menu. They are separate from the global colors to allow for more customization options */
:root {
  --nav-color: #7EBEF1;  /* The default color of the main navmenu links */
  --nav-hover-color: rgba(126, 190, 241, 0.5);/* Applied to main navmenu links when they are hovered over or active */
  --nav-mobile-background-color: #ffffff; /* Used as the background color for mobile navigation menu */
  --nav-dropdown-background-color: #ffffff; /* Used as the background color for dropdown items that appear when hovering over primary navigation items */
  --nav-dropdown-color: #212529; /* Used for navigation links of the dropdown items in the navigation menu. */
  --nav-dropdown-hover-color: #0563bb; /* Similar to --nav-hover-color, this color is applied to dropdown navigation links when they are hovered over. */
  
}

/* Color Presets - These classes override global colors when applied to any section or element, providing reuse of the sam color scheme. */

.light-background {
  --background-color: #EDFDFB;
  --surface-color: #ffffff;
}

.dark-background {
  --background-color: #060606;
  --default-color: #ffffff;
  --heading-color: #ffffff;
  --surface-color: #252525;
  --contrast-color: #ffffff;
}

/* Smooth scroll */
:root {
  scroll-behavior: smooth;
}

/*--------------------------------------------------------------
# General Styling & Shared Classes
--------------------------------------------------------------*/
body {
  color: var(--default-color);
  background-color: var(--background-color);
  font-family: var(--default-font);
}

a {
  color: var(--accent-color);
  text-decoration: none;
  transition: 0.3s;
}

a:hover {
  color: color-mix(in srgb, var(--accent-color), transparent 25%);
  text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: var(--heading-color);
  font-family: var(--heading-font);
}

/* PHP Email Form Messages
------------------------------*/
.php-email-form .error-message {
  display: none;
  background: #7EBEF1;
  color: #ffffff;
  text-align: left;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.php-email-form .sent-message {
  display: none;
  color: #ffffff;
  background: #059652;
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
  font-weight: 600;
}

.php-email-form .loading {
  display: none;
  background: var(--surface-color);
  text-align: center;
  padding: 15px;
  margin-bottom: 24px;
}

.php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid var(--accent-color);
  border-top-color: var(--surface-color);
  animation: php-email-form-loading 1s linear infinite;
}

@keyframes php-email-form-loading {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Global Header
--------------------------------------------------------------*/
.header {
  color: var(--default-color);
  position: fixed;
  top: 0;
  left: 0;
  bottom: 0;
  padding: 0 15px;
  transition: all ease-in-out 0.3s;
  overflow-y: auto;
  z-index: 997;
  min-width: 200px;
}

@media (max-width: 1199px) {
  .header {
    background-color: var(--background-color);
    border-right: 1px solid color-mix(in srgb, var(--default-color), transparent 90%);
    width: 300px;
    left: -100%;
  }
}

@media (min-width: 1200px) and (max-width: 1600px) {
  .header~main {
    margin-left: 160px;
  }

  .header~main .hero {
    margin-left: -160px;
    width: 100vw;
  }
}

.header.header-show {
  left: 0;
}

.header .header-toggle {
  color: var(--contrast-color);
  background-color: var(--accent-color);
  font-size: 22px;
  display: flex;
  align-items: center;
  justify-content: center;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  cursor: pointer;
  position: fixed;
  top: 15px;
  right: 15px;
  z-index: 9999;
  transition: background-color 0.3s;
}

.header .header-toggle:hover {
  color: var(--contrast-color);
  background-color: color-mix(in srgb, var(--accent-color) 90%, white 15%);
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
.navmenu {
  padding: 0;
  z-index: 9997;
}

.navmenu ul {
  list-style: none;
  padding: 0 0 20px 0;
  margin: 0;
  width: 140px;
}

.navmenu a,
.navmenu a:focus {
  color: var(--nav-color);
  font-family: var(--nav-font);
  display: flex;
  align-items: center;
  padding: 10px 18px;
  margin-bottom: 30px;
  font-size: 14px;
  border-radius: 15px;
  background: #FFFFFF; 
  height: 50px;
  width: 100%;
  overflow: hidden;
  transition: 0.3s;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);  

}

.navmenu a i,
.navmenu a:focus i {
  font-size: 20px;
}

.navmenu a span,
.navmenu a:focus span {
  padding: 0 5px 0 7px;
}

@media (min-width: 992px) {

  .navmenu a,
  .navmenu a:focus {
    max-width: 56px;
  }

  .navmenu a span,
  .navmenu a:focus span {
    display: none;
  }
}

.navmenu a:hover,
.navmenu .active,
.navmenu .active:focus,
.navmenu li:hover>a {
  color: var(--contrast-color);
  background: var(--nav-hover-color);
}

.navmenu a:hover,
.navmenu li:hover>a {
  max-width: 100%;
  color: var(--contrast-color);
}

.navmenu a:hover span,
.navmenu li:hover>a span {
  display: block;
}



/*--------------------------------------------------------------
# Disable aos animation delay on mobile devices
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Global Page Titles & Breadcrumbs
--------------------------------------------------------------*/
.page-title {
  --background-color: color-mix(in srgb, var(--default-color), transparent 96%);
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 20px 0;
  position: relative;
}

.page-title h1 {
  font-size: 28px;
  font-weight: 700;
  margin: 0;
}

.page-title .breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0 0 10px 0;
  margin: 0;
  font-size: 14px;
  font-weight: 400;
}

.page-title .breadcrumbs ol li+li {
  padding-left: 10px;
}

.page-title .breadcrumbs ol li+li::before {
  content: "/";
  display: inline-block;
  padding-right: 10px;
  color: color-mix(in srgb, var(--default-color), transparent 70%);
}

/*--------------------------------------------------------------
# Global Sections
--------------------------------------------------------------*/
section,
.section {
  color: var(--default-color);
  background-color: var(--background-color);
  padding: 60px 0;
  overflow: clip;
}

/*--------------------------------------------------------------
# Global Section Titles
--------------------------------------------------------------*/
.section-title {
  text-align: center;
  padding-bottom: 60px;
  position: relative;
}

.section-title h2 {
  font-size: 32px;
  font-weight: 700;
  margin-bottom: 20px;
  padding-bottom: 20px;
  position: relative;
}

.section-title h2:before {
  content: "";
  position: absolute;
  display: block;
  width: 160px;
  height: 1px;
  background: color-mix(in srgb, var(--default-color), transparent 60%);
  left: 0;
  right: 0;
  bottom: 1px;
  margin: auto;
}

.section-title h2::after {
  content: "";
  position: absolute;
  display: block;
  width: 60px;
  height: 3px;
  background: var(--accent-color);
  left: 0;
  right: 0;
  bottom: 0;
  margin: auto;
}

.section-title p {
  margin-bottom: 0;
}



* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        .navbar {
          position: fixed; /* Membuat navbar tetap berada di bagian atas */
          top: 0; /* Posisi di bagian atas halaman */
          left: 0; /* Mulai dari kiri halaman */
          width: 100%; /* Membuat navbar selebar halaman */
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 20px;
            background-color: #EDFDFB;
        }
        body {
    padding-top: 30px; /* Sesuaikan dengan tinggi navbar */
    padding-left: 100px;
    padding-right: 20px;
    background-color: #EDFDFB;
}

 .table thead th {
  background-color: #7EBEF1 !important;
  color: #fff !important;
  
  
}

        .navbar-left {
            display: flex;
            align-items: center;
        }

        .logo {
            width: 200px;
            height: 55px;
           
        }
          .profil {
            width: 50px; /* Ukuran gambar */
            height: 50px; /* Ukuran gambar */
            border-radius: 50%; /* Jika ingin gambar berbentuk lingkaran */
            margin-right: 10px; /* Jarak antara gambar dan teks */
            vertical-align: middle; /* Menjaga gambar sejajar dengan teks */
        }

        /* .brand-name {
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
            color: #333;
        } */

        .navbar-right {
            display: flex;
            align-items: center;
        }

        .user-greeting {
            margin-right: 15px;
            font-size: 16px;
            color: #333;
        }

        .language-switch {
            text-decoration: none;
            font-size: 14px;
            color: #7EBEF1;
            border-left: 1px solid #ccc;
            padding-left: 10px;
        }

        .language-switch:hover {
            text-decoration: underline;
        }


        /* button */
        .btn-custom {
  border-radius: 15px; /* Membuat tombol menjadi lonjong */
  padding: 10px 20px; /* Mengatur padding agar tombol lebih besar */
  font-size: 16px;/* Menyesuaikan ukuran teks tombol */
   background-color: #7EBEF1; /* Warna latar belakang tombol 'Ubah' */
  color: #fff; /* Warna teks tombol */
}




  </style>
  
<body class="index-page">
 

  

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section light-background">

      <div class="container" data-aos="zoom-out">
        

        
          @yield('sidebar')
      
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    
   
    

    <!-- Resume Section -->
    

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/typed.js/typed.umd.js') }}"></script>
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


  <!-- Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>