<div class="row container-fluid center">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                <h2 style="text-align: center;">Ubah</h2>
            </div>
            <div class="panel-body">
                <form data-parsley-validate="" novalidate="" class="form-horizontal">
                    
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Judul konten</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Pilihan</label>
                        <div class="col-md-9 col-xs-9">
                            <select class="form-control">
                                <option></option>
                                <option>Berita</option>
                                <option>Artikel</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Isi konten</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" style="height: 100px;" name="Isi Konten"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Url Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Nama Pembuat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;">Status</label>
                        <div class="col-md-9 col-xs-9">
                            <select class="form-control">
                                <option></option>
                                <option>Aktif</option>
                                <option>Non Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-4">
                            <p class="text-left">
                                <button type="submit" class="btn btn-space btn-success"> Simpan</button>
                                <button class="btn btn-space btn-default"><a href="<?= base_url('admin/berita'); ?>" style="color: #9AC600;">Kembali</a></button>
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