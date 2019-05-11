<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Guru Piket</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Guru</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Guru Piket</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-line" style="margin-bottom: 20px">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#daftar" data-toggle="tab">Guru Piket</a>
                    </li>
                    <li>
                        <a href="#jadwal" data-toggle="tab">Jadwal</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content">
                <div class="tab-pane active" id="daftar">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-users font-dark"></i>
                                        <span class="caption-subject uppercase"> Tugaskan Guru</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form action="<?php echo site_url('guru/tugas_piket') ?>" method="post">
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label class="control-label">Masukkan NIP</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="nip" autocomplete="off" id="nip">
                                                    <span class="input-group-btn">
                                                        <button class="btn blue" type="button">Cari</button>
                                                    </span>
                                                </div>
                                            </div>
                                            <div id="data-guru">
                                                <div class="form-group">
                                                    <label class="control-label">Hari</label>
                                                    <select name="hari" class="form-control">
                                                        <option>-- Pilih Hari --</option>
                                                        <option value="senin">Senin</option>
                                                        <option value="selasa">Selasa</option>
                                                        <option value="rabu">Rabu</option>
                                                        <option value="kamis">Kamis</option>
                                                        <option value="jumat">Jum'at</option>
                                                        <option value="sabtu">Sabtu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions right">
                                            <button type="submit" class="btn green">Tugaskan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-users font-dark"></i>
                                        <span class="caption-subject uppercase"> Guru Piket</span>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIP</th>
                                                <th>Nama Guru</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no=1; foreach($gpiket->result() as $row) { ?>
                                            <tr class="odd gradeX">
                                                <td><?php echo $no ?></td>
                                                <td><?php echo $row->nip ?></td>
                                                <td>
                                                    <a href="#"><?php echo $row->nama_guru ?></a>
                                                </td>
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
                <div class="tab-pane" id="jadwal">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <span class="caption-subject uppercase bold">SENIN</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php foreach($hr_senin->result() as $row_senin) { ?> 
                                                <tr><td><?php echo $row_senin->nama_guru ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <span class="caption-subject uppercase bold">SELASA</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php foreach($hr_selasa->result() as $row_selasa) { ?> 
                                                <tr><td><?php echo $row_selasa->nama_guru ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <span class="caption-subject uppercase bold">RABU</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php foreach($hr_rabu->result() as $row_rabu) { ?> 
                                                <tr><td><?php echo $row_rabu->nama_guru ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <span class="caption-subject uppercase bold">KAMIS</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php foreach($hr_kamis->result() as $row_kamis) { ?> 
                                                <tr><td><?php echo $row_kamis->nama_guru ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <span class="caption-subject uppercase bold">JUMAT</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php foreach($hr_jumat->result() as $row_jumat) { ?> 
                                                <tr><td><?php echo $row_jumat->nama_guru ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <span class="caption-subject uppercase bold">SABTU</span>
                                    </div>
                                    <div class="actions">
                                        <a class="btn btn-circle btn-icon-only btn-default" href="#">
                                            <i class="icon-wrench"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            <?php foreach($hr_sabtu->result() as $row_sabtu) { ?> 
                                                <tr><td><?php echo $row_sabtu->nama_guru ?></td></tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>