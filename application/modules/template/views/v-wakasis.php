<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8" />
        <title>ISKU | Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url() ?>assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url() ?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url() ?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url() ?>assets/pages/css/error.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url() ?>assets/pages/css/profile.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url() ?>assets/layouts/layout4/css/themes/light.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url() ?>assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <!-- END HEAD -->

    <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">
        <div class="page-header navbar navbar-fixed-top">
            <div class="page-header-inner ">
                <div class="page-logo">
                    <a href="index-2.html">
                        <p class="judul" style="
                            font-size: 26px;
                            font-weight: bold;
                            text-decoration: none;
                        ">ISKU</p>
                    </a>
                    <div class="menu-toggler sidebar-toggler">
                        <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
                    </div>
                </div>
                <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse"> </a>
                <div class="page-actions">
                    <?php 
                        $nums = $tasmtActive->num_rows();

                        if($nums == 0) {
                            $nmTapel = "-";
                        } else {
                            $row2 = $tasmtActive->row();
                            $nmTapel = $row2->nama_tapel;
                        }
                    ?>
                    <div class="btn-group">
                        <button type="button" class="btn red-haze btn-sm">
                            <span class="hidden-sm hidden-xs"><?php echo "Tahun Pelajaran : ".$nmTapel ?></span>
                        </button>
                    </div>
                </div>
                <div class="page-top">
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <li class="separator hide"> </li>
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user dropdown-dark">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile">
                                        <?php 
                                            if($user->gelar_depan == NULL) {
                                                $nm_user = $user->nama_guru." ".$user->gelar_belakang;
                                            } else {
                                                $nm_user = $user->gelar_depan." ".$user->nama_guru." ".$user->gelar_belakang;
                                            }
                                            
                                            echo $nm_user; 
                                        ?>                                    
                                    </span>
                                    <img alt="" class="img-circle" src="<?php echo base_url() ?>assets/layouts/layout4/img/avatar9.jpg" /> </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a><i class="icon-user"></i> Kesiswaan</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="<?php echo site_url('logout') ?>">
                                            <i class="icon-key"></i> Log Out 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"> </div>

        <div class="page-container">
            <div class="page-sidebar-wrapper">
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <li class="nav-item start ">
                            <a href="<?php echo site_url('dashboard') ?>" class="nav-link">
                                <i class="icon-home"></i>
                                <span class="title">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-users"></i>
                                <span class="title">Data Siswa</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('siswa/data') ?>" class="nav-link">
                                        <i class="icon-magnifier"></i>
                                        <span class="title">Lihat Data</span>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="psb.php" class="nav-link">
                                        <i class="icon-user-follow"></i>
                                        <span class="title">Siswa Baru</span>
                                    </a>
                                </li> -->
                                <li class="nav-item">
                                    <a href="<?php echo site_url('siswa/mutasi') ?>" class="nav-link">
                                        <i class="icon-direction"></i>
                                        <span class="title">Siswa Mutasi</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo site_url('siswa/atur_sanksi') ?>" class="nav-link">
                                        <i class="icon-close"></i>
                                        <span class="title">Atur Sanksi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link">
                                <i class="icon-users"></i>
                                <span class="title">Data Guru</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="<?php echo site_url('guru/data') ?>" class="nav-link ">
                                        <i class="icon-magnifier"></i>
                                        <span class="title">Lihat Data</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="<?php echo site_url('guru/guru_piket') ?>" class="nav-link ">
                                        <i class="icon-user"></i>
                                        <span class="title">Guru Piket</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('kelas/data') ?>" class="nav-link">
                                <i class="icon-key"></i>
                                <span class="title">Data Kelas</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('mapel/data') ?>" class="nav-link">
                                <i class="icon-book-open"></i>
                                <span class="title">Data Mata Pelajaran</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('jadwal') ?>" class="nav-link">
                                <i class="icon-calendar"></i>
                                <span class="title">Jadwal Mengajar</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:;" class="nav-link">
                                <i class="icon-star"></i>
                                <span class="title">Rekap Prestasi</span>
                                <span class="arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item">
                                    <a href="guru.php" class="nav-link ">
                                        <i class="icon-book-open"></i>
                                        <span class="title">Data Rapor</span>
                                    </a>
                                </li>
                                <li class="nav-item  ">
                                    <a href="guru_piket.php" class="nav-link ">
                                        <i class="icon-badge"></i>
                                        <span class="title">Data Lomba</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo site_url('ta_semester/data') ?>" class="nav-link">
                                <i class="icon-notebook"></i>
                                <span class="title">Tahun Ajaran &amp; Semester</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="icon-settings"></i>
                                <span class="title">Pengaturan</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="page-content-wrapper">
                <?php $this->load->view($namamodule.'/'.$namafileview); ?>
            </div>
        </div>
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; ISKU.</div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!--[if lt IE 9]>
        <script src="<?php echo base_url() ?>assets/global/plugins/respond.min.js"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/excanvas.min.js"></script> 
        <![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url() ?>assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url() ?>assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>

        <script src="<?php echo base_url() ?>assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url() ?>assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/pages/scripts/profile.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/pages/scripts/table-datatables-managed.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/pages/scripts/components-date-time-pickers.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url() ?>assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/layouts/layout4/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url() ?>assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>
</html>