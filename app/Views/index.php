<?= $this->extend('layout') ?>
<?= $this->section('content') ?>

<!-- Hero Section -->
    <section id="hero" class="hero section">
  <div class="container-fluid hero-container" data-aos="fade-up">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 content-col">
        <div class="content-wrapper">
          <div class="status-badge">Reservasi Dibuka</div>
          <h2>Nikmati Hidangan Istimewa, Ciptakan Momen Tak Terlupakan</h2>
          <p>Selami cita rasa istimewa dalam suasana elegan. Rasakan pengalaman bersantap yang dirancang dengan ketelitian dan penuh cinta dari para chef terbaik kami.</p>

          <div class="opening-hours" data-aos="fade-up" data-aos-delay="500">
            <i class="bi bi-clock"></i>
            <span>Buka Setiap Hari: 11.00 - 22.00</span>
          </div>

          <div class="btn-group">
            <a href="#book-a-table" class="btn btn-book">Reservasi Meja</a>
            <a href="#menu" class="btn btn-menu">Lihat Menu Kami</a>
          </div>

          <div class="social-links">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-6 swiper-col">
        <div class="swiper hero-swiper init-swiper" data-aos="zoom-out" data-aos-delay="100">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "effect": "fade",
              "slidesPerView": 1,
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="img-container">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/misc-square-1.webp" alt="Suasana Restoran Elegan">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="img-container">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/misc-square-2.webp" alt="Hidangan Andalan Kami">
              </div>
            </div>
            <div class="swiper-slide">
              <div class="img-container">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/misc-square-3.webp" alt="Chef Profesional Kami">
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section><!-- /Hero Section -->
<!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row align-items-center gy-4">
      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content">
          <h3>Perjalanan Kuliner Kami</h3>
          <p class="fst-italic">Sejak tahun 2005, kami telah menyajikan pengalaman bersantap tak terlupakan dengan rasa yang autentik dan pelayanan terbaik.</p>
          <p>NiceRestaurant lahir dari semangat untuk menciptakan tempat makan yang tak hanya memuaskan selera, tetapi juga menyentuh hati. Dengan menggabungkan cita rasa lokal dan teknik kuliner internasional, kami menghadirkan harmoni dalam setiap sajian.</p>

          <div class="chef-signature mt-4">
            <div class="row align-items-center">
              <div class="col-auto">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/chef-1.webp" class="chef-avatar rounded-circle" alt="Chef Portrait">
              </div>
              <div class="col">
                <p class="chef-message mb-2">"Memasak adalah bahasa yang mengekspresikan harmoni, kreativitas, kebahagiaan, keindahan, dan budaya dalam satu sajian."</p>
                <p class="chef-name">Executive Chef</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="300">
        <div class="about-image-wrapper">
          <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/showcase-4.webp" class="img-fluid main-image shadow" alt="Interior Restoran Mewah">
          <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/showcase-2.webp" class="img-fluid accent-image shadow" alt="Chef Profesional Sedang Memasak">
          <span class="establishment-year d-flex align-items-center justify-content-center text-center">Est. 2005</span>
        </div>
      </div>
    </div>

    <div class="row mt-5 pt-4 features-section">
      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-award"></i>
          </div>
          <h4>Penghargaan Bergengsi</h4>
          <p>Diakui secara nasional atas inovasi dan kualitas luar biasa dalam dunia kuliner.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-egg-fried"></i>
          </div>
          <h4>Bahan Segar Pilihan</h4>
          <p>Kami hanya menggunakan bahan berkualitas tinggi yang dipilih langsung setiap harinya.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-people"></i>
          </div>
          <h4>Tim Profesional</h4>
          <p>Chef berpengalaman dan staf yang berdedikasi menghadirkan layanan terbaik untuk Anda.</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
        <div class="feature-box">
          <div class="feature-icon">
            <i class="bi bi-heart"></i>
          </div>
          <h4>Dimasak dengan Cinta</h4>
          <p>Setiap hidangan kami disiapkan dengan sepenuh hati, menciptakan momen yang berkesan.</p>
        </div>
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
        <div class="stats-container">
          <div class="stat-item">
            <span class="stat-number">
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="0" class="purecounter">15</span>+
            </span>
            <p class="stat-label">Tahun Pengalaman</p>
          </div>

          <div class="stat-item">
            <span class="stat-number">
              <span data-purecounter-start="0" data-purecounter-end="5" data-purecounter-duration="0" class="purecounter">5</span>
            </span>
            <p class="stat-label">Chef Profesional</p>
          </div>

          <div class="stat-item">
            <span class="stat-number">
              <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="0" class="purecounter">3</span>
            </span>
            <p class="stat-label">Penghargaan Kuliner</p>
          </div>

          <div class="stat-item">
            <span class="stat-number">
              <span data-purecounter-start="0" data-purecounter-end="15000" data-purecounter-duration="0" class="purecounter">15000</span>+
            </span>
            <p class="stat-label">Pelanggan Bahagia</p>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>


           
    <!-- Menu Section -->
    <section id="menu" class="menu section">

  <!-- Judul Section -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>Nikmati berbagai hidangan lezat khas restoran kami</p>
  </div>

  <div class="container" data-aos="fade-up">

    <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

      <div class="menu-filters isotope-filters mb-5">
        <ul>
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-starters">Pembuka</li>
          <li data-filter=".filter-main">Menu Utama</li>
          <li data-filter=".filter-dessert">Makanan Penutup</li>
          <li data-filter=".filter-drinks">Minuman</li>
        </ul>
      </div>

      <div class="menu-container isotope-container row gy-4">

        <!-- Menu Pembuka -->
        <div class="col-lg-6 isotope-item filter-starters">
          <div class="menu-item d-flex align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/starter-2.webp" alt="Starter" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Bruschetta Trio <span class="menu-tag">Vegetarian</span></h5>
              <p>Roti panggang dengan topping tomat segar dan keju.</p>
              <div class="price">Rp 135.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-starters">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/starter-5.webp" alt="Starter" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Calamari Fritti <span class="menu-tag">Seafood</span></h5>
              <p>Cumi goreng renyah disajikan dengan saus tartar.</p>
              <div class="price">Rp 165.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-main">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/main-1.webp" alt="Main Course" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Wild Mushroom Risotto <span class="menu-tag">Vegetarian</span></h5>
              <p>Risotto lembut dengan jamur hutan dan krim keju.</p>
              <div class="price">Rp 285.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-main">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/main-4.webp" alt="Main Course" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Braised Lamb Shank <span class="menu-tag">Pilihan Chef</span></h5>
              <p>Daging domba empuk dimasak perlahan dengan bumbu khas.</p>
              <div class="price">Rp 405.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-dessert">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/dessert-2.webp" alt="Dessert" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Chocolate Lava Cake <span class="menu-tag">Bebas Gluten</span></h5>
              <p>Kue cokelat hangat dengan lelehan cokelat di dalamnya.</p>
              <div class="price">Rp 145.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-dessert">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/dessert-7.webp" alt="Dessert" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Tiramisu <span class="menu-tag">Klasik</span></h5>
              <p>Makanan penutup kopi khas Italia dengan krim keju mascarpone.</p>
              <div class="price">Rp 135.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-drinks">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/drink-3.webp" alt="Drink" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Signature Cocktail <span class="menu-tag">Beralkohol</span></h5>
              <p>Minuman campuran premium dengan rasa menyegarkan.</p>
              <div class="price">Rp 190.000</div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 isotope-item filter-drinks">
          <div class="d-flex menu-item align-items-center gap-4">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/drink-8.webp" alt="Drink" class="menu-img img-fluid rounded-3">
            <div class="menu-content">
              <h5>Berry Smoothie <span class="menu-tag">Non-Alkohol</span></h5>
              <p>Campuran buah berry segar dan yogurt rendah lemak.</p>
              <div class="price">Rp 115.000</div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class="text-center mt-4">
    <a href="<?= base_url('/menu') ?>" class="btn-book-table">
      <i class="bi bi-basket-fill me-2"></i> Pesan Sekarang
    </a>
 

    <!-- Spesial Chef -->
    <div class="col-12 mt-5" data-aos="fade-up">
      <div class="specials-badge">
        <span><i class="bi bi-award"></i> Spesial Chef</span>
      </div>
      <div class="specials-container">
        <div class="row g-4">
          <div class="col-md-6">
            <div class="menu-item special-item">
              <div class="menu-item-img">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/main-3.webp" alt="Hidangan Spesial" class="img-fluid">
                <div class="menu-item-badges">
                  <span class="badge-special">Spesial</span>
                  <span class="badge-vegan">Vegan</span>
                </div>
              </div>
              <div class="menu-item-content">
                <h4>Salmon Panggang Mediterania</h4>
                <p>Salmon segar dipanggang dengan rempah khas Mediterania.</p>
                <div class="menu-item-price">Rp 375.000</div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="menu-item special-item">
              <div class="menu-item-img">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/main-7.webp" alt="Hidangan Spesial" class="img-fluid">
                <div class="menu-item-badges">
                  <span class="badge-special">Spesial</span>
                  <span class="badge-spicy">Pedas</span>
                </div>
              </div>
              <div class="menu-item-content">
                <h4>Signature Ribeye Steak</h4>
                <p>Daging sapi pilihan dimasak sempurna dengan saus steak spesial.</p>
                <div class="menu-item-price">Rp 495.000</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>

