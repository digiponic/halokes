<?php 
    date_default_timezone_set("Asia/Jakarta");
    $row = $siswa->row(); 
    if($row->jkel == "L") {
        $jkel = "Laki-laki";
    } else if($row->jkel == "P") {
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

<style type="text/css">
    th {
        width: 200px;
    }
</style>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Detail Data <small>Siswa</small></h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="<?php echo site_url('siswa/data') ?>">Lihat Data</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Detail Data Siswa</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <div class="profile-sidebar">
                <div class="portlet light profile-sidebar-portlet bordered">
                    <div class="profile-userpic">
                        <img src="<?php echo base_url() ?>assets/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                    </div>
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name"><?php echo $row->nama_siswa ?></div>
                        <div class="profile-usertitle-job"><?php echo $row->nis ?></div>
                    </div>
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-circle green btn-sm bold">EDIT</button>
                        <button type="button" class="btn btn-circle red btn-sm bold" data-toggle="modal" data-target="#mutasi">MUTASI</button>
                    </div>
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="<?php echo site_url('siswa/detail/'.$row->nisn) ?>">
                                    <i class="icon-user"></i> Informasi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('siswa/akademik/'.$row->nisn) ?>">
                                    <i class="icon-badge"></i> Data Akademik</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('siswa/sanksi/'.$row->nisn) ?>">
                                    <i class="icon-close"></i> Data Sanksi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile-content">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-user font-dark"></i>
                            <span class="caption-subject font-dark uppercase"> Informasi</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Nama Lengkap</th>
                                <td><?php echo $row->nama_siswa ?></td>
                            </tr>
                            <tr>
                                <th>Tanggal Lahir</th>
                                <td><?php echo date("d-m-Y", strtotime($row->tgl_lahir)); ?></td>
                            </tr>
                            <tr>
                                <th>Tempat Lahir</th>
                                <td><?php echo $row->tempat_lahir ?></td>
                            </tr>
                            <tr>
                                <th>Alamat</th>
                                <td><?php echo $row->alamat ?></td>
                            </tr>
                            <tr>
                                <th>Jenis Kelamin</th>
                                <td><?php echo $jkel ?></td>
                            </tr>
                            <tr>
                                <th>No HP</th>
                                <td><?php echo $row->no_hp ?></td>
                            </tr>
                            <tr>
                                <th>E-mail</th>
                                <td><?php echo $row->email ?></td>
                            </tr>
                            <tr>
                                <th>Agama</th>
                                <td><?php echo $row->agama ?></td>
                            </tr>
                            <tr>
                                <th>Tahun Masuk</th>
                                <td><?php echo $row->tahun_masuk ?></td>
                            </tr>
                            <tr>
                                <th>Status Siswa</th>
                                <td><span class="label label-sm label-<?php echo $lbl ?>"><?php echo $sttss ?></span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-users font-dark"></i>
                            <span class="caption-subject font-dark uppercase"> Informasi Orang Tua & Wali</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-bordered table-hover">
                            <tr>
                                <th>Nama Ayah</th>
                                <td><?php echo $row->nama_ayah ?></td>
                            </tr>
                            <tr>
                                <th>Nama Ibu</th>
                                <td><?php echo $row->nama_ibu ?></td>
                            </tr>
                            <tr>
                                <th>Alamat Orang Tua</th>
                                <td>Jl. Wijaya Barat No. 108, RT 03 RW 03, Pagentan, Singosari</td>
                            </tr>
                            <tr>
                                <th>Nama Wali</th>
                                <td><?php echo $row->nama_wali ?></td>
                            </tr>
                            <tr>
                                <th>No HP Wali</th>
                                <td><?php echo $row->no_hp_wali ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="mutasi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?php echo site_url('siswa/tambah_mutasi') ?>" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Mutasi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Alasan</label>
                            <div class="col-md-8">
                                <select class="form-control" name="alasan">
                                    <option>-- Pilih Alasan --</option>
                                    <option value="Dikeluarkan">Dikeluarkan</option>
                                    <option value="Mengundurkan Diri">Mengundurkan Diri</option>
                                    <option value="Meninggal Dunia">Meninggal Dunia</option>
                                    <option value="Pindah Sekolah">Pindah Sekolah</option>
                                    <option value="Pindah Tempat Tinggal">Pindah Tempat Tinggal</option>
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