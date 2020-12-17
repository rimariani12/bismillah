  <div class="page-head" style="padding: 5px 20px 10px;">

      <ol class="breadcrumb page-head-nav">

          <li><a href="#">
                  <h4>Berita</h4>
              </a></li>

      </ol>
  </div>

  <?php
    if (validation_errors() != false) {
    ?>
      <div class="alert alert-danger" role="alert">
          <?php echo validation_errors(); ?>
      </div>
  <?php
    }
    ?>

  <form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('admin/tambah'); ?>>
      <div class="row container-fluid" style="margin-top: -5px;">
          <div class="col-sm-12">
              <div class="panel panel-default ">
                  <div class="panel-heading">Berita
                      <div class="tools"><button name="update" class="btn btn-success">Tambah Berita</button></a></div>
                  </div>
                  <div class="panel-body">

                      <table id="table1" class="table table-striped table-bordered table-hover table-fw-widget text-center">
                          <thead>
                              <tr>
                                  <th class="text-center" width="50px;">No</th>
                                  <!-- <th class="text-center">Foto </th> -->
                                  <th class="text-center">Judul Berita</th>
                                  <th class="text-center" width="200px;">Kategori</th>
                                  <th class="text-center" width="200px;">Operasi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php $i = 1; ?>
                              <?php foreach ($beritas as $berita) : ?>
                                  <tr style="height: 10px;">
                                      <td><?= $i++ ?>.</td>
                                      <td><?= $berita->judul_berita ?></td>

                                      <td><?= $berita->kategori ?></td>

                                      <td class="actions" style="word-spacing: 10px;">
                                          <a href="<?= base_url('admin/detailberita') ?>" class="icon"><i class="mdi mdi-eye"></i></a>

                                          <a href="<?= base_url('admin/ubahberita'); ?>" class="icon"><i class="mdi mdi-edit"></i></a>

                                          <a href="#" class="icon"> <i class="mdi mdi-delete"></i></a>

                                      </td>
                                      </td>
                                  </tr>
                              <?php endforeach; ?>
                          </tbody>
                      </table>
                  </div>
              </div>

          </div>
      </div>
  </form>