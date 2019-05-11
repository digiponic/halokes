<?php 
    $num = $tasmt_active->num_rows();

    if($num == 0) {
        $show = "-";
        $act = "choose";
    } else {
        $row = $tasmt_active->row();

        $show = $row->nama_tapel;
        $act = "non-active";
    }
?>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Tahun Ajaran &amp; Semester</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <span class="active">Tahun Ajaran &amp; Semester</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-3">
            <button data-toggle="modal" data-target="#tambah-tas" class="btn btn-primary" style="margin-bottom: 15px">Tambah TA SMT</button>
            <a class="dashboard-stat dashboard-stat-v2 blue" data-toggle="modal" data-target="#aktif-tapel">
                <div class="visual">
                    <i class="fa fa-book"></i>
                </div>
                <div class="details">
                    <div class="number">
                        <span style="font-size: 25px; font-weight: bold"><?php echo $show ?></span>
                    </div>
                    <div class="desc"> TA-Semester Aktif</div>
                </div>
            </a>
        </div>
        <div class="col-md-9">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-notebook font-dark"></i>
                        <span class="caption-subject uppercase"> Data TA &amp; Semester</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tahun Ajaran</th>
                                <th>Semester</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($tasmt->result() as $row) { 
                                    if($row->status == 0) {
                                        $stts = "Tidak Aktif";
                                    } else if($row->status == 1) {
                                        $stts = "Aktif";
                                    }
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no ?></td>
                                <td>
                                    <a href="#"><?php echo $row->nama_tapel ?></a>
                                </td>
                                <td><?php echo ucfirst($row->semester) ?></td>
                                <td><?php echo $stts ?></td>
                            </tr>
                            <?php $no++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="tambah-tas" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo form_open('ta_semester/tambah_tas', array("class" => "form-horizontal")) ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah TA/Semester</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Awal</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="taw">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Tahun Akhir</label>
                            <div class="col-md-8">
                                <input type="number" class="form-control" name="tak">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Semester</label>
                            <div class="col-md-8">
                                <select class="form-control" name="semester">
                                    <option>-- Pilih Semester --</option>
                                    <option value="ganjil">Ganjil</option>
                                    <option value="genap">Genap</option>
                                </select>
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

<div id="aktif-tapel" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Status Tahun Pelajaran</h4>
            </div>
            <?php if($act == "choose") { ?>
                <?php echo form_open('ta_semester/aktifkanTapel', array("class" => "form-horizontal")) ?>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Tapel - Smt</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="tapel_smt">
                                        <option value="0">-- Pilih Tapel - Smt --</option>
                                        <?php foreach($tasmt->result() as $row2) { ?>
                                            <option value="<?php echo $row2->id_tapel ?>">
                                                <?php echo $row2->nama_tapel ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" style="margin: 0 20px 0 20px">
                                <button type="submit" class="btn green btn-block btn-lg">AKTIFKAN</button>
                            </div>
                        </div>
                    </div>
                <?php echo form_close() ?>
            <?php } else if($act == "non-active") { ?> 
                <?php echo form_open('ta_semester/nonaktifkanTapel', array("class" => "form-horizontal")) ?>
                    <div class="modal-body">
                        <div class="form-body">
                            <div class="form-group" style="margin: 0 20px 0 20px">
                                <button type="submit" class="btn red btn-block btn-lg">NON-AKTIFKAN</button>
                            </div>
                        </div>
                    </div>
                <?php echo form_close() ?>
            <?php } ?>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
            </div>
        </div>
    </div>
</div>