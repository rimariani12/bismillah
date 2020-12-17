<!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><img src="<?= base_url('assets/img/1.jpeg'); ?>" alt="#"></a></h1>
      </div>

      


      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li><a href="">Home</a></li>
          <li>
            <div class="dropdown">
              <a class=" dropdown-toggle" type="text-light" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profil
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url('user/sejarah'); ?>">Sejarah</a>
                <a class="dropdown-item" href="<?= base_url('user/visi_Misi'); ?>">Visi & Misi</a>
                <a class="dropdown-item" href="<?= base_url('user/organisasi'); ?>">Organisasi</a>
              </div>
            </div>
          </li>
          <li><a href="<?= base_url('user/program'); ?>">Program</a></li>
          <li>
            <div class="dropdown">
              <a class=" dropdown-toggle" type="text-light" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Berita & Artikel
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="<?= base_url('user/berita'); ?>">Berita</a>
                <a class="dropdown-item" href="<?= base_url('user/artikel'); ?>">Artikel</a>
              </div>
            </div>
          </li>
          <li><a href="<?= base_url('user/galeri'); ?>">Galeri</a></li>
          <li><a href="<?= base_url('user/kontak'); ?>">Kontak</a></li>
          <li><a href="#pendaftaran">Pendaftaran</a></li>
        </ul>
      </nav>

    </div>
  </header><!-- End Header -->