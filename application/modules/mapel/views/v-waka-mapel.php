<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Data Mata Pelajaran</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <span class="active">Data Mata Pelajaran</span>
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
                        <span data-counter="counterup" data-value="<?php echo $numMapel ?>">0</span>
                    </div>
                    <div class="desc"> Jumlah Mapel </div>
                </div>
            </a>
        </div>
        <div class="col-md-9 col-sm-12 col-xs-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-users font-dark"></i>
                        <span class="caption-subject uppercase"> Data Mata Pelajaran</span>
                    </div>
                    <div class="actions">
                        <button class="btn blue btn-xs btn-outline" data-toggle="modal" data-target="#tambah-mapel">Tambah Mapel</button>
                    </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover order-column" id="sample_3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode</th>
                                <th>Nama Mapel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($mapel->result() as $row) { ?> 
                            <tr class="odd gradeX">
                                <td><?php echo $no ?></td>
                                <td><?php echo $row->id_mapel ?></td>
                                <td>
                                    <a href="#"><?php echo $row->nama_mapel ?></a>
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

<div id="tambah-mapel" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <?php echo form_open('mapel/tambah_mapel', array("class" => "form-horizontal")) ?>
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tambah Mapel</h4>
                </div>
                <div class="modal-body">
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Nama Mapel</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control" name="nama_mapel">
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