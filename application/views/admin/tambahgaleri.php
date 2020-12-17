
<div class="row container-fluid center">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                 <h4><b>Admin/Tambah Gambar</b></h4>
            </div>
            <div class="panel-body">
                <form action="<?php echo site_url('admin/tambahgaleri') ?>" method="post" data-parsley-validate="" novalidate="" class="form-horizontal">
                    
                    <div class="form-group">
                        <label class="col-sm-3 control-label" style="text-align: left;">Nama Galeri</label>
                        <div class="col-md-9">
                            <input type="text" name="nama_galeri" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" style="text-align: left;">Gambar</label>
                        <div class="col-md-9">
                            <input type="file" name="gambar" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label" style="text-align: left;">Status</label>
                        <div class="col-md-2 col-xs-6">
                            <select class="form-control" name="status">
                                <option></option>
                                <option>Aktif</option>
                                <option>Non Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-4">
                            <p class="text-left">
                                <button type="submit" name="simpan" class="btn btn-space btn-success"> Simpan</button>
                                <button class="btn btn-space btn-default"><a href="<?= base_url('admin/galeri'); ?>"style="color: #9AC600;">Kembali</a></button>
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