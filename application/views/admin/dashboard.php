        <div class="container-fluid">
            <div class="row col-sm-offset-2">
                <div class="col-md-12 col-lg-3">
                    <div class="widget widget-tile">
                        <div class="data-info">
                            <div class="desc text-center">Jumlah Galeri</div>
                            <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="150" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="widget widget-tile">
                        <div class="data-info">
                            <div class="desc text-center">Jumlah Berita</div>
                            <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="50" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-3">
                    <div class="widget widget-tile">
                        <div class="data-info">
                            <div class="desc text-center">Jumlah Artikel</div>
                            <div class="value text-center"><span class=" mdi mdi-accounts"></span> <span data-toggle="counter" data-end="100" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="widget widget-fullwidth be-loading">
                        <div class="widget-head">
                            <div class="tools">
                                <div class="dropdown"><span data-toggle="dropdown" class="icon mdi mdi-more-vert visible-xs-inline-block dropdown-toggle"></span>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Minggu</a></li>
                                        <li><a href="#">Bulan</a></li>
                                        <li><a href="#">Tahun</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Hari Ini</a></li>
                                    </ul>
                                </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                            </div>
                            <div class="button-toolbar hidden-xs">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Minggu</button>
                                    <button type="button" class="btn btn-default active">Bulan</button>
                                    <button type="button" class="btn btn-default">Tahun</button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Hari Ini</button>
                                </div>
                            </div><span class="title">Keaktifan Admin</span>
                        </div>
                        <div class="widget-chart-container">
                            <div class="widget-chart-info">
                                <ul class="chart-legend-horizontal">
                                    <li><span data-color="main-chart-color1"></span> Aktif</li>
                                    <li><span data-color="main-chart-color3"></span> Non Aktif</li>
                                </ul>
                            </div>
                            <div class="widget-counter-group widget-counter-group-right">
                                <div class="counter counter-big">
                                    <div class="value">70%</div>
                                    <div class="desc">Aktif</div>
                                </div>
                                <div class="counter counter-big">
                                    <div class="value">30%</div>
                                    <div class="desc">Non Aktif</div>
                                </div>
                            </div>
                            <div id="main-chart" style="height: 260px;"></div>
                        </div>
                        <div class="be-spinner">
                            <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                            <div class="title">Detail Keaktifan Santri</div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-striped table-borderless text-center">
                                <thead>
                                    <tr>
                                        <th>Cabang</th>
                                        <th>Jumlah Santri Aktif</th>
                                        <th>Jumlah Santri Non Aktif</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody class="no-border-x">
                                    <tr>
                                        <td>Bandung</td>
                                        <td>650</td>
                                        <td>50</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Lembang</td>
                                        <td>200</td>
                                        <td>100</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Cimahi</td>
                                        <td>450</td>
                                        <td>50</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Bogor</td>
                                        <td>350</td>
                                        <td>50</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Pangalengan</td>
                                        <td>550</td>
                                        <td>50</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-md-6">
                    <div class="panel panel-default panel-table">
                        <div class="panel-heading">
                            <div class="tools"><span class="icon mdi mdi-download"></span><span class="icon mdi mdi-more-vert"></span></div>
                            <div class="title">Jumlah Guru</div>
                        </div>
                        <div class="panel-body table-responsive">
                            <table class="table table-striped table-borderless text-center">
                                <thead>
                                    <tr>
                                        <th>Cabang</th>
                                        <th>Jumlah Guru</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody class="no-border-x">
                                    <tr>
                                        <td>Bandung</td>
                                        <td>30</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Lembang</td>
                                        <td>10</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Cimahi</td>
                                        <td>15</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Bogor</td>
                                        <td>16</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                    <tr>
                                        <td>Pangalengan</td>
                                        <td>20</td>
                                        <td>30 Agustus 2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>