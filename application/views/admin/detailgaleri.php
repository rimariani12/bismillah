<!-- styles -->
<style>
     /* div.dataTables_wrapper div.dataTables_length label, div.dataTables_wrapper div.dataTables_filter label{
        margin-left: -100px;
     } */
     .deskripsi_pertemuan{
        font-size: 18px; 
        padding-top:40px;
        padding-bottom:10px;
     }
     .table_deskripsi{
        margin-bottom:30px;
     }
     .table_deskripsi tr td{
        padding: 4px;
        vertical-align: top;
     }
</style>

<!-- tombol edit dan hapus -->
<div class="deskripsi_pertemuan">
    <div class="row">
        <div class="col-sm-6 col-xs-6">
            Deskripsi Pertemuan
        </div>
    </div>
</div>


<table class="col-sm-8 table_deskripsi"> 
    <tbody>
        <tr>
            <td class="item" width="12%">Pertemuan</td>
            <td>:</td>
            <td>1</td>
        </tr>
        <tr>
            <td class="item">Hari</td>
            <td>:</td>
            <td>Jum'at</td>
        </tr>
        <tr>
            <td class="item">Jam</td>
            <td>:</td>
            <td>17.00 WIB</td>
        </tr>
        <tr>
            <td class="item">Tanggal</td>
            <td>:</td>
            <td>12 Agustus 2020</td>
        </tr>
        <tr>
            <td class="item">Pengajar</td>
            <td>:</td>
            <td>Ustadz. Zayn Malik, Ustadzah Gigi Hadid</td>
        </tr>
        <tr>
            <td class="item">Keterangan</td>
            <td style="width:2%;">:</td>
            <td style="width:90%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio dolorem autem sapiente earum ipsa nemo quis voluptatibus rem odit sint inventore aspernatur voluptates illum, necessitatibus fuga sequi! Quos, voluptatem rem!</td>
        </tr>
    </tbody>
</table>
<br><br>
<table id="table1" class="table table-striped table-bordered table-hover table-fw-widget text-center">
    <thead>
        <tr>
            <th class="text-center" width="2%">No</th>
            <th class="text-center">Foto </th>
            <th class="text-center">Nama Santri</th>
            <th class="text-center">Kehadiran</th>
            <th class="text-center">Hafalan</th>
            <th class="text-center">Pencapaian</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td><img src="<?= base_url('assets/img/avatar2.png'); ?>" alt="Avatar"></td>
            <td>Sadia Sultana</td>
            <td>Hadir</td>
            <td>Al Mulk : 1-5</td>
            <td><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></td>
        </tr>
        <tr>
            <td>2.</td>
            <td><img src="<?= base_url('assets/img/avatar1.png'); ?>" alt="Avatar"></td>
            <td>Amar Khandil</td>
            <td>Hadir</td>
            <td>Al Mulk : 1-10</td>
            <td><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></td>
        </tr>
        <tr>
            <td>3.</td>
            <td><img src="<?= base_url('assets/img/avatar3.png'); ?>" alt="Avatar"></td>
            <td>Radwa Ali</td>
            <td>Izin</td>
            <td>Ar Rahman : 1-15</td>
            <td><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i><i class="mdi mdi-star"></i></td>
        </tr>
    </tbody>
</table>