<!-- /Menu Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

  <!-- Judul Bagian -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimoni</h2>
    <p>Ulasan jujur dari pelanggan setia kami yang telah menikmati pengalaman kuliner luar biasa</p>
  </div><!-- Akhir Judul Bagian -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 1
            }
          }
        }
      </script>
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Makanan di sini luar biasa! Pelayanannya cepat dan staf sangat ramah. Saya pasti akan kembali lagi bersama keluarga saya.
            </p>
            <div class="profile mt-auto">
              <img src="<?= base_url()?>NiceRestaurant/assets/img/person/person-m-9.webp" class="testimonial-img" alt="">
              <h3>Saul Goodman</h3>
              <h4>CEO & Pendiri</h4>
            </div>
          </div>
        </div><!-- Akhir item testimoni -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Tempat yang sempurna untuk makan malam romantis. Hidangannya lezat dan suasananya sangat nyaman. Sungguh pengalaman yang tak terlupakan.
            </p>
            <div class="profile mt-auto">
              <img src="<?= base_url()?>NiceRestaurant/assets/img/person/person-f-5.webp" class="testimonial-img" alt="">
              <h3>Sara Wilsson</h3>
              <h4>Desainer</h4>
            </div>
          </div>
        </div><!-- Akhir item testimoni -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Saya sangat menyukai variasi menunya. Semua bahan terasa segar dan dimasak dengan cinta. Sangat direkomendasikan!
            </p>
            <div class="profile mt-auto">
              <img src="<?= base_url()?>NiceRestaurant/assets/img/person/person-f-12.webp" class="testimonial-img" alt="">
              <h3>Jena Karlis</h3>
              <h4>Pemilik Toko</h4>
            </div>
          </div>
        </div><!-- Akhir item testimoni -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Dari makanan pembuka hingga hidangan penutup, semuanya terasa istimewa. Tempat ini benar-benar mengangkat pengalaman bersantap saya.
            </p>
            <div class="profile mt-auto">
              <img src="<?= base_url()?>NiceRestaurant/assets/img/person/person-m-12.webp" class="testimonial-img" alt="">
              <h3>Matt Brandon</h3>
              <h4>Pekerja Lepas</h4>
            </div>
          </div>
        </div><!-- Akhir item testimoni -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <div class="stars">
              <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
            </div>
            <p>
              Layanan pelanggan yang luar biasa, interior restoran yang elegan, dan rasa makanan yang autentik. Saya akan merekomendasikan ini ke semua teman saya.
            </p>
            <div class="profile mt-auto">
              <img src="<?= base_url()?>NiceRestaurant/assets/img/person/person-m-13.webp" class="testimonial-img" alt="">
              <h3>John Larson</h3>
              <h4>Wirausahawan</h4>
            </div>
          </div>
        </div><!-- Akhir item testimoni -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section>
