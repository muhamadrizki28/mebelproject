<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mebel</title>
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../assets/responsive.css">
    <!-- FA 6 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />
    <!-- icon title -->
    <link rel="icon" href="../assets/img/icon/icon-react.png" /> <!-- Bisa diubah icon anda -->
    
    <!-- animated scroll -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  </head>
  <body id="body" data-spy="scroll">
    <header>
      <section>
        <nav class="nav-box">
          <div class="logo" >
            <!-- <img src="" alt=""> -->
            <h1><img src="/assets/img/logo.png" style="width: 200px; margin-top: 10px;" alt=""></h1>
          </div>
          <ul>
            <li><a href="">Home</a></li>
            <!-- <li id="produk">
              <a>Products</a>
              <ul>
                <li><a href="">Lemari</a></li>
                <li><a href="">Meja</a></li>
              </ul>
            </li> -->
            <li><a href="">Why Us</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
          <div class="mobile-bar">
            <span class="mobile-bar1 mobile-bar-all"></span>
            <span class="mobile-bar2 mobile-bar-all"></span>
            <span class="mobile-bar3 mobile-bar-all"></span>
          </div>
        </nav>
      </section>
    </header>
    <main>
      <div class="top-box">
        <section>
          <div class="top-box-all">
            <div class="top-box1">
              <h1 class="text1" data-aos="fade-down">
                <!-- Selamat Datang <br />
                <span>Di</span> --> <?= $header['judul_1']; ?>
              </h1>
              <h1 class="text2" data-aos="fade-up"><?= $header['judul_2']; ?></h1>
              <p data-aos="fade-up">
              <?= $header['deskripsi']; ?>
              </p>
              
              <a href="https://wa.me/<?= $header['no_wa']; ?>" class="box-button-contact">
                <div class="box-contact" data-aos="zoom-in">
                  <i class="fa-brands fa-whatsapp"></i>
                  <p>Contact Us</p>
                </div>
              </a> 
            </div>
            <div class="top-box2">
              <div class="square-box1" data-aos="zoom-in"></div>
              <div class="square-box2" data-aos="zoom-in">
                <img src="/assets/img/<?= $header['img_header']; ?>" alt="Gambar disini" />
              </div>
              <div class="square-box3" data-aos="fade-up"></div>
            </div>
          </div>
        </section>
      </div>

      <!-- middle-box -->
      <div class="middle-box">
        <div class="middle-color1"></div>
        <div class="middle-color2"></div>
        <section>
          <div class="middle-box-all">
            <div data-aos="fade-down" data-aos-delay="50" class="middle-box1">
              <div class="middel-box-icon">
                <img src="/assets/img/<?= $benefit['img_ben1']; ?>" alt="" />
              </div>
              <div class="middel-box-text">
                <h5 style="text-align: center;"><?= $benefit['ben1']; ?></h5 style="text-align: center;">
              </div>
            </div>
            <div data-aos="fade-down" data-aos-delay="200" class="middle-box2">
              <div class="middel-box-icon">
                <img src="/assets/img/<?= $benefit['img_ben2']; ?>" alt="" />
              </div>
              <div class="middel-box-text">
                <h5 style="text-align: center;"><?= $benefit['ben2']; ?></h5 style="text-align: center;">
              </div>
            </div>
            <div data-aos="fade-down" data-aos-delay="400" class="middle-box3">
              <div class="middel-box-icon">
                <img src="/assets/img/<?= $benefit['img_ben3']; ?>" alt="" />
              </div>
              <div class="middel-box-text">
                <h5 style="text-align: center;"><?= $benefit['ben3']; ?></h5 style="text-align: center;">
              </div>
            </div>
            <div data-aos="fade-down" data-aos-delay="500" class="middle-box4">
              <div class="middel-box-icon">
                <img src="/assets/img/<?= $benefit['img_ben4']; ?>" alt="" />
              </div>
              <div class="middel-box-text">
                <h5 style="text-align: center;"><?= $benefit['ben4']; ?></h5 style="text-align: center;">
              </div>
            </div>
          </div>
        </section>
      </div>

      <!-- Products -->
      <div class="product-box">
        <section>
          <div class="product-top-text">
            <h1 data-aos="zoom-in" data-aos-delay="200"><?= $judproduct['judul']; ?></h1>
            <p>
            <?= $judproduct['deskripsi']; ?>
            </p>
          </div>
          <!-- <div class="product-menu">
            <div class="box-menu1 box-menu-all"></div>
            <div class="box-menu2 box-menu-all"></div>
            <div class="box-menu3 box-menu-all"></div>
          </div> -->
          <div class="product-image">
            <section class="gallery" style="overflow: hidden">
              <div class="box-pilihan-product">
                <h1>Menu Pilihan Produk</h1>
              </div>
              <div class="gallery__item">
                <input type="radio" name="gallery" id="img-2" checked class="gallery__selector" />
                <div class="box-image-all box-imagee2">
                  <?php foreach($pro_bangku as $bangku): ?> 
                    <img src="/assets/img/<?= $bangku['img']; ?>" alt="" class="gallery__img" />
                    <?php endforeach; ?>
                  <!-- <img src="/assets/img/folksniture/12. serong kiri.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/12. set kursi meja makan.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/12_serong kiri_compress29.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/13_serong kiri_compress35.jpg" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/13_serong kanan_compress14.jpg" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/17_detail_compress64.jpg" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/17_serong kanan_compress41.jpg" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/bangku2.jpg" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/bangku.jpg" alt="Gambar disini" class="gallery__img" /> -->
                </div>
                <label for="img-2" class="gallery__thumb gallery__thumb2">
                  <h1>Bangku</h1>
                </label>
              </div>
              <div class="gallery__item">
                <input type="radio" name="gallery" id="img-3" checked class="gallery__selector" />
                <div class="box-image-all box-imagee3">
                <?php foreach($pro_meja as $meja): ?> 
                    <img src="/assets/img/<?= $meja['img']; ?>" alt="" class="gallery__img" />
                    <?php endforeach; ?>
                  <!-- <img src="/assets/img/folksniture/59. detail kayu.JPG" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/edit 14.1.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/edit 9.1.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/16_ detail tampak atas_compress13.jpg" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/16_detail laci_compress65.jpg" alt="Gambar disini" class="gallery__img" /> -->
                </div>
                <label for="img-3" class="gallery__thumb gallery__thumb3">
                  <h1>Meja</h1>
                </label>
              </div>
         
              <div class="gallery__item">
                <input type="radio" name="gallery" id="img-1" checked class="gallery__selector" />
                <div class="box-image-all box-imagee1">
                    <?php foreach($pro_lemari as $lemari): ?> 
                      <img src="/assets/img/<?= $lemari['img']; ?>" alt="" class="gallery__img" />
                    <?php endforeach; ?>
                  <!-- <img src="/assets/img/folksniture/lemari_sorong_kecil.jpg" class="gallery__img" />
                  <img src="/assets/img/folksniture/4. detail motiff.JPG" alt="Gambar disini" class="gallery__img" />
                  <img src="/assets/img/folksniture/4. depan.JPG" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/motif.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/6. lemari kecil serong kanan.jpg" alt="" class="gallery__img" />
                  <img src="/assets/img/folksniture/20_serong kanan_compress41.jpg" alt="" class="gallery__img" /> -->
                </div>
                <label for="img-1" class="gallery__thumb gallery__thumb1"> <h1>LEMARI</h1> </label>
              </div>
            </section>
          </div>

          <!-- Other Products -->
          <div class="product-box-other" id="product">
            <div class="box-other-text">
              <h1 data-aos="fade-up">OTHERS PRODUCT</h1>
            </div>
            <div class="box-other-image">
              <div class="box-other1 box-other-all" data-aos="fade-down-right" data-aos-delay="200">
                <img data-aos="fade-up" src="/assets/img/otherproducts/globe.png" alt="" />
              </div>
              <div class="box-other2 box-other-all" data-aos="fade-down-left">
                <img data-aos="fade-up" src="/assets/img/otherproducts/laci.png" alt="" />
              </div>
              <div class="box-other3 box-other-all" data-aos="fade-down-right">
                <img data-aos="fade-up" src="/assets/img/otherproducts/bed.png" alt="" />
              </div>
              <div class="box-other4 box-other-all" data-aos="fade-down-left">
                <img data-aos="fade-up" data-aos-delay="200" src="assets/img/otherproducts/table.png" alt="" />
              </div>
              <div class="box-other5 box-other-all" data-aos="fade-down-right">
                <img data-aos="fade-up" src="/assets/img/otherproducts/chair.png" alt="" />
              </div>
              <div class="box-other6 box-other-all" data-aos="fade-down-left">
                <img data-aos="fade-up" src="/assets/img/otherproducts/lemari.png" alt="" />
              </div>
            </div>
          </div>
        </section>
      </div>
    </main>
    <!-- ekaa -->
    <main style="overflow: hidden">
      <div class="about box-main2-about">
        <div class="about-kr">
          <div class="square-a" data-aos="fade-down" data-aos-duration="3000"></div>
          <div class="square-bg" data-aos="zoom-in-right"></div>
          <div class="square-c" data-aos="fade-up" data-aos-duration="2000"></div>
          <div class="square-b" data-aos="zoom-in-left">
            <img src="/assets/img/<?= $section['img']; ?> " alt="" />
          </div>
        </div>
        <div class="about-kn" id="why">
          <h1 data-aos="fade-up"><?= $section['judul']; ?></h1>
          <p data-aos="fade-down" data-aos-duration="1900">
          <?= $section['deskripsi']; ?>        </p>
        </div>
        <div class=""></div>
      </div>
    </main>
    <main>
      <div class="slg box-main3-slg" id="contact">
        <h1 data-aos="flip-up"><?= $contact['deskripsi']; ?></h1>
        <a href="https://wa.me/<?= $contact['no_wa']; ?>">
          <div class="btn-contact" data-aos="flip-left">
            <p>Contact Us</p>
          </div>
        </a>
      </div>
    </main>
    <footer>
      <div class="top">
        <div class="logo top-all"><img src="/assets/img/logo.png" style="width: 200px; margin-top: 10px;" alt=""></div>
        <div class="quicklink top-all">
          <ul>
            <li><a href="#"> > Kursi</a></li>
            <li><a href="#"> > Meja</a></li>
            <li><a href="#"> > Lemari</a></li>
            <li><a href="#"> > Tempat Tidur</a></li>
            <li><a href="#"> > Buffet</a></li>
            <li><a href="#"> > Nakas</a></li>
            <li><a href="#"> > Handycraft</a></li>
            <li><a href="#"> > Cermin</a></li>
            <li><a href="#"> > Sofa</a></li>
          </ul>
        </div>
        <div class="contactt top-all">
          <ul>
            <li>
              <a href="https://wa.me/<?= $contact['no_wa']; ?>">
                <img src="/assets/img/wa-white.png" alt="" />
                <p>+<?= $contact['no_wa']; ?></p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="/assets/img/fb.png" alt="" />
                <p>folksniture.id</p>
              </a>
            </li>
            <li>
              <a href="mailto:sales@folksniture.id">
                <img src="/assets/img/email.png" alt="" />
                <p>sales@folksniture.id</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img style="height: 30px; width: 30px" src="/assets/img/map.png" alt="" />
                <p>Desa Suwawal Timur RT 03 RW 02 Kec. Pakis Aji kab. Jepara 59452, Jawa Tengah Indonesia</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="bottom">&copy; All rights reserved | 2022 | Folskniture</div>
    </footer>

    <div class="back-to-top">
      <a href="#body"><i class="fas fa-chevron-circle-up"></i></a>
    </div>
    <!-- Aos JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 1200,
      });
    </script>
    <!-- JS -->
    <script src="/assets/js/main.js"></script>
  </body>
</html>
