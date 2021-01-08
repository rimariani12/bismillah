<div class="row container-fluid center">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                <h2 style="text-align: center;">Ubah Galeri</h2>
            </div>
            <div class="panel-body">
                <!-- <form data-parsley-validate="" novalidate="" class="form-horizontal"> -->
                <form data-parsley-validate="" enctype="multipart/form-data" novalidate="" class="form-horizontal" method="post" action="<?php echo base_url('admin/ubah/') . $galeri->id_galeri; ?>">

                <input type="hidden" class="form-control" name="id_galeri" value="<?= $galeri->id_galeri; ?>">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" style="text-align: left;">Nama Gambar</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_galeri" value="<?=$galeri->nama_galeri;?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" style="text-align: left;" for="gambar">Gambar</label>
                        <div class="col-md-9">
                            <input type="file" class="form-control" name="gambar">
                        </div>
                        <input type="hidden" name="galeri_lama" readonly value="<?= $galeri->gambar ?>">
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" style="text-align: left;">Status</label>
                        <div class="col-md-2 col-xs-6">
                            <select class="form-control" name="status">
                                        <?php if ($galeri->status === "Aktif" || $galeri->status === "aktif") : ?>
                                            <option><?= $galeri->status; ?></option>
                                            <option>Non Aktif</option>
                                        <?php else : ?>
                                            <option><?= $galeri->status; ?></option>
                                            <option>Aktif</option>
                                        <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-4">
                            <p class="text-left">
                                <button type="submit" name="simpan" class="btn btn-space btn-success"> Simpan</button>
                                <button class="btn btn-space btn-default"><a href="<?= base_url('admin/galeri'); ?>" style="color: #9AC600;">Kembali</a></button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= base_url('assets/lib/select2/js/select2.min.js') ?>" type='text/javascript'></script>
<script>
    $(document).ready(function() {
        $('.select').select2();
    });
</script>