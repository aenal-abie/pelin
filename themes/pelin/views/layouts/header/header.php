<header class="header">
    <a href="<?php echo Yii::app()->createUrl('site/index') ?>" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        <i class="glyphicon glyphicon-link"></i>Pembelajaran Online
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <?php if (!Yii::app()->user->isGuest): ?>
                <?php // echo Group::model()->jmlGroup(); ?>

                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                    'submenuHtmlOptions' => array('class' => 'dropdown-menu'),
                    'itemCssClass' => 'item-test',
                    'encodeLabel' => false,
                    'items' => array(
                        array('label' => '<i class="fa fa-home"></i>', 'url' => array('/site/index')),
                        array('label' => '<i class="fa fa-folder-open"></i> <span class="caret"></span>', 'url' => '#', 'visible' => Yii::app()->user->checkAccess('Admin'),
                            'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                            'items' => array(
                                array('label' => '<i class="fa fa-bullhorn"></i>Pengumuman', 'url' => array('/pengumuman/index'), 'visible' => Yii::app()->user->checkAccess('Admin')),
                                array('label' => '<i class="fa fa-users"></i>Rekap Group Kuliah Dosen', 'url' => array('/rekap/index'), 'visible' => Yii::app()->user->checkAccess('Admin')),
                            )
                        ),
                        //                        array('label' => '<i class="icon-hdd"></i> Informasi <span class="caret"></span>', 'url' => '#', 'visible' => Yii::app()->user->checkAccess('Admin'),
                        //                            'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                        //                            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                        //                            'items' => array(
                        //                                array('label' => '<i class="fa fa-bar-chart-o"></i> Informasi Grafik', 'url' => array('/chart/index'), 'visible' => Yii::app()->user->checkAccess('Pribadi.*')),
                        //                                array('label' => '<i class="fa fa-hospital-o"></i> Kurikulum Vitae', 'linkOptions' => array('target' => '_blank',), 'url' => array('/CuriculumVitae/index/' . Yii::app()->user->id), 'visible' => false), //Yii::app()->session['level'] > 1),
                        //                            )
                        //                        ),
                        array('label' => '<i class="fa fa-qrcode"></i> <span class="caret"></span>', 'url' => '#', 'visible' => !Yii::app()->user->isGuest,
                            'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"),
                            'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                            'items' => array(
                                array('label' => '<i class="fa fa-wrench"></i> Ganti Profile', 'url' => array('/user/changeProfile'), 'visible' => !Yii::app()->user->isGuest),
                                array('label' => '<i class="fa fa-users"></i> Data Pengguna', 'url' => array('/user/index'), 'visible' => Yii::app()->user->checkAccess('Admin')),
                                array('label' => '<i class="fa fa-users"></i> Hak Akses', 'url' => array('/rights/'), 'visible' => Yii::app()->user->checkAccess('Admin')),
                                //                                array('label' => '<i class="icon-certificate"></i> Registrasi Pengguna', 'url' => array('/user/registrasi'), 'visible' => Yii::app()->user->checkAccess('Admin')),
                                array('label' => '<i class="fa fa-wrench"></i> Ganti Password', 'url' => array('/user/changepass'), 'visible' => !Yii::app()->user->isGuest),
                            )
                        ),
                        /* array('label' => 'Forms', 'url' => array('/site/page', 'view' => 'forms')),
                          array('label' => 'Tables', 'url' => array('/site/page', 'view' => 'tables')),
                          array('label' => 'Interface', 'url' => array('/site/page', 'view' => 'interface')),
                          array('label' => 'Typography', 'url' => array('/site/page', 'view' => 'typography')),
                          /* array('label'=>'Gii generated', 'url'=>array('customer/index')), */
                        /* array('label' => 'My Account <span class="caret"></span>', 'url' => '#', 'itemOptions' => array('class' => 'dropdown', 'tabindex' => "-1"), 'linkOptions' => array('class' => 'dropdown-toggle', 'data-toggle' => "dropdown"),
                          'items' => array(
                          array('label' => 'My Messages <span class="badge badge-warning pull-right">26</span>', 'url' => '#'),
                          array('label' => 'My Tasks <span class="badge badge-important pull-right">112</span>', 'url' => '#'),
                          array('label' => 'My Invoices <span class="badge badge-info pull-right">12</span>', 'url' => '#'),
                          array('label' => 'Separated link', 'url' => '#'),
                          array('label' => 'One more separated link', 'url' => '#'),
                          )), */
                        array('label' => '<i class="icon-lock"></i> Login [Tamu]', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    //                        array('label' => '<i class="icon-off"></i> Logout [' . $user . ']', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    ),
                ));
                ?>
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->

                    <?php if (Yii::app()->user->checkAccess('Dosen')) : ?>
                        <?php $this->renderPartial('//layouts/header/_ico_dosen') ?>
                        <?php // else ?>

                    <?php elseif (Yii::app()->user->checkAccess('Mahasiswa')) : ?>
                        <?php $this->renderPartial('//layouts/header/_ico_mhs') ?>
                    <?php endif; ?>

                    <li class="dropdown user user-menu">
                        <a href="<?php echo Yii::app()->createUrl('//site/logout') ?>" >
                            <i class="glyphicon glyphicon-log-out"></i>
                            <span>Keluar Pelin</span>
                        </a>
                    </li>
                </ul>
            <?php else: ?>
                <ul class="nav navbar-nav">
                    <!-- Messages: style can be found in dropdown.less-->

                    <!-- Notifications: style can be found in dropdown.less -->

                    <!-- Tasks: style can be found in dropdown.less -->

                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="<?php echo Yii::app()->createUrl('//site/login') ?>" class="dropdown-toggle" >
                            <i class="glyphicon glyphicon-log-in"></i>
                            <span>Masuk Pelin</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="<?php echo Yii::app()->createUrl('//site/register') ?>" class="dropdown-toggle">
                            <i class="glyphicon glyphicon-link"></i>
                            <span>Bergabung Pelin</span>
                        </a>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="<?php echo Yii::app()->createUrl('//site/lupa') ?>" class="dropdown-toggle" >
                            <i class="glyphicon glyphicon-wrench"></i>
                            <span>Lupa Password</span>
                        </a>

                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </nav>
</header>