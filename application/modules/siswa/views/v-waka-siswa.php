<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Lihat Data <small>Siswa</small></h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Lihat Data</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#tambah-siswa" class="btn btn-primary" style="margin-bottom: 15px">Tambah Siswa</button>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject uppercase"> Data Siswa</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NISN</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Jkel</th>
                                <th>Tahun Masuk</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1; 
                                foreach($siswa->result() as $row) {
                                    if($row->jkel == "L") {
                                        $jkel = "Laki-laki";
                                    } else {
                                        $jkel = "Perempuan";
                                    }

                                    if($row->status_siswa == 1) {
                                        $sttss = "Calon Siswa"; 
                                        $lbl = "info";
                                    } elseif($row->status_siswa == 2) {
                                        $sttss = "Siswa"; 
                                        $lbl = "success";
                                    } elseif($row->status_siswa == 3) {
                                        $sttss = "Lulus"; 
                                        $lbl = "default";
                                    } elseif($row->status_siswa == 4) {
                                        $sttss = "Mutasi"; 
                                        $lbl = "danger";
                                    }
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nisn ?></td>
                                <td><?php echo $row->nis ?></td>
                                <td>
                                    <a href="<?php echo site_url('siswa/detail/'.$row->nisn) ?>">
                                        <?php echo $row->nama_siswa ?>
                                    </a>
                                </td>
                                <td><?php echo $jkel ?></td>
                                <td><?php echo $row->tahun_masuk ?></td>
                                <td><span class="label label-sm label-<?php echo $lbl ?>"><?php echo $sttss ?></span></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-siswa" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?php echo site_url('siswa/tambah_siswa') ?>" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Siswa</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">NISN</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nisn" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">NIS</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nis" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Siswa</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tempat Lahir</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="tempat_lahir" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tanggal Lahir</label>
                            <div class="col-md-8">
                            <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgllahir">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Alamat</label>
                            <div class="col-md-8">
                                <textarea name="alamat" rows="6" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis Kelamin</label>
                            <div class="col-md-8">
                                <div class="mt-radio-inline">
                                    <label class="mt-radio">
                                        <input type="radio" name="jkel" value="L" style="margin-right: 5px"> Laki-laki 
                                        <span></span>
                                    </label>
                                    <label class="mt-radio">
                                        <input type="radio" name="jkel" value="P"> Perempuan
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Agama</label>
                            <div class="col-md-8">
                                <select class="form-control" name="agama">
                                    <option>-- Pilih Agama --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen Protestan">Kristen Protestan</option>
                                    <option value="Kristen Katholik">Kristen Katholik</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Budha">Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Masuk</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="tahun">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">No HP</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="nohp">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Email</label>
                            <div class="col-md-8">
                                <input class="form-control" type="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status Siswa</label>
                            <div class="col-md-8">
                                <select class="form-control" name="stts_sw">
                                    <option>-- Pilih Status --</option>
                                    <option value="1">Calon Siswa</option>
                                    <option value="2">Siswa</option>
                                    <option value="3">Lulus</option>
                                    <option value="4">Mutasi</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                    <button type="submit" class="btn green">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>