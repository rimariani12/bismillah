<div class="page-head" style="padding: 5px 20px 10px;">

    <ol class="breadcrumb page-head-nav">

        <li><a href="#">
                <h4>Detail Galeri</h4>
            </a></li>

    </ol>
</div>

<div class="user-profile container-fluid">
    <!-- Awal Profile -->
    <div class="user-info-list panel panel-default">
        <div class="row panel-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel-heading panel-heading-divider">Detail Gambar
                    </div>
                    <div class="panel-body">
                        <table class="no-border no-strip skills">
                            <tbody class="no-border-x no-border-y">

                                <tr>
                                    
                                    <td class="item"><span class="icon s7-portfolio"></span>Nama Gambar</td>

                                    <td class="col-sm-12 col-sm-offset-3"><?= $galeri->nama_galeri ?></td>
                                </tr>
                                <tr>
                                   
                                    <td class="item"><span class="icon s7-portfolio"></span>Gambar</td>

                                    <td><img src="<?= base_url("assets/".$galeri->gambar) ?>"></td>
                                </tr>
                               

                            </tbody>
                        </table>
                    </div>
                </div>
              
            </div>

        </div>
    </div>
</div>