<!-- /Testimonials Section -->

    <!-- Chefs Section -->
    <section id="chefs" class="chefs section">

  <!-- Judul Bagian -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Koki Kami</h2>
    <p>Kumpulan chef profesional yang berdedikasi dalam menciptakan pengalaman kuliner terbaik untuk Anda</p>
  </div><!-- Akhir Judul Bagian -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-5">
        <div class="chef-highlight" data-aos="fade-right" data-aos-delay="200">
          <figure class="chef-image">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/chef-1.webp" class="img-fluid" alt="Kepala Koki">
          </figure>
          <div class="chef-details">
            <h3>Kepala Koki Eksekutif</h3>
            <h2>Gabriel Turner</h2>
            <div class="chef-awards">
              <span><i class="bi bi-star-fill"></i> Penghargaan James Beard</span>
              <span><i class="bi bi-star-fill"></i> Dua Bintang Michelin</span>
            </div>
            <p>Gabriel merupakan koki berpengalaman yang telah memenangkan berbagai penghargaan bergengsi. Ia memadukan teknik kuliner klasik dengan sentuhan modern yang unik, menciptakan hidangan yang tak hanya lezat tetapi juga artistik.</p>
            <div class="chef-signature">
              <img src="<?= base_url()?>NiceRestaurant/assets/img/misc/signature-1.webp" alt="Tanda Tangan Chef">
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <div class="team-container" data-aos="fade-left" data-aos-delay="300">
          <div class="row g-4">
            <div class="col-md-6">
              <div class="chef-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="chef-img">
                  <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/chef-2.webp" class="img-fluid" alt="Potret Chef">
                  <div class="social-links">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                  </div>
                </div>
                <div class="chef-info">
                  <h4>Sophia Martinez</h4>
                  <p class="role">Koki Pastry</p>
                  <p class="details">Ahli dalam menciptakan hidangan penutup elegan dengan rasa dan tampilan luar biasa. Setiap kreasinya selalu memikat para tamu.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="chef-card" data-aos="zoom-in" data-aos-delay="250">
                <div class="chef-img">
                  <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/chef-3.webp" class="img-fluid" alt="Potret Chef">
                  <div class="social-links">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                  </div>
                </div>
                <div class="chef-info">
                  <h4>Marcus Chen</h4>
                  <p class="role">Sous Chef</p>
                  <p class="details">Tangan kanan koki utama yang memastikan setiap proses masak berjalan sempurna. Terkenal akan keahliannya dalam teknik memasak Asia modern.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="chef-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="chef-img">
                  <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/chef-4.webp" class="img-fluid" alt="Potret Chef">
                  <div class="social-links">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                  </div>
                </div>
                <div class="chef-info">
                  <h4>Jonathan Williams</h4>
                  <p class="role">Kepala Bar</p>
                  <p class="details">Ahli dalam meracik minuman premium dan menciptakan suasana menyenangkan di area bar. Inovatif dan selalu mengejutkan tamu dengan kreasi barunya.</p>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="chef-card" data-aos="zoom-in" data-aos-delay="350">
                <div class="chef-img">
                  <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/chef-5.webp" class="img-fluid" alt="Potret Chef">
                  <div class="social-links">
                    <a href="#"><i class="bi bi-instagram"></i></a>
                    <a href="#"><i class="bi bi-twitter-x"></i></a>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                  </div>
                </div>
                <div class="chef-info">
                  <h4>Isabella Romano</h4>
                  <p class="role">Ahli Panggangan</p>
                  <p class="details">Pakar dalam memanggang dengan teknik yang menghasilkan rasa otentik dan tekstur yang sempurna. Dikenal karena keahlian dalam BBQ dan steak premium.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Chefs Section -->

    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row gy-5 mb-5">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="reservation-info">
          <div class="text-content">
            <h3>Reservasi Meja</h3>
            <p>Silakan lakukan reservasi untuk menikmati hidangan spesial kami. Pengalaman makan terbaik menanti Anda di restoran kami di pusat Kota Semarang.</p>

            <div class="reservation-details mt-4">
              <div class="detail-item">
                <i class="bi bi-clock"></i>
                <div>
                  <h5>Jam Buka</h5>
                  <p>Senin - Jumat: 11:00 - 23:00<br>
                    Sabtu - Minggu: 10:00 - 00:00</p>
                </div>
              </div>

              <div class="detail-item">
                <i class="bi bi-geo-alt"></i>
                <div>
                  <h5>Lokasi</h5>
                  <p>Jl. Pandanaran No. 123<br>
                    Semarang, Jawa Tengah 50241</p>
                </div>
              </div>

              <div class="detail-item">
                <i class="bi bi-telephone"></i>
                <div>
                  <h5>Hubungi Kami</h5>
                  <p>+62 812 3456 7890</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
        <div class="reservation-image">
          <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/showcase-7.webp" alt="Interior Restoran" class="img-fluid rounded">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12" data-aos="fade-up" data-aos-delay="400">
        <div class="reservation-form-wrapper">
          <div class="form-header">
            <h3>Formulir Reservasi</h3>
            <p>Silakan isi formulir berikut untuk melakukan pemesanan</p>
          </div>

          <form action="forms/book-a-table.php" method="post" role="form" class="php-email-form mt-4">
            <div class="row gy-4">
              <div class="col-lg-4 form-group">
                <input type="text" name="name" class="form-control" placeholder="Nama Anda" required="">
              </div>
              <div class="col-lg-4 form-group">
                <input type="email" class="form-control" name="email" placeholder="Email Anda" required="">
              </div>
              <div class="col-lg-4 form-group">
                <input type="text" class="form-control" name="phone" placeholder="Nomor Telepon" required="">
              </div>
              <div class="col-lg-4 form-group">
                <select name="people" class="form-select" required="">
                  <option value="">Jumlah Tamu</option>
                  <option value="1">1 Orang</option>
                  <option value="2">2 Orang</option>
                  <option value="3">3 Orang</option>
                  <option value="4">4 Orang</option>
                  <option value="5">5 Orang</option>
                  <option value="6">6+ Orang</option>
                </select>
              </div>
              <div class="col-lg-4 form-group">
                <input type="date" name="date" class="form-control" required="">
              </div>
              <div class="col-lg-4 form-group">
                <input type="time" class="form-control" name="time" id="time" required="">
              </div>

              <div class="form-group mt-4">
                <textarea class="form-control" name="message" rows="3" placeholder="Permintaan Khusus (Opsional)"></textarea>
              </div>
            </div>

            <div class="my-3">
              <div class="loading">Memuat...</div>
              <div class="error-message"></div>
              <div class="sent-message">Permintaan reservasi Anda telah dikirim. Kami akan menghubungi Anda kembali melalui telepon atau email untuk konfirmasi. Terima kasih!</div>
            </div>

            <div class="text-center mt-4">
              <button type="submit" class="btn-book-table">Pesan Sekarang</button>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

