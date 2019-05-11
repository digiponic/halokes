<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Atur Sanksi</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="#">Data Siswa</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Atur Sanksi</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <button data-toggle="modal" data-target="#tambah-sanksi" class="btn btn-primary" style="margin-bottom: 15px">Tambah Sanksi</button>
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject uppercase"> Atur Sanksi</span>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Bentuk Sanksi</th>
                                <th>Jenis</th>
                                <th>Poin</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no=1; 
                                foreach($sanksi->result() as $row) { 
                                    if($row->jenis_sanksi == "ringan") {
                                        $label = "info";
                                    } else if($row->jenis_sanksi == "sedang") {
                                        $label = "warning";
                                    } else if($row->jenis_sanksi == "berat") {
                                        $label = "danger";
                                    }
                            ?>
                            <tr class="odd gradeX">
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->nama_sanksi ?></td>
                                <td>
                                    <span class="label label-xs label-<?php echo $label ?>">
                                        <?php echo strtoupper($row->jenis_sanksi) ?>
                                    </span>
                                </td>
                                <td><?php echo $row->poin ?></td>
                                <td>
                                    <a class="btn green btn-xs btn-outline">Edit</a>                                    
                                    <a href="<?php echo site_url('siswa/hapus_sanksi/'.$row->id_sanksi) ?>" class="btn red btn-xs btn-outline">Hapus</a>
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

<div id="tambah-sanksi" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="<?php echo site_url('siswa/tambah_sanksi') ?>" class="form-horizontal">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Sanksi</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-12 col-xs-12">ID Sanksi</label>
                            <div class="col-md-2 col-sm-3 col-xs-3" style="margin-right: -30px">
                                <input type="text" class="form-control" value="SNK-" readonly>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3">
                                <input type="text" class="form-control" name="no" value="<?php echo $lastid ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Bentuk Sanksi</label>
                            <div class="col-md-8 ">
                                <textarea class="form-control" name="bentuk" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Jenis</label>
                            <div class="col-md-8">
                                <select class="form-control" name="jenis">
                                    <option value="0">-- Pilih Jenis --</option>
                                    <option value="ringan">Ringan</option>
                                    <option value="sedang">Sedang</option>
                                    <option value="berat4">Berat</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Poin</label>
                            <div class="col-md-8">
                                <input class="form-control" type="number" name="poin">
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