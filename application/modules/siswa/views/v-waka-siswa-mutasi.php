<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Siswa <small>Mutasi</small></h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Siswa Mutasi</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#mutasi" class="btn btn-danger" style="margin-bottom: 15px">Tambah Siswa Mutasi</button>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject uppercase"> Data Siswa Mutasi</span>
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
                                <th>Alasan Mutasi</th>
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
                                <td><?php echo $row->alasan_mutasi ?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
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
                    <h4 class="modal-title">Mutasi Siswa</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">NISN</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nisn" autocomplete="off" id="nisn">
                                    <span class="input-group-btn">
                                        <button class="btn blue" type="button">Cari</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama</label>
                            <div class="col-md-8">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="nama" autocomplete="off" id="nama">
                                    <span class="input-group-btn">
                                        <button class="btn blue" type="button">Cari</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div id="data-siswa"></div>
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