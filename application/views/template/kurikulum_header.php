<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url() ?>assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body class="light">
<!-- Pre loader -->
<div id="loader" class="loader">
    <div class="plane-container">
        <div class="preloader-wrapper small active">
            <div class="spinner-layer spinner-blue">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-yellow">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>

            <div class="spinner-layer spinner-green">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                <div class="circle"></div>
            </div><div class="circle-clipper right">
                <div class="circle"></div>
            </div>
            </div>
        </div>
    </div>
</div>
<div id="app">
<aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
    <section class="sidebar">
        <div class="w-80px mt-3 mb-3 ml-3">
            <img src="<?php echo base_url() ?>assets/img/basic/logo.png" alt="">
        </div>
        <div class="relative">
            <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
               aria-controls="userSettingsCollapse" class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                <i class="icon icon-cogs"></i>
            </a>
            <div class="user-panel p-3 light mb-2">
                <div>
                    <div class="float-left image">
                        <img class="user_avatar" src="<?php echo base_url() ?>assets/img/dummy/u2.png" alt="User Image">
                    </div>
                    <div class="float-left info">
                        <h6 class="font-weight-light mt-2 mb-1">Alexander Pierce</h6>
                        <a href="#">2018/2019 Smt Genap</a>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="collapse multi-collapse" id="userSettingsCollapse">
                    <div class="list-group mt-3 shadow">
                        <a href="index.html" class="list-group-item list-group-item-action ">
                            <i class="mr-2 icon-umbrella text-blue"></i>Profil
                        </a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-cogs text-yellow"></i>Pengaturan</a>
                        <a href="#" class="list-group-item list-group-item-action"><i
                                class="mr-2 icon-security text-purple"></i>Ganti Password</a>
                    </div>
                </div>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="treeview">
                <a href="<?php echo site_url('dashboard') ?>">
                <i class="icon icon-dashboard2 blue-text s-18"></i> 
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="icon icon-school blue-text s-18"></i> 
                    <span>Kegiatan Belajar Mengajar</span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo site_url('ekstrakurikuler') ?>">
                <i class="icon icon-basketball blue-text s-18"></i> 
                    <span>Ekstrakurikuler</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-class blue-text s-18"></i>
                    <span>Presensi</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('presensi/kbm') ?>"><i class="icon icon-circle-o"></i>Presensi KBM</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Presensi Ekstrakurikuler</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-user-circle-o  blue-text s-18"></i>
                    <span>Pengajar (Guru)</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo site_url('guru/pengajar') ?>"><i class="icon icon-circle-o"></i>Data Pengajar</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Silabus / RPP</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Program Semester</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-note blue-text s-18"></i>
                    <span>Penilaian</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-circle-o"></i>Penilaian KBM</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Penilaian Ekstrakurikuler</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                <i class="icon icon-notebook blue-text s-18"></i> 
                    <span>Raport Siswa</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-timelapse blue-text s-18"></i>
                    <span>Kurikulum</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-circle-o"></i>Grup Kurikulum</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Grup Mata Pelajaran</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Data Mata Pelajaran</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Ekstrakurikuler</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-cog blue-text s-18"></i>
                    <span>Distribusi</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-circle-o"></i>Atur Wali Kelas</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Atur Guru Pengajar</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Atur Pembina Ekstrakurikuler</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Atur Anggota Ekstrakurikuler</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="icon icon-calendar blue-text s-18"></i>
                    <span>Penjadwalan</span>
                    <i class="icon icon-angle-left s-18 pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="icon icon-circle-o"></i>Jadwal Pelajaran</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Jadwal Ekstrakurikuler</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Jadwal Ujian</a></li>
                    <li><a href="#"><i class="icon icon-circle-o"></i>Kalender Akademik</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
