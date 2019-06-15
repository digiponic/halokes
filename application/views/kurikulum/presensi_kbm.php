<?php                                    
    date_default_timezone_get('Asia/Jakarta');
    $dateNow = date("d-m-Y");
    $yearNow = date("Y");
    $month = [
        '-- Bulan --' => 0,
        'Januari' => 1,
        'Februari' => 2,
        'Maret' => 3,
        'April' => 4,
        'Mei' => 5,
        'Juni' => 6,
        'Juli' => 7,
        'Agustus' => 8,
        'September' => 9,
        'Oktober' => 10,
        "November" => 11,
        "Desember" => 12
    ];
?>
<div class="page has-sidebar-left height-full">
    <header class="blue accent-3 relative nav-sticky">
        <div class="container-fluid text-white">
            <div class="row p-t-b-10 ">
                <div class="col">
                    <h4>
                        <i class="icon-class"></i>
                        Presensi KBM
                    </h4>
                </div>
            </div>
            <div class="row">
                <ul class="nav responsive-tab nav-material nav-material-white" id="v-pills-tab">
                    <li>
                        <a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#kelas">
                            <i class="icon icon-home2"></i>Presensi Kelas</a>
                    </li>
                    <li>
                        <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#rekap">
                            <i class="icon icon-plus-circle mb-3"></i>Rekap Presensi</a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="container-fluid relative animatedParent animateOnce">
        <div class="tab-content pb-3" id="v-pills-tabContent">
            <div class="tab-pane animated fadeInUpShort show active" id="kelas">
                <!-- Info -->
                <div class="row text-white no-gutters my-3 shadow">
                    <div class="col-lg-3">
                        <div class="green counter-box p-40">
                            <div class="float-right">
                                <span class="icon icon-check-circle-o s-48"></span>
                            </div>
                            <div class="sc-counter s-36">1200</div>
                            <h6 class="counter-title">Siswa Masuk</h6>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blue1 counter-box p-40">
                            <div class="float-right">
                                <span class="icon icon-local_hospital s-48"></span>
                            </div>
                            <div class="sc-counter s-36">1200</div>
                            <h6 class="counter-title">Siswa Sakit</h6>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="sunfollower counter-box p-40">
                            <div class="float-right">
                                <span class="icon icon-directions_run s-48"></span>
                            </div>
                            <div class="sc-counter s-36">1200</div>
                            <h6 class="counter-title">Siswa Izin</h6>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="strawberry counter-box p-40">
                            <div class="float-right">
                                <span class="icon icon-times-circle-o s-48"></span>
                            </div>
                            <div class="sc-counter s-36">550</div>
                            <h6 class="counter-title">Siswa Absen</h6>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3 no-b">
                            <div class="card-body">
                                <div class="card-title">Filter Presensi</div>
                                <form class="form-inline">
                                    <label class="mr-2">Pilih Kelas</label>
                                    <select class="form-control-sm" name="kelas">
                                        <option>-- Kelas --</option>
                                        <option>7-A</option>
                                        <option>7-B</option>
                                        <option>7-C</option>
                                        <option>7-D</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3 mb-3 no-b">
                            <div class="card-body">
                                <div class="card-title">Presensi Hari Ini</div>
                                <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Siswa</th>
                                            <th>Jenis Kel</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>John Doe</td>
                                            <td>L</td>
                                            <td>Sakit</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>John</td>
                                            <td>L</td>
                                            <td>Hadir</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Doe</td>
                                            <td>L</td>
                                            <td>Hadir</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane animated fadeInUpShort" id="rekap">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card mt-3 no-b">
                            <div class="card-body">
                                <div class="card-title">Filter Presensi</div>
                                <form class="form-inline mb-3">
                                    <label class="mr-2">Pilih Kelas</label>
                                    <select class="form-control mr-4" name="kelas">
                                        <option>-- Kelas --</option>
                                        <option>7-A</option>
                                        <option>7-B</option>
                                        <option>7-C</option>
                                        <option>7-D</option>
                                    </select>

                                    <label class="mr-2">Rekap Berdasarkan</label>
                                    <select class="form-control mr-4" name="per" onchange="rekapAbsensi(this.value)">
                                        <option value="">-- Pilih --</option>
                                        <option value="hari">Hari</option>
                                        <option value="bulan">Bulan</option>
                                        <option value="semester">Semester</option>
                                    </select>
                                </form>
                                <form class="form-inline" id="perHari">
                                    <label class="mr-2">Tanggal</label>
                                    <div class="input-group mr-2">
                                        <input type="text" class="date-time-picker form-control"
                                               data-options='{"timepicker":false, "format":"d-m-Y"}' value="<?php echo $dateNow ?>"/>
                                        <span class="input-group-append">
                                            <span class="input-group-text add-on white">
                                                <i class="icon-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <label class="mr-2">s/d</label>
                                    <div class="input-group mr-2">
                                        <input type="text" class="date-time-picker form-control"
                                               data-options='{"timepicker":false, "format":"d-m-Y"}' value="<?php echo $dateNow ?>"/>
                                        <span class="input-group-append">
                                            <span class="input-group-text add-on white">
                                                <i class="icon-calendar"></i>
                                            </span>
                                        </span>
                                    </div>
                                    <button onclick="filterPresensi('hari')" type="button" class="btn btn-primary">Filter</button>
                                </form>
                                <form class="form-inline" id="perBulan">
                                    <label class="mr-2">Bulan</label>
                                    <select class="form-control mr-4" name="bulan">
                                        <?php foreach($month as $key=>$value) { ?>
                                            <option value="<?php echo $value ?>"><?php echo $key ?></option>
                                        <?php } ?>
                                    </select>
                                
                                    <label class="mr-2">Tahun</label>
                                    <select class="form-control mr-4" name="bulan">
                                        <option value="0">-- Tahun --</option>
                                        <?php for($i=$yearNow; $i>$yearNow-5; $i--) { ?>
                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>
                                    <button onclick="filterPresensi('bulan')" type="button" class="btn btn-primary">Filter</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#perHari').hide();
        $('#perBulan').hide();
    });

    function rekapAbsensi(val) {
        let filter = val;
        if(filter == "hari") {
            $('#perHari').show();
            $('#perBulan').hide();
        } else if(filter == "bulan") {
            $('#perHari').hide();
            $('#perBulan').show();
        } else {
            $('#perHari').hide();
            $('#perBulan').hide();
        }
    }
</script>