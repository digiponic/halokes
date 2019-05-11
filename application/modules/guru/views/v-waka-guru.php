<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Lihat Data <small>Guru</small></h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Guru</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Lihat Data</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#tambah-guru" class="btn btn-primary" style="margin-bottom: 15px">Tambah Guru</button>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject uppercase"> Data Guru</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Guru</th>
                                <th>Jkel</th>
                                <th>Status Guru</th>
                                <th>Golongan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($guru->result() as $row) { 
                                    if($row->jkel == "L") {
                                        $jkel = "Laki-laki";
                                    } else {
                                        $jkel = "Perempuan";
                                    }
                                     
                                    if($row->status_guru == 1) {
                                        $stts = "Guru Tetap";
                                    } else if($row->status_guru == 0) {
                                        $stts = "Guru Tidak Tetap";
                                    }
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nip ?></td>
                                <td>
                                    <a href="#"><?php echo $row->nama_guru ?></a>
                                </td>
                                <td><?php echo $jkel ?></td>
                                <td><?php echo $stts ?></td>
                                <td><?php echo $row->golongan ?></td>
                                <td>
                                    <a href="<?php echo site_url('guru/hapus_guru/'.$row->nip) ?>" class="btn red btn-xs btn-outline">Hapus</a>
                                </td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-guru" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?php echo site_url('guru/tambah_guru') ?>" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Guru</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">NIP</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nip" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Guru</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Gelar Depan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="gelar_dpn" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Gelar Belakang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="gelar_blkg" autocomplete="off">
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
                            <input class="form-control form-control-inline input-medium date-picker" size="16" type="text" name="tgllahir" autocomplete="off">
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
                            <label class="control-label col-md-3">Golongan</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="golongan" autocomplete="off">
                                <div class="mt-checkbox-list" style="margin-top: 10px; margin-bottom: -20px">
                                    <label class="mt-checkbox">
                                        <input type="checkbox" name="tdk_golongan" value="1"> Tidak Ada
                                        <span></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Status Guru</label>
                            <div class="col-md-8">
                                <select class="form-control" name="stts_gr">
                                    <option>-- Pilih Status Guru --</option>
                                    <option value="0">Guru Tidak Tetap</option>
                                    <option value="1">Guru Tetap</option>
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