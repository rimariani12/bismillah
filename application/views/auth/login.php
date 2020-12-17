<div class="main-content container-fluid">
    <div class="splash-container">
        <div class="panel panel-default panel-border-color panel-border-color-success">
            <div class="panel-heading"><img src="<?= base_url('assets/img/1.jpeg') ?>" alt="logo" width="102" height="27" class="logo-img"><span class="splash-description">Harap masukan Email sama Kata Sandi Anda</span></div>
            <div class="panel-body">
                <form class="admin" method="post" action="<?= base_url('admin/dashboard');  ?>">
                    <div class="login-form">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email Anda..." value="<?= set_value('email'); ?>"> <?= form_error('email', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Kata Sandi">
                            <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        
                        <div class="form-group row login-submit">
                            <div class="col-xs-6">
                                <button data-dismiss="modal" type="submit" class="btn btn-default btn-xl"> <a href="<?= base_url('admin/registration') ?>" style="color: #9AC600;">Registrasi</a> </button>

                            </div>
                            <div class="col-xs-6">
                                <button data-dismiss="modal" type="submit" class="btn btn-success btn-xl">Masuk</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="splash-footer">&copy; 2020 Saung Tahfidz Indonesia</div>
    </div>
</div>