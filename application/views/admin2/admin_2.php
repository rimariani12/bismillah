



  


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

<form data-parsley-validate="" novalidate="" enctype="multipart/form-data" class="form-horizontal" method="post" action=<?= base_url('admin/tambahgaleri'); ?>>
    <div class="row container-fluid" style="margin-top: -5px;">
        <div class="col-sm-12">
            <div class="panel panel-default ">
                <div class="panel-heading">Galeri
                    <div class="tools"><button name="update" class="btn btn-success">Tambah Galeri</button></a></div>
                </div>
              <div class="panel-body">
                    
                    <table id="table1" class="table table-striped table-bordered table-hover table-fw-widget text-center">
                        <thead>
                            <tr>
                                <th class="text-center" width="30px;">No</th>
                                <!-- <th class="text-center">Foto </th> -->
                                <th class="text-center">Gambar</th>
                                <th class="text-center" width="150px;">Operasi</th>
                            </tr>
                        </thead>
                       
                        <tbody>
                            
                            
                            <tr>
                                <td>1</td>
                                <td>hh</td>

                                
                                <td class="actions" style="word-spacing: 10px;">
                                    <a href="#" class="icon"><i class="mdi mdi-eye"></i></a>

                                    <a href="<?= base_url('admin/ubahberita'); ?>" class="icon"><i class="mdi mdi-edit"></i></a>

                                    <a href="#" class="icon"> <i class="mdi mdi-delete"></i></a>
    
                                </td>
                              </td>
                            </tr>
                      
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

