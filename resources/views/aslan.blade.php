<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Agaslagan</title>
    <link rel="icon" type="image/x-icon" href="img/grid.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">Agas<span>lagan</span></a>

      <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <!--<a href="#menu">Service</a>-->
        <a href="#contact">Contact</a>
      </div>

      <div class="navbar-extra">
        <!--<a href="#" id="search"><i data-feather="search"></i></a>-->
        <!--<a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>-->
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
    </nav>

    <section class="hero" id="home">
      <main class="content">
        <h1>Aslan!<br /><span>Apa Kabar?</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        <a href="https://vt.tiktok.com/ZS8P25XkF/" class="cta">Tonton</a>
      </main>
    </section>

    <section class="about" id="about">
      <h2>About</h2>
      <div class="row">
        <div class="about-img">
          <img src="img/header-bg7.jpg" alt="Tentang Kami" />
        </div>
        <div class="content">
          <h3>Tentang Aslan</h3>
          <p>
            Aslan adalah kucing yang bulunya bercorak hitam dan paling banyak bulu warna putih, ia mati tanggal 3 Februari tahun 2023 dan ia adalah kucing yang paling nurut dia paling suka bermain main dengan tali , ia kalau mau makan ia pasti akan menggangu, dan semenjak ia mati jadi tidak ada yang menggangguku lagi
          </p>
        </div>
      </div>
    </section>

    <!--<section class="menu" id="menu">
      <h2>Service</h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius nemo enim
        impedit ipsum hic rem!
      </p>

      <div class="row">
        <div class="menu-card">
          <img src="imgjdslad/menu/p1.png" alt="MobileApp" class="menu-card-img" />
          <h3 class="menu-card-title">- Mobile App -</h3>
          <p class="menu-card-proce">IDR 150.000</p>
        </div>
        <div class="menu-card">
          <img src="imgjdslad/menu/p2.png" alt="MobileApp" class="menu-card-img" />
          <h3 class="menu-card-title">- Web Development -</h3>
          <p class="menu-card-proce">IDR 150.000</p>
        </div>
        <div class="menu-card">
          <img src="imgjdslad/menu/p3.png" alt="MobileApp" class="menu-card-img" />
          <h3 class="menu-card-title">- Design -</h3>
          <p class="menu-card-proce">IDR 150.000</p>
        </div>
        <div class="menu-card">
          <img src="imgjdslad/menu/p4.png" alt="MobileApp" class="menu-card-img" />
          <h3 class="menu-card-title">- Document -</h3>
          <p class="menu-card-proce">IDR 150.000</p>
        </div>
        <div class="menu-card">
          <img src="imgjdslad/menu/p5.png" alt="MobileApp" class="menu-card-img" />
          <h3 class="menu-card-title">- Digital Marketing -</h3>
          <p class="menu-card-proce">IDR 150.000</p>
        </div>
      </div>
    </section>-->

    <section class="contact" id="contact">
      <h2>Contact</h2>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem maxime
        asperiores reiciendis nam fugiat? Illo.
      </p>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.3805546830977!2d106.90408609999999!3d-6.473386900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c00f038aff45%3A0x5b1adaf2ce34c3e0!2sJl.%20Kp.%20Pasir%20Tangkil%2C%20Bantar%20Jati%2C%20Kec.%20Klapanunggal%2C%20Kabupaten%20Bogor%2C%20Jawa%20Barat%2016710!5e0!3m2!1sid!2sid!4v1674688599046!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="maps"
        ></iframe>

        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="Nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="Email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="No HP" />
          </div>
          <button type="submit" class="btn">Kirim Pesan</button>
        </form>
      </div>
    </section>
    <footer>
      <div class="socials">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <!--<a href="#menu">Service</a>-->
        <a href="#contact">Contact</a>
      </div>
      <div class="credit">
        <p>Created by <a href="#">MRM</a> | &copy;2023</p>
      </div>
    </footer>
    <script>
      feather.replace();
    </script>

    <!--Javascript-->
    <script src="js/script.js"></script>
  </body>
</html>
