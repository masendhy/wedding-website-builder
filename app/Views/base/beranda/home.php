<!DOCTYPE html>
<html Content-Language="ID" lang="id" xml:lang="id">

<head>
  <title><?= SITE_NAME ?> - Digital Invitation</title>
  <link rel="icon" href="<?php echo base_url() ?>/assets/base/img/favicon.png?<?= date("Y-m-d"); ?>">

  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Undangan digital berupa website untuk pernikahanmu. Lebih praktis, keren dan kekinian.">
  <meta name="keywords" content="Undangan digital, Website pernikahan, Undangan kekinian, Web undangan kren">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="theme-color" content="#005CAA" />
  <meta name="author" content="MC Project">

  <!-- Required CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/bootstrap.min.css?SIDOINIKAHV2">
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/base/css/line-icons.css?SIDOINIKAHV2">
  <link type="text/css" href="<?php echo base_url() ?>/assets/base/css/froala_blocks.css?SIDOINIKAHV2" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lobster+Two&family=Lovers+Quarrel&family=Merienda&family=Ubuntu+Mono&display=swap" rel="stylesheet">



</head>

<body>
  <header>
    <div class="container">
      <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
          <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img src="<?php echo base_url() ?>/assets/base/img/logo1.png?cache<?= date("Y-m-d"); ?>" height="75" alt="image">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav3" aria-controls="navbarNav3" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarNav3">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">BERANDA <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#fitur">FITUR</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#harga">HARGA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#tema">TEMA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#testi">TESTIMONI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?= base_url('login') ?>" style="font-weight:bolder">LOGIN</a>
              </li>
            </ul>

          </div>
        </div>
      </nav>
    </div>
  </header>

  <section class="fdb-block cover d-flex align-items-center">
    <div class="container align-items-end justify-content-center d-flex">
      <div class="row align-items-top text-left">
        <div class="col-12 col-md-6 col-lg-6">
          <h1 class="judul"><?= SITE_NAME ?></h1>
          <p class="lead subjudul">Bikin website undangan pernikahan lebih simpel dan keren untuk memberikan kesan yang terbaik.</p>
          <p class="mt-4"><a href="<?= base_url() ?>/order" class="btn btn-light btn-pesan">Buat Undangan</a></p>
          <p class="mt-4"><a href="<?= base_url() ?>/tema" class="btn btn-light btn-pesan">Lihat Demo</a></p>
        </div>

        <div class="col-12 col-sm-4 col-md-6 col-lg-4 m-auto">
          <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/base/img/logo.png?<?= date("Y-m-d"); ?>">
        </div>
      </div>
    </div>
  </section>

  <section class="fdb-block" id="fitur">
    <div class="container">
      <div class="row text-center">
        <div class="col-12">
          <h1>Fitur</h1>
        </div>
      </div>
      <div class="row text-left mt-5">
        <div class="col-12 col-md-4">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/cloud.svg">
            </div>
            <div class="col-9">
              <h3><strong>Website Selalu Aktif</strong></h3>
              <p>Website yang cepat, aman dan selalu aktif .</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/gift.svg">
            </div>
            <div class="col-9">
              <h3><strong>Ubah Tampilan</strong></h3>
              <p>Ubah desain website undangan pernikahan sesuai keinginan.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/map-pin.svg" style="width:95%">
            </div>
            <div class="col-9">
              <h3><strong>Do'a dan Ucapan</strong></h3>
              <p>Para tamu dapat memberikan doa dan ucapan langsung di profile website undanganmu.</p>
            </div>
          </div>
        </div>
      </div>

      <div class="row text-left pt-3 pt-sm-4 pt-md-5">
        <div class="col-12 col-md-4">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/layers.svg">
            </div>
            <div class="col-9">
              <h3><strong>Cerita</strong></h3>
              <p>Tuangkan cerita perjalanan cinta anda kepada tamu undangan.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/life-buoy.svg">
            </div>
            <div class="col-9">
              <h3><strong>Layar Sapa</strong></h3>
              <p>Setiap tamu yang hadir dapat disapa saat menerima undangan.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 pt-3 pt-sm-4 pt-md-0">
          <div class="row">
            <div class="col-3">
              <img alt="image" class="fdb-icon" src="<?php echo base_url() ?>/assets/base/img/icons/layout.svg">
            </div>
            <div class="col-9">
              <h3><strong> Kirim Undangan
                </strong></h3>
              <p>Kamu bisa menggunakan WhatsApp untuk mengirimkan undangan.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="fdb-block" style="background-image: linear-gradient(to right, #f4a9a8 0%, #ffe5e2
 100%) !important" id="harga">
    <div class="container">
      <div class="row text-center">
      
        <div class="col-12">
          <h1>Harga</h1>
        </div>
     
      </div>

      <div class="row mt-5 align-items-center">
        <div class="col-12 col-md-6 col-lg-6">
          <h2 class="subjudul">Harga Termurah!</h2>
          <p class="lead subjudul">Dengan harga terjangkau anda sudah mendapatkan halaman website, manajemen tamu, cerita, komentar, peta lokasi, dan buku tamu digital!.</p>
        </div>

        <div class="col-12 col-sm-10 col-md-8 m-auto col-lg-4 text-center pt-4 pt-lg-0">
          <div class="fdb-box px-4 pt-5">
            <h2>Premium</h2>
            <p class="lead" style="color:#f4a9a8">Promo Spesial</p>

            <p class="h1 mt-5 mb-5">Rp 100.000</p>

            <p><a href="<?= base_url() ?>/tema" class="btn btn-primary">Pesan Sekarang</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="fdb-block team-1" id="tema">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-12">
          <h2>Tema</h2>
          <p class="lead">Tersedia banyak pilihan tema undangan yang menarik </p>
        </div>
      </div>

      <div class="row">
        <?php
        $i = 1;
        foreach ($tema->getResult() as $row) { ?>
          <div class="col-lg-3 col-md-6 col-xs-12 mt-5">
            <div class="fdb-box p-0">
              <img alt="image" class="img-fluid rounded-0" src="<?php echo base_url() ?>/assets/themes/<?= $row->nama_theme ?>/preview.png">

              <div class="content p-2 d-flex justify-content-center">
                <h3><strong><?= $row->nama_theme ?></strong></h3>
              </div>

              <div class="d-flex justify-content-center">
                <p class="mt-2 mr-2"><a href="<?= base_url('order/' . $row->kode_theme) ?>" class="btn btn-warning btn-sm">Pesan</a></p>
                <p class="mt-2"><a href="<?= base_url('demo/' . $row->nama_theme) ?>" class="btn btn-primary btn-sm">Demo</a></p>
              </div>
            </div>
          </div>
        <?php
          if ($i++ == 4) break;
        }
        ?>
      </div>

      <div class="d-flex justify-content-center">
        <p class="mt-4"><a href="<?= base_url() ?>/tema" class="btn btn-primary">Lihat Semua</a></p>
      </div>

    </div>
  </section>

  <section class="fdb-block" id="testi">
    <div class="container">
      <div class="row text-center justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
          <h2>Testimonials</h2>
          <p class="lead" >Pendapat pengguna website Weddingpage</p>
        </div>
      </div>

      <div class="row mt-5 align-items-center justify-content-center">
        <div class="col-md-8 col-lg-4">
          <div class="fdb-box">
            <div class="row no-gutters align-items-center">
              <div class="col-3">
                <img alt="image" class="img-fluid rounded" src="<?php echo base_url() ?>/assets/base/img/people/11.jpg">
              </div>
              <div class="col-8 ml-auto">
                <p style="color: #444;">
                  <strong>David - Andrea</strong><br>
                  <em>Surabaya</em>
                </p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <p class="lead" style="color: #444;">
                  "Awalnya enggak kepikiran mo pake website wedding invitation, tapi setelah lihat weddingpage jadi kepincut, selain keren gampang banget bikin website undangannya  "
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
          <div class="fdb-box">
            <div class="row no-gutters align-items-center">
              <div class="col-3">
                <img alt="image" class="img-fluid rounded" src="<?php echo base_url() ?>/assets/base/img/people/12.jpg">
              </div>
              <div class="col-8 ml-auto">
                <p style="color: #444;">
                  <strong>Fathoni - Laila</strong><br>
                  <em>Jogjakarta</em>
                </p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <p class="lead" style="color: #444;">
                  "Jasa Website Undangan itu <strong>MAHAL !</strong>, saya awalnya mikir juga gitu, eehhh setelah tahu weddingpage, ternyata selain hemat juga keren dan simple bikinnya "
                <br>.
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-lg-4 mt-4 mt-lg-0">
          <div class="fdb-box">
            <div class="row no-gutters align-items-center">
              <div class="col-3">
                <img alt="image" class="img-fluid rounded" src="<?php echo base_url() ?>/assets/base/img/people/13.jpg">
              </div>
              <div class="col-8 ml-auto">
                <p style="color: #444;">
                  <strong >Dani - Dian</strong><br>
                  <em>Jakarta</em>
                </p>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <p class="lead" style="color: #444;">
                  "Weddingpage keren!, simpel bikinnya dan fitur fitur nya sangat lengkap ditambah lagi kecepatan akses nya yang super kenceng walaupun dengan paket yang Gratis, mantabs deh pokoknya ."
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="fdb-block footer-small footer">
    <div class="container">
      <div class="col-12 text-lg-left">
        <p class="lead footer-social">
          <a href="https://twitter.com/heejra" class="mx-2"><i class="lni-twitter-filled" aria-hidden="true"></i></a>
          <a href="https://facebook.com/heejra" class="mx-2"><i class="lni-facebook-filled" aria-hidden="true"></i></a>
          <a href="https://instagram.com/heejra" class="mx-2"><i class="lni-instagram-filled" aria-hidden="true"></i></a>
        </p>
      </div>
      <div class="row text-center" style="background-image: linear-gradient(
    to right,
    #f4a9a8 0%,
    #ffe5e2 100%
  ) !important;">
        <div class="col">
          <p class="text-footer" style="background-image: linear-gradient(
    to right,
    #f4a9a8 0%,
    #ffe5e2 100%
  ) !important;">&#169;2021 <a style="color:#f39191" href="<?php echo base_url() ?>" rel="dofollow" target="_blank"><?= SITE_NAME ?></a> - <a style="color:#f39191" href="https://heejra.net" rel="dofollow" target="_blank">heejra</a> 
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo base_url() ?>/assets/base/js/jquery-min.js"></script>
  <script src="<?php echo base_url() ?>/assets/base/js/popper.min.js"></script>
  <script src="<?php echo base_url() ?>/assets/base/js/bootstrap.min.js"></script>
</body>

</html>