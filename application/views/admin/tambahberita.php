<!-- <div class="row container-fluid center">
    <div class="col-xs-12 col-md-6 col-md-offset-3">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                <h4><b>Admin/Tambah Berita</b></h4>
            </div>
            <?php if ($this->session->flashdata('success')) : ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
            <?php elseif ($this->session->flashdata('danger')) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $this->session->flashdata('danger'); ?>
                </div>
            <?php endif; ?>
            <div class="panel-body">
                <form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('pendaftaran'); ?>>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="id_regional">Nama</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama" name="nama">
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="tgl_lahir">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <div data-start-view="4" data-date="" data-date-format="dd/mm/yyyy" data-link-field="dtp_input1" class="input-group date datetimepicker">
                                        <input size="16" type="text" class="form-control" name="tgl_lahir"><span class="input-group-addon btn btn-primary"><i class="icon-th mdi mdi-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <?php echo form_error('tgl_lahir'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;" for="jenis_kelamin">Jenis Kelamin</label>
                                <div class="col-sm-9" class="form-control">
                                    <select class="form-control" name="jenis_kelamin">
                                        <option>Perempuan</option>
                                        <option>Laki-Laki</option>
                                    </select>

                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Alamat</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" style="height:100px;" id="alamat" name="alamat"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <?php echo form_error('alamat'); ?>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Nomor Telepon</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="no_telp" name="no_telp">
                                </div>
                            </div>
                        </div>



                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Nama Orang Tua</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="nama_orangtua" name="nama_orangtua">
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9">
                                <?php echo form_error('no_telepon'); ?>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">No Telepon Orang Tua</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="no_telp_ortu">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Email</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="email" name="email">
                                </div>


                            </div>


                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Kata Sandi</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="password1" name="password1">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-3 control-label" style="text-align: left;">Konfirmasi Kata Sandi</label>
                                <div class=" col-sm-9">
                                    <input type="password" class="form-control" id="password2" name="password2">
                                </div>
                            </div>

                            <br>

                            <div class="form-group">
                                <div class="col-sm-12 col-sm-offset-3" style="margin-top:-18px">
                                    <p class="text-right"> -->
<!-- <button type="submit" class="btn btn-space btn-primary" name="daftar">Daftar</button>
<button class="btn btn-space btn-default"><a href=<?= base_url("pendaftaran"); ?>>Reset</a></button> -->
<!-- </p> -->
<!-- </div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div> -->












<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload {
        height: 171px;
        width: 180px;
        border-radius: 0;
        object-fit: cover;
    }
</style>
<div class="row container-fluid center">
    <div class="col-xs-12 col-md-12">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading panel-heading-divider">
                Tambah Data
            </div>

            <div class="panel-body ">

                <?= $this->session->flashdata('message'); ?>

                <form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('admin/tambah'); ?>>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;" for="judul_berita">Judul Berita</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="judul_berita" name="judul_berita">
                        </div>
                    </div>


                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;" for="kategori">Kategori</label>
                        <div class="col-md-9 col-xs-9">
                            <select class="form-control" name="kategori">
                                <option></option>
                                <option>Berita</option>
                                <option>Artikel</option>
                            </select>
                        </div>
                    </div>



                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;" for="isi_berita">Isi Berita</label>
                        <div class="col-sm-9">
                            <!-- <input type="textarea" class="form-control"> -->
                            <textarea class="form-control" style="height: 100px;" name="isi_berita"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left;" for="foto">Foto</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" name="foto">
                        </div>
                    </div>

                    <!-- <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-primary btn-file">Upload
                                <input type="file" id="imgInp" name="foto">
                            </button>
                        </span>
                        <input type="text" class="form-control" readonly name="foto">
                    </div> -->


                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left; " for="status">Status</label>
                        <div class="col-md-9 col-xs-9">
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
                                <button type="submit" class="btn btn-space btn-success" name="simpan"> Simpan</button>
                                <button class="btn btn-space btn-default"><a href="<?= base_url('admin/berita'); ?>" style="color: #9AC600;">Kembali</a></button>
                            </p>
                        </div>
                    </div>
                </form>
            </div>

            <br>
            <br>
        </div>
    </div>
</div>