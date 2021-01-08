<div class="page-head" style="padding: 5px 20px 10px;">

    <ol class="breadcrumb page-head-nav">

        <li><a href="#">
                <h4>Galeri</h4>
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

<!-- <form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('admin/tambahgaleri'); ?>> -->
<!-- <a href="<?= base_url('admin/tambahgaleri'); ?>">Tambah Data</a> -->
    <div class="row container-fluid" style="margin-top: -5px;">
        <div class="col-sm-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Galeri
                    <!-- <div class="tools"><button name="insert" class="btn btn-success">Tambah Galeri</button></a></div> -->
                    <div class="tools">
                    <button class="btn btn-success"><a href="<?= base_url('admin/tambahgaleri'); ?>"    >Tambah Data</a></button>
                    </div>
                    
                </div>
              <div class="panel-body">
                    
                    <table id="table1" class="table table-striped table-bordered table-hover table-fw-widget text-center">
                        <thead>
                            <tr>
                                <th class="text-center" width="30px;">No</th>
                                <!-- <th class="text-center">Foto </th> -->
                                <th class="text-center">Nama Gambar</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center" width="150px;">Operasi</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            <?php $i= 1; ?>
                            <?php foreach ($galeris as $galeri): ?>
                            <tr>
                                <td><?=$i++ ?>.</td>
                                <td><?=$galeri->nama_galeri ?></td>
                                <td><img src="<?= base_url("assets/".$galeri->gambar) ?>"></td>

                                
                                <td class="actions" style="word-spacing: 10px;">
                                    <a href="<?= base_url('admin/detailgaleri/').$galeri->id_galeri ?>" class="icon"><i class="mdi mdi-eye"></i></a>

                                    <a href="<?= base_url('admin/ubah/').$galeri->id_galeri ?>" class="icon"><i class="mdi mdi-edit"></i></a>

                                    <a href="<?= base_url('admin/hapusGaleri/') .  $galeri->id_galeri  ?>" onclick="return confirm('yakin akan di hapus ?');" class="icon"><i class="mdi mdi-delete"></i></a>
    
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        $('.zoom').hover(function() {
            $(this).addClass('transisi');
        }, function() {
            $(this).removeClass('transisi');
        });
    });
</script>

