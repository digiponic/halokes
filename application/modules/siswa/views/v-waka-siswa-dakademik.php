<?php 
    date_default_timezone_set("Asia/Jakarta");
    $row = $siswa->row(); 
?>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Detail Data <small>Akademik</small></h1>
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
            <span class="active">Detail Data Akademik</span>
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
                            <li>
                                <a href="<?php echo site_url('siswa/detail/'.$row->nisn) ?>">
                                    <i class="icon-user"></i> Informasi</a>
                            </li>
                            <li class="active">
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
                            <i class="icon-badge font-dark"></i>
                            <span class="caption-subject font-dark uppercase"> Data Akademik</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Semester / TP</th>
                                <th>Jumlah</th>
                                <th>Rata-Rata</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php //$no = 1; foreach($siswa->result() as $row) { ?>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>Ganjil / 1718</td>
                                <td>345</td>
                                <td>88.5</td>
                                <td><button class="btn btn-xs btn-outline blue">Detail</button></td>
                            </tr>
                            <tr class="odd gradeX">
                                <td>2</td>
                                <td>Genap / 1718</td>
                                <td>365</td>
                                <td>86.2</td>
                                <td><button class="btn btn-xs btn-outline blue">Detail</button></td>
                            </tr>
                            <?php //$no++; } ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>