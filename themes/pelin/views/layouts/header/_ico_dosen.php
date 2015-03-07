<!-- Messages: style can be found in dropdown.less-->
<li class="dropdown messages-menu">
    <a href="<?php echo Yii::app()->createUrl('//group/index') ?>" class="dropdown-toggle">
        <i class="fa fa-users"></i>
        <span class="label label-success"><?php echo Group::model()->jmlGroup(); ?></span>
    </a>
</li>
<!-- Notifications: style can be found in dropdown.less -->
<li class="dropdown notifications-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-warning"></i>
        <span class="label label-warning"><?php echo $total = Peserta::model()->cekJumlahPendingPeserta() ?></span>
    </a>
    <?php
    $dataWarning = Peserta::model()->totalPemberitahuanPendding();
//                print_r($dataWarning);
    if ($total > 0) :
        ?>

        <ul class="dropdown-menu">
            <li class="header">Anda memiliki <?php // echo $total                  ?> pemberitahuan</li>
            <li>
                <!--inner menu: contains the actual data--> 
                <ul class="menu">


                    <?php foreach ($dataWarning as $dt): ?>
                        <li>
                            <a href="<?php echo Yii::app()->createUrl('//materi/index', array('id' => $dt['id'])) ?>">
                                <i class="fa fa-users warning"></i> <?php echo $dt['psr'] . "  Peseta : " . $dt['nama_group']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
            <li class="footer"><a href="#">Silahkan Diconfirmasi :)</a></li>
        </ul>
    <?php endif; ?>
</li>
<!-- Tasks: style can be found in dropdown.less -->
<?php $kumpul = Tugas::model()->getTotalKumpul(); ?>
<li class="dropdown tasks-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
        <i class="fa fa-tasks"></i>
        <span class="label label-danger"><?php echo $tot = count($kumpul) ?></span>
    </a>
    <?php if ($tot > 0): ?>
        <ul class="dropdown-menu">
            <li class="header">Anda Memiliki  <?php echo $tot ?> Tugas, yang Masih Dalam Proses Pengumpulan Tugas</li>
            <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                    <?php foreach ($kumpul as $data): ?>
                        <li><!-- Task item -->
                            <a href="<?php echo Yii::app()->createUrl('//tugas/update/', array('id' => $data['id'], 'materi' => $data['materi_id'])) ?>">
                                <h3>
                                    <?php echo $data['judul'] ?><br/>
                                    Materi : <?php echo $data['materi'] ?><br/>
                                    Group : <?php echo $data['nama_group'] ?><br/>
                                    Jumlah Peserta : <?php echo $data['tot_peserta'] ?> Mahasiswa<br/>
                                    <?php
                                    $sdh = $data['tot_kumpul'];
                                    $psrt = $data['tot_peserta'];
									if((int)$psrt>0){
                                    $presentase = ($sdh / $psrt) * 100;
									} else {
									$presentase =0;
									}
//                                    echo 5.2 % 2;
//                                    echo !is_double('5.5');
                                    ?>

                                    <small style="color: #0055cc" class="pull-right "><?php echo (is_double($presentase)) ? number_format($presentase, 2) : $presentase ?> %</small>
                                </h3>
                                <div class="progress xs">
                                    <div class="progress-bar progress-bar-aqua" style="width: <?php echo (int) $presentase . "%" ?>" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                        <span class="sr-only"><?php echo $presentase ?>% Complete</span>
                                    </div>
                                </div>
                            </a>
                        </li><!-- end task item -->
                    <?php endforeach; ?>
                    <!-- end task item -->
                </ul>
            </li>
            <li class="footer">
                <a href="#">Selamat Mengoreksi :)</a>
            </li>
        </ul>
    <?php endif; ?>
</li>

