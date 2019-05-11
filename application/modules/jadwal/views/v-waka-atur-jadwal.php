<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Atur Jadwal</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <a href="<?php echo site_url('jadwal') ?>">Jadwal Mengajar</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <span class="active">Atur Jadwal</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject font-dark sbold uppercase" style="padding-left: 5px">Atur Jadwal</span>
                    </div>
                </div>
                <div class="portlet-body form">
                    <form class="form-horizontal" role="form" method="post">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Hari</label>
                                <div class="col-md-9">
                                    <select class="form-control">
                                        <option value="-">-- Pilih Hari --</option>
                                        <option value="senin">Senin</option>
                                        <option value="selasa">Selasa</option>
                                        <option value="rabu">Rabu</option>
                                        <option value="kamis">Kamis</option>
                                        <option value="jumat">Jumat</option>
                                        <option value="sabtu">Sabtu</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <button type="submit" class="btn green">Atur</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>