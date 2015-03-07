<?php
$data = Tugas::model()->getTotalTugas();
$total = count($data);
//print_r($data);
?>
<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
    <a href="<?php echo Yii::app()->createUrl('//site/index') ?>" class="dropdown-toggle">
        <i class="fa fa-users"></i>
        <span class="label label-success"><?php echo Peserta::model()->jmlGroup(); ?></span>
    </a>
</li>
<!--<li class="dropdown messages-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-envelope"></i>
        <span class="label label-success">4</span>
    </a>
    <ul class="dropdown-menu">
        <li class="header">You have 4 messages</li>
        <li>
             inner menu: contains the actual data 
            <ul class="menu">
                <li> start message 
                    <a href="#">
                        <div class="pull-left">
                            <img src="img/avatar3.png" class="img-circle" alt="User Image"/>
                        </div>
                        <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li> end message 
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="img/avatar.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="img/avatar2.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="pull-left">
                            <img src="img/avatar.png" class="img-circle" alt="user image"/>
                        </div>
                        <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                        </h4>
                        <p>Why not buy a new awesome theme?</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="footer"><a href="#">See All Messages</a></li>
    </ul>
</li>-->
<!-- Notifications: style can be found in dropdown.less -->
<!--<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-warning"></i>
        <span class="label label-warning"><?php // echo $total = Peserta::model()->cekJumlahPendingPeserta()              ?></span>
    </a>
        <ul class="dropdown-menu">
            <li class="header">Anda memiliki <?php // echo $total              ?> pemberitahuan</li>
            <li>
                 inner menu: contains the actual data 
                <ul class="menu">
                    <li>
                        <a href="#">
                            <i class="ion ion-ios7-people info"></i> 5 new members joined today
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-warning danger"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-users warning"></i> 5 new members joined
                        </a>
                    </li>
    
                    <li>
                        <a href="#">
                            <i class="ion ion-ios7-cart success"></i> 25 sales made
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="ion ion-ios7-person danger"></i> You changed your username
                        </a>
                    </li>
                </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
        </ul>
</li>-->
<!-- Tasks: style can be found in dropdown.less -->
<li class="dropdown tasks-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-tasks"></i>
        <span class="label label-danger"><?php echo $total; ?></span>
    </a>
    <?php if($total>0) : ?>
    <ul class="dropdown-menu">
        <li class="header">Terdapat  <?php echo $total ?> tugas anda yang masih memiliki waktu untuk dikerjakan</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class="menu">
                <?php foreach ($data as $dt) : ?>
                    <li><!-- Task item -->
                        <a href="<?php echo Yii::app()->createUrl('//materi/tugas', array('id' => $dt->id)) ?>">
                            <h3>
                                <span class=""><?php echo $dt->judul ?></span>  
                                <!--<small class="pull-right">20%</small>-->
                                <br/>
                                <span class="">Group : <?php echo $dt->materi->group->nama_group ?></span>
                                <br/>
                                <span class="">Materi : <?php echo $dt->materi->materi ?></span><br/>
                                <span class="badge bg-red pull-right">Waktu Selesai : <?php
                                    // echo $dt->waktu_selesai; 
                                    echo Controller::tgl_id($dt->waktu_selesai) . " " . date('H:i:s', strtotime($dt->waktu_selesai))
                                    ?>  </span>

                            </h3>
                        </a>
                    </li>
                <?php endforeach; ?>
                <!-- end task item -->
            </ul>
        </li>
        <li class="footer">
            <a href="#">Selamat Bekerja :)</a>
        </li>
    </ul>
    <?php endif; ?>
</li>

