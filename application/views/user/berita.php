<style>
   .btn-success {
    color: #fff;
    background-color: #9AC600;
    border-color: #9AC600;
}

.nav-menu a:hover, .nav-menu .active>a, .nav-menu li:hover>a {
    color: #9AC600;
    text-decoration: none;
}
.btn-success:not(:disabled):not(.disabled).active, .btn-success:not(:disabled):not(.disabled):active, .show>.btn-success.dropdown-toggle {
    color: #fff;
    background-color: #9AC600;
    border-color:#9AC600;
}
</style>

<main id="main">
  <div class="section-title">
    <h3 style="margin-right: 74%; margin-top: 10px;">Berita</h3>
  </div>


  <section id="galeri" class="portfolio section-bg">
    <div class="container" style="margin-top: -50px;">

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6">
          <div class="card" style="width: 18rem; margin-left: 30px;">
            <img class="card-img-top" src="<?= base_url('assets/img/portfolio/portfolio-9.jpg'); ?>" alt="Foto Artikel">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="<?= base_url('user/beritaDetail'); ?>" class="btn btn-success">Baca</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card" style="width: 18rem;margin-left: 30px;">
            <img class="card-img-top" src="<?= base_url('assets/img/portfolio/portfolio-9.jpg'); ?>" alt="Foto Artikel">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Baca</a>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6">
          <div class="card" style="width: 18rem;margin-left: 30px;">
            <img class="card-img-top" src="<?= base_url('assets/img/portfolio/portfolio-9.jpg'); ?>" alt="Foto Artikel">
            <div class="card-body">
              <h5 class="card-title">Judul Artikel</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-success">Baca</a>
            </div>
          </div>
        </div>




      </div>
    </div>
  </section>