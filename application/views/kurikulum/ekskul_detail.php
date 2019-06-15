<div class="page has-sidebar-left">
    <div>
        <header class="blue accent-3 relative">
            <div class="container-fluid text-white">
                <div class="row p-t-b-10 ">
                    <div class="col">
                        <div class="pb-3">
                            <div class="image mr-3  float-left">
                                <img class="user_avatar no-b no-p" src="<?php echo base_url() ?>assets/img/dummy/u6.png" alt="User Image">
                            </div>
                            <div>
                                <h3 class="p-t-10">Pramuka</h3>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <ul class="nav nav-material nav-material-white responsive-tab" id="v-pills-tab" role="tablist">
                        <li>
                            <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#informasi" role="tab" aria-controls="v-pills-home"><i class="icon icon-list"></i>Informasi</a>
                        </li>
                        <li>
                            <a class="nav-link" id="v-pills-payments-tab" data-toggle="pill" href="#anggota" role="tab" aria-controls="v-pills-payments" aria-selected="false"><i class="icon icon-user"></i>Anggota</a>
                        </li>
                        <li>
                            <a class="nav-link" id="v-pills-timeline-tab" data-toggle="pill" href="#kegiatan" role="tab" aria-controls="v-pills-timeline" aria-selected="false"><i class="icon icon-calendar"></i>Kegiatan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>

        <div class="container-fluid animatedParent animateOnce my-3">
            <div class="animated fadeInUpShort">
                <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active" id="informasi" role="tabpanel" aria-labelledby="v-pills-home-tab">
                       <div class="row">
                           <div class="col-md-3">
                               <div class="card mb-3">
                                   <div class="card-header bg-white">
                                       <strong class="card-title">Pembina</strong>
                                   </div>
                                   <ul class="no-b">
                                       <li class="list-group-item">
                                           <a href="">
                                               <div class="image mr-3 float-left">
                                                   <img class="user_avatar" src="<?php echo base_url() ?>assets/img/dummy/u3.png" alt="User Image">
                                               </div>
                                               <h6 class="p-t-10">Alexander Pierce</h6>
                                               <span><i class="icon-mobile-phone"></i>+62 896 506 91537</span>
                                           </a>
                                       </li>
                                   </ul>
                               </div>
                           </div>
                           <div class="col-md-9">
                               <div class="row">
                                   <div class="col-lg-4">
                                       <div class="card r-3">
                                           <div class="p-4">
                                                <div class="float-right">
                                                    <span class="icon-award s-48"></span>
                                                </div>
                                                <div class="counter-title">Prestasi</div>
                                                <h5 class="sc-counter mt-3">5</h5>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-4">
                                       <div class="card r-3">
                                           <div class="p-4">
                                                <div class="float-right">
                                                    <span class="icon-users s-48"></span>
                                                </div>
                                                <div class="counter-title ">Anggota</div>
                                                <h5 class="sc-counter mt-3">12</h5>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="col-lg-4">
                                       <div class="white card">
                                           <div class="p-4">
                                                <div class="float-right">
                                                    <span class="icon-calendar s-48"></span>
                                                </div>
                                                <div class="counter-title">Kegiatan</div>
                                                <h5 class="sc-counter mt-3">26</h5>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   <div class="tab-pane fade" id="anggota" role="tabpanel" aria-labelledby="v-pills-payments-tab">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card my-3 no-b">
                                    <div class="card-body">
                                        <div class="card-title">Data Anggota</div>
                                        <table id="example2" class="table table-bordered table-hover data-tables" data-options='{"paging": false; "searching":false}'>
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Anggota</th>
                                                    <th>NIS</th>
                                                    <th>Posisi</th>
                                                    <th>Status</th>
                                                    <th>Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Baja Khan</td>
                                                    <td>2132.2310.1</td>
                                                    <td>Ketua</td>
                                                    <td>Aktif</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">Detail</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Khan Sab</td>
                                                    <td>2132.2310.2</td>
                                                    <td>Wakil Ketua</td>
                                                    <td>Aktif</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary btn-xs">Detail</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div>
                   <div class="tab-pane fade" id="kegiatan" role="tabpanel" aria-labelledby="v-pills-timeline-tab">

                       <div class="row">
                           <div class="col-md-12">
                               <!-- The time line -->
                               <ul class="timeline">
                                   <!-- timeline time label -->
                                   <li class="time-label">
                      <span class="badge badge-danger r-3">
                        10 Feb. 2014
                      </span>
                                   </li>
                                   <!-- /.timeline-label -->
                                   <!-- timeline item -->
                                   <li>
                                       <i class="ion icon-envelope bg-primary"></i>
                                       <div class="timeline-item card">
                                           <div class="card-header white"><a href="#">Support Team</a> sent you an email    <span class="time float-right"><i class="ion icon-clock-o"></i> 12:05</span></div>
                                           <div class="card-body">
                                               Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                                               weebly ning heekya handango imeem plugg dopplr jibjab, movity
                                               jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                                               quora plaxo ideeli hulu weebly balihoo...
                                           </div>
                                           <div class="card-footer">
                                               <a class="btn btn-primary btn-xs">Read more</a>
                                               <a class="btn btn-danger btn-xs">Delete</a>
                                           </div>
                                       </div>
                                   </li>
                                   <!-- END timeline item -->
                                   <!-- timeline item -->
                                   <li>
                                       <i class="ion icon-user yellow"></i>

                                       <div class="timeline-item  card">

                                           <div class="card-header white"><h6><a href="#">Sarah Young</a> accepted your friend request<span class="float-right"><i class="ion icon-clock-o"></i> 5 mins ago</span></h6></div>


                                       </div>
                                   </li>
                                   <!-- END timeline item -->
                                   <!-- timeline item -->
                                   <li>
                                       <i class="ion icon-comments bg-danger"></i>

                                       <div class="timeline-item  card">


                                           <div class="card-header white"><h6><a href="#">Jay White</a> commented on your post   <span class="float-right"><i class="ion icon-clock-o"></i> 27 mins ago</span></h6></div>

                                           <div class="card-body">
                                               Take me to your leader!
                                               Switzerland is small and neutral!
                                               We are more like Germany, ambitious and misunderstood!
                                           </div>
                                           <div class="card-footer">
                                               <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                                           </div>
                                       </div>
                                   </li>
                                   <!-- END timeline item -->
                                   <!-- timeline time label -->
                                   <li class="time-label">
                      <span class="badge badge-success r-3">
                        3 Jan. 2014
                      </span>
                                   </li>
                                   <!-- /.timeline-label -->
                                   <!-- timeline item -->
                                   <li>
                                       <i class="ion icon-camera indigo"></i>

                                       <div class="timeline-item  card">

                                           <div class="card-header white"><a href="#">Mina Lee</a> uploaded new photos<span class="time float-right"><i class="ion icon-clock-o"></i> 2 days ago</span></div>


                                           <div class="card-body">
                                               <img src="http://placehold.it/150x100" alt="..." class="margin">
                                               <img src="http://placehold.it/150x100" alt="..." class="margin">
                                               <img src="http://placehold.it/150x100" alt="..." class="margin">
                                               <img src="http://placehold.it/150x100" alt="..." class="margin">
                                           </div>
                                       </div>
                                   </li>
                                   <!-- END timeline item -->
                                   <!-- timeline item -->
                                   <li>
                                       <i class="ion icon-video-camera bg-maroon"></i>

                                       <div class="timeline-item  card">
                                           <div class="card-header white"><a href="#">Mr. Doe</a> shared a video<span class="time float-right"><i class="ion icon-clock-o"></i> 5 days ago</span></div>


                                           <div class="card-body">
                                               <div class="embed-responsive embed-responsive-16by9">
                                                   <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" allowfullscreen="" frameborder="0"></iframe>
                                               </div>
                                           </div>
                                           <div class="card-footer">
                                               <a href="#" class="btn btn-xs bg-maroon">See comments</a>
                                           </div>
                                       </div>
                                   </li>
                                   <!-- END timeline item -->
                                   <li>
                                       <i class="ion icon-clock-o bg-gray"></i>
                                   </li>
                               </ul>
                           </div>
                           <!-- /.col -->
                       </div>
                   </div>
               </div>
            </div>
        </div>
    </div>
</div>