<!--Sidebar End-->
<div class="has-sidebar-left">
    <div class="pos-f-t">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-dark pt-2 pb-2 pl-4 pr-2">
                <div class="search-bar">
                    <input class="transparent s-24 text-white b-0 font-weight-lighter w-128 height-50" type="text"
                           placeholder="start typing...">
                </div>
                <a href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-expanded="false"
                   aria-label="Toggle navigation" class="paper-nav-toggle paper-nav-white active "><i></i></a>
            </div>
        </div>
    </div>
    <div class="sticky">
        <div class="navbar navbar-expand navbar-dark d-flex justify-content-between bd-navbar blue accent-3">
            <div class="relative">
                <a href="#" data-toggle="push-menu" class="paper-nav-toggle pp-nav-toggle">
                    <i></i>
                </a>
            </div>
            <!--Top Menu Start -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Messages-->
                    <li class="dropdown custom-dropdown messages-menu">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                               <i class="icon-message "></i>
                               <span class="badge badge-success badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu pl-2 pr-2">
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="<?php echo base_url() ?>assets/img/dummy/u4.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="<?php echo base_url() ?>assets/img/dummy/u1.png" alt="">
                                                <span class="avatar-badge online"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="<?php echo base_url() ?>assets/img/dummy/u2.png" alt="">
                                                <span class="avatar-badge idle"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                    <!-- start message -->
                                    <li>
                                        <a href="#">
                                            <div class="avatar float-left">
                                                <img src="<?php echo base_url() ?>assets/img/dummy/u3.png" alt="">
                                                <span class="avatar-badge busy"></span>
                                            </div>
                                            <h4>
                                                Support Team
                                                <small><i class="icon icon-clock-o"></i> 5 mins</small>
                                            </h4>
                                            <p>Why not buy a new awesome theme?</p>
                                        </a>
                                    </li>
                                    <!-- end message -->
                                </ul>
                            </li>
                            <li class="footer s-12 p-2 text-center"><a href="#">See All Messages</a></li>
                        </ul>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown custom-dropdown notifications-menu">
                        <a href="#" class=" nav-link" data-toggle="dropdown" aria-expanded="false">
                            <i class="icon-notifications "></i>
                            <span class="badge badge-danger badge-mini rounded-circle">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-success"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-danger"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="icon icon-data_usage text-yellow"></i> 5 new members joined today
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer p-2 text-center"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="nav-link " data-toggle="collapse" data-target="#navbarToggleExternalContent"
                           aria-controls="navbarToggleExternalContent"
                           aria-expanded="false" aria-label="Toggle navigation">
                            <i class=" icon-search3 "></i>
                        </a>
                    </li>
                    <!-- Right Sidebar Toggle Button -->
                    <li>
                        <a class="nav-link ml-2" data-toggle="control-sidebar">
                            <i class="icon-tasks "></i>
                        </a>
                    </li>
                    <!-- User Account-->
                    <li class="dropdown custom-dropdown user user-menu ">
                        <a href="#" class="nav-link" data-toggle="dropdown">
                            <img src="<?php echo base_url() ?>assets/img/dummy/u8.png" class="user-image" alt="User Image">
                            <i class="icon-more_vert "></i>
                        </a>
                        <div class="dropdown-menu p-4 dropdown-menu-right">
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col"><a href="#">
                                    <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                    <div class="pt-1">Profile</div>
                                </a></div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-star light-green lighten-1 avatar  r-5"></i>
                                        <div class="pt-1">Favourites</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-save2 orange accent-1 avatar  r-5"></i>
                                        <div class="pt-1">Saved</div>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting grey darken-3 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                            <hr>
                            <div class="row box justify-content-between my-4">
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-apps purple lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Apps</div>
                                    </a>
                                </div>
                                <div class="col"><a href="#">
                                    <i class="icon-beach_access pink lighten-1 avatar  r-5"></i>
                                    <div class="pt-1">Profile</div>
                                </a></div>
                                <div class="col">
                                    <a href="#">
                                        <i class="icon-perm_data_setting indigo lighten-2 avatar  r-5"></i>
                                        <div class="pt-1">Settings</div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>