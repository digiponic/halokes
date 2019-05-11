<?php 
    date_default_timezone_set("Asia/Jakarta");
    $row = $siswa->row(); 
?>

<div class="page-content">
    <div class="page-head">
        <div class="page-title">
            <h1>Ringkasan</h1>
        </div>
    </div>
    <ul class="page-breadcrumb breadcrumb">
        <li>
            <span class="active">Ringkasan</span>
        </li>
    </ul>
    
    <div class="row">
        <div class="col-md-12">
            <div class="profile-content">
                <div class="portlet light bordered">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-badge font-dark"></i>
                            <span class="caption-subject font-dark uppercase"> Ringkasan Akademik</span>
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