</section>

<!-- /Book A Table Section -->

    <!-- Location Section -->
    <section id="location" class="location section">

  <!-- Judul Bagian -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Lokasi</h2>
    <p>Kunjungi restoran kami di pusat kota Semarang untuk pengalaman kuliner terbaik</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row g-4">
      <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
        <div class="map-container">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.538930307348!2d110.4179147741181!3d-7.837404377168023!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4dbabc93a3%3A0x555b2b76b5760bb2!2sKota%20Semarang%2C%20Jawa%20Tengah!5e0!3m2!1sid!2sid!4v1654321234567!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
        <div class="info-container">
          <div class="section-header">
            <h2>Temukan Kami</h2>
            <p>Kunjungi Hari Ini</p>
          </div>

          <div class="info-card" data-aos="fade-up" data-aos-delay="300">
            <div class="info-icon">
              <i class="bi bi-geo-alt"></i>
            </div>
            <div class="info-content">
              <h3>Alamat</h3>
              <p>Jl. Pemuda No.123, Semarang Tengah, Semarang, Jawa Tengah 50132</p>
            </div>
          </div>

          <div class="info-card" data-aos="fade-up" data-aos-delay="400">
            <div class="info-icon">
              <i class="bi bi-telephone"></i>
            </div>
            <div class="info-content">
              <h3>Reservasi</h3>
              <p>+62 24 1234 5678</p>
              <p class="small-text">Disarankan untuk melakukan reservasi minimal 1 hari sebelumnya</p>
            </div>
          </div>

          <div class="info-card" data-aos="fade-up" data-aos-delay="500">
            <div class="info-icon">
              <i class="bi bi-clock"></i>
            </div>
            <div class="info-content">
              <h3>Jam Operasional</h3>
              <div class="hours-grid">
                <div class="day">Senin - Kamis</div>
                <div class="time">11:00 - 22:00</div>

                <div class="day">Jumat - Sabtu</div>
                <div class="time">11:00 - 23:30</div>

                <div class="day">Minggu</div>
                <div class="time">10:00 - 21:00</div>

                <div class="day">Jam Brunch</div>
                <div class="time">Sabtu &amp; Minggu, 10:00 - 14:00</div>
              </div>
            </div>
          </div>

          <div class="cta-wrapper" data-aos="fade-up" data-aos-delay="600">
            <a href="#book-a-table" class="btn-book">Reservasi Sekarang</a>
            <a href="#contact" class="btn-contact">Hubungi Kami</a>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Location Section -->

    <!-- Events Section -->
    <section id="events" class="events section">

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="intro-text text-center mb-5" data-aos="fade-up" data-aos-delay="150">
      <h2>Ciptakan Momen Tak Terlupakan</h2>
      <p>Jadikan setiap acara lebih berkesan bersama kami. Dari pernikahan hingga pertemuan bisnis, kami siap membantu Anda mewujudkan suasana yang sempurna di jantung kota Semarang.</p>
    </div>

    <div class="event-types">
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="event-type-card">
            <div class="icon-wrapper">
              <i class="bi bi-calendar-heart"></i>
            </div>
            <h3>Pernikahan & Perayaan</h3>
            <p>Rayakan momen istimewa Anda dengan suasana elegan dan pelayanan terbaik dari tim kami.</p>
            <span class="capacity">Hingga 150 tamu</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
          <div class="event-type-card">
            <div class="icon-wrapper">
              <i class="bi bi-building"></i>
            </div>
            <h3>Acara Korporat</h3>
            <p>Fasilitas lengkap dan nyaman untuk meeting, pelatihan, dan jamuan makan bersama kolega bisnis Anda.</p>
            <span class="capacity">Hingga 100 tamu</span>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="event-type-card">
            <div class="icon-wrapper">
              <i class="bi bi-people"></i>
            </div>
            <h3>Acara Pribadi</h3>
            <p>Cocok untuk ulang tahun, reuni, atau acara keluarga dengan suasana yang nyaman dan privat.</p>
            <span class="capacity">Hingga 50 tamu</span>
          </div>
        </div>
      </div>
    </div>

    <div class="gallery-showcase" data-aos="fade-up" data-aos-delay="150">
      <div class="row g-3">
        <div class="col-lg-8">
          <div class="main-image" data-aos="zoom-in" data-aos-delay="200">
            <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/event-1.webp" alt="Ruang Acara" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="row g-3">
            <div class="col-lg-12 col-md-6">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/event-5.webp" alt="Galeri Acara" class="img-fluid">
              </div>
            </div>
            <div class="col-lg-12 col-md-6">
              <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/event-7.webp" alt="Galeri Acara" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="event-cta" data-aos="fade-up" data-aos-delay="200">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h3>Siap mengadakan acara spesial Anda?</h3>
          <p>Hubungi tim kami hari ini untuk merencanakan acara impian Anda dengan layanan profesional dan lokasi strategis di Semarang.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="#book-a-table" class="btn-reserve">Reservasi Tempat</a>
        </div>
      </div>
    </div>

    <div class="featured-events" data-aos="fade-up" data-aos-delay="200">
      <h3>Acara Unggulan Mendatang</h3>

      <div class="row g-4">
        <div class="col-lg-6 col-md-6">
          <div class="featured-event-card" data-aos="fade-up" data-aos-delay="250">
            <div class="event-date">
              <span class="month">Jul</span>
              <span class="day">12</span>
            </div>
            <div class="event-content">
              <div class="event-image">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/event-3.webp" alt="Festival Kuliner Semarang" class="img-fluid">
              </div>
              <div class="event-info">
                <h4>Festival Kuliner Semarang</h4>
                <ul class="event-meta">
                  <li><i class="bi bi-clock"></i> 18.00 - 22.00 WIB</li>
                  <li><i class="bi bi-geo-alt"></i> Teras Taman Belakang</li>
                </ul>
                <p>Rasakan berbagai hidangan khas Semarang dan sajian internasional dalam satu malam istimewa.</p>
                <a href="#" class="btn-details">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="featured-event-card" data-aos="fade-up" data-aos-delay="300">
            <div class="event-date">
              <span class="month">Agu</span>
              <span class="day">09</span>
            </div>
            <div class="event-content">
              <div class="event-image">
                <img src="<?= base_url()?>NiceRestaurant/assets/img/restaurant/event-8.webp" alt="Malam Cicip Rasa" class="img-fluid">
              </div>
              <div class="event-info">
                <h4>Malam Cicip Rasa</h4>
                <ul class="event-meta">
                  <li><i class="bi bi-clock"></i> 19.30 - 23.00 WIB</li>
                  <li><i class="bi bi-geo-alt"></i> Ruang Utama</li>
                </ul>
                <p>Acara khusus dengan menu degustasi dari chef kami. Eksklusif hanya untuk 30 tamu terpilih.</p>
                <a href="#" class="btn-details">Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Events Section -->

    <!-- Contact Section -->
   <section id="contact" class="contact section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Kontak Kami</h2>
    <p>Hubungi kami untuk reservasi, pertanyaan, atau informasi lebih lanjut mengenai layanan dan fasilitas kami di Semarang.</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <!-- Contact Info Boxes -->
    <div class="row gy-4 mb-5">
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="contact-info-box">
          <div class="icon-box">
            <i class="bi bi-geo-alt"></i>
          </div>
          <div class="info-content">
            <h4>Alamat Kami</h4>
            <p>Jl. Pandanaran No. 123, Semarang, Jawa Tengah 50241</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="contact-info-box">
          <div class="icon-box">
            <i class="bi bi-envelope"></i>
          </div>
          <div class="info-content">
            <h4>Email</h4>
            <p>info@restosemarang.com</p>
            <p>reservasi@restosemarang.com</p>
          </div>
        </div>
      </div>

      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="contact-info-box">
          <div class="icon-box">
            <i class="bi bi-headset"></i>
          </div>
          <div class="info-content">
            <h4>Jam Operasional</h4>
            <p>Senin - Jumat: 10.00 - 22.00 WIB</p>
            <p>Sabtu - Minggu: 09.00 - 23.00 WIB</p>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Google Maps (Full Width) -->
  <div class="map-section" data-aos="fade-up" data-aos-delay="200">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.7362110521754!2d110.40903671433124!3d-7.820798779687386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b5e925c0e7b%3A0x5b77f104d00d4b1!2sJl.%20Pandanaran%2C%20Semarang!5e0!3m2!1sen!2sid!4v1719587230000!5m2!1sen!2sid" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <!-- Contact Form Section (Overlapping) -->
  <div class="container form-container-overlap">
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
      <div class="col-lg-10">
        <div class="contact-form-wrapper">
          <h2 class="text-center mb-4">Hubungi Kami</h2>

          <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row g-3">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-person"></i>
                    <input type="text" class="form-control" name="name" placeholder="Nama Lengkap" required="">
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-envelope"></i>
                    <input type="email" class="form-control" name="email" placeholder="Alamat Email" required="">
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-text-left"></i>
                    <input type="text" class="form-control" name="subject" placeholder="Subjek Pesan" required="">
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="form-group">
                  <div class="input-with-icon">
                    <i class="bi bi-chat-dots message-icon"></i>
                    <textarea class="form-control" name="message" placeholder="Tulis pesan Anda di sini..." style="height: 180px" required=""></textarea>
                  </div>
                </div>
              </div>

              <div class="col-12">
                <div class="loading">Memuat...</div>
                <div class="error-message"></div>
                <div class="sent-message">Pesan Anda telah terkirim. Terima kasih!</div>
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary btn-submit">KIRIM PESAN</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>

</section>
<!-- /Contact Section -->
<?= $this->endSection() ?>