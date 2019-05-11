<?php 
    if($kelas === false) {
        $numKelas = 0;
    } else {
        $numKelas = $kelas->num_rows;
    }
?>
<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Data Kelas</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <span class="active">Data Kelas</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-12">
            
            <a class="dashboard-stat dashboard-stat-v2 blue" style="cursor: default;">
                <div class="visual">
                    <i class="fa fa-building"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span data-counter="counterup" data-value="<?php echo $numKelas ?>">
                            <?php echo $numKelas ?>
                        </span>
                    </div>
                    <div class="desc"> Jumlah Kelas </div>
                </div>
            </a>
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <span class="caption-subject uppercase"> Filter</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <form id="tahunAjaran">
                        <div class="form-body">
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="">-- Tahun Ajaran --</option>
                                    <?php foreach($tapel->result() as $row) { ?>
                                        <option value="<?php echo $row->id_tapel ?>"><?php echo $row->nama_tapel ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="form-control">
                                    <option value="">-- Tingkat --</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-key font-dark"></i>
                        <span class="caption-subject uppercase"> Data Kelas</span>
                    </div>
                    <div class="actions">
                        <button class="btn green btn-xs btn-outline" data-toggle="modal" data-target="#daftar-kelas">Kelas Tersedia</button>
                        <a class="btn blue btn-xs btn-outline" href="#">Atur Kelas</a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Tingkat</th>
                                <th>Ruang</th>
                                <th>Wali Kelas</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if($kelas === false) {
                                    echo "<tr><td colspan=5 align='center'>Pilih Tapel Terlebih Dahulu</td></tr>";
                                } else {
                                    $no = 1;
                                    foreach($kelas->result() as $row) { ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $no ?></td>
                                            <td>
                                                <a href="kelas_detail.php?id=1"><?php echo $row->nama_kelas ?></a>
                                            </td>
                                            <td><?php echo $row->tingkat ?></td>
                                            <td><?php echo $row->ruang ?></td>
                                            <td><?php echo $row->nama_guru ?></td>
                                        </tr>
                                    <?php
                                    $no++;
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-kelas" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo form_open('kelas/tambah_kelas', array("class" => "form-horizontal")) ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Kelas</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tingkat</label>
                            <div class="col-md-8">
                                <select class="form-control" name="tingkat">
                                    <option>-- Pilih Tingkat --</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Abjad</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="abjad">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Ruang</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="ruang">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                    <button type="submit" class="btn green">Submit</button>
                </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>

<div id="daftar-kelas" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Daftar Kelas Tersedia</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <button data-toggle="modal" data-dismiss="modal" data-target="#tambah-kelas" class="btn btn-primary">Tambah Kelas</button>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center"><b>Tingkat 7</b></p>
                        <table class="table table-bordered">
                            <?php foreach($kelas7->result() as $row) { ?> 
                                <tr><td class="text-center"><?php echo $row->nama_kelas ?></td></tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center"><b>Tingkat 8</b></p>
                        <table class="table table-bordered">
                            <?php foreach($kelas8->result() as $row) { ?> 
                                <tr><td class="text-center"><?php echo $row->nama_kelas ?></td></tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <p class="text-center"><b>Tingkat 9</b></p>
                        <table class="table table-bordered">
                            <?php foreach($kelas9->result() as $row) { ?> 
                                <tr><td class="text-center"><?php echo $row->nama_kelas ?></td></tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
                        
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
            </div>
        </div>
    </div>
</div>