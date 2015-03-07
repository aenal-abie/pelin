<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->

    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <?php
            if (!Yii::app()->user->isGuest):
                include('_avatar.php');
                ?>
                <div class="pull-left info">
                    <?php $dpn = split(' ', Yii::app()->user->nama); ?>
                    <p>Hello, <?php echo $dpn[0]; ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> 
                        <?php if (Yii::app()->user->checkAccess('Admin')) : echo "Admin"; ?>
                        <?php elseif (Yii::app()->user->checkAccess('Dosen')): echo "Dosen"; ?>
                            <?php
                        elseif (Yii::app()->user->checkAccess('Mahasiswa')) : echo "Mahasiswa";
                        endif;
                        ?>

                    </a>
                </div>
            <?php else: ?>
                <div class="pull-left info">
                    <p><i class="glyphicon glyphicon-link"></i> <small>Halo Sahabat Pelin</small></p>
                    <h6>
                        Anda Dapat Mengikuti Proses Pembelajaran Online Pada 
                        Sistem ini dengan Melakukan Registrasi Terlebih Dahulu.
                    </h6>
                    <p>
                        <a class="btn btn-flat " href="<?php echo Yii::app()->createUrl('//site/register') ?>"><i class="glyphicon glyphicon-link"></i> 
                            AY000K Bergabung !!!</a>
                    </p>
                </div>
            <?php endif; ?>
        </div>
        <!-- search form -->
        <form action="<?php echo Yii::app()->createUrl('//site/index') ?>" method="post" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="t-find" class="form-control" placeholder="Pencarian..."/>
                <span class="input-group-btn">
                    <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->

        <?php
        $this->widget(
                'booster.widgets.TbMenu', array(
            'type' => 'list',
            'encodeLabel' => FALSE,
            'htmlOptions' => array('class' => 'sidebar-menu'),
            'items' => $this->menu
                )
        );
        ?>
        <!--        <ul class="sidebar-menu">
                    <li class="active">
                        <a href="index.html">
                            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/widgets.html">
                            <i class="fa fa-th"></i> <span>Widgets</span> <small class="badge pull-right bg-green">new</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-bar-chart-o"></i>
                            <span>Charts</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                            <li><a href="pages/charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                            <li><a href="pages/charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-laptop"></i>
                            <span>UI Elements</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/UI/general.html"><i class="fa fa-angle-double-right"></i> General</a></li>
                            <li><a href="pages/UI/icons.html"><i class="fa fa-angle-double-right"></i> Icons</a></li>
                            <li><a href="pages/UI/buttons.html"><i class="fa fa-angle-double-right"></i> Buttons</a></li>
                            <li><a href="pages/UI/sliders.html"><i class="fa fa-angle-double-right"></i> Sliders</a></li>
                            <li><a href="pages/UI/timeline.html"><i class="fa fa-angle-double-right"></i> Timeline</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-edit"></i> <span>Forms</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/forms/general.html"><i class="fa fa-angle-double-right"></i> General Elements</a></li>
                            <li><a href="pages/forms/advanced.html"><i class="fa fa-angle-double-right"></i> Advanced Elements</a></li>
                            <li><a href="pages/forms/editors.html"><i class="fa fa-angle-double-right"></i> Editors</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-table"></i> <span>Tables</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/tables/simple.html"><i class="fa fa-angle-double-right"></i> Simple tables</a></li>
                            <li><a href="pages/tables/data.html"><i class="fa fa-angle-double-right"></i> Data tables</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/calendar.html">
                            <i class="fa fa-calendar"></i> <span>Calendar</span>
                            <small class="badge pull-right bg-red">3</small>
                        </a>
                    </li>
                    <li>
                        <a href="pages/mailbox.html">
                            <i class="fa fa-envelope"></i> <span>Mailbox</span>
                            <small class="badge pull-right bg-yellow">12</small>
                        </a>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-folder"></i> <span>Examples</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="pages/examples/invoice.html"><i class="fa fa-angle-double-right"></i> Invoice</a></li>
                            <li><a href="pages/examples/login.html"><i class="fa fa-angle-double-right"></i> Login</a></li>
                            <li><a href="pages/examples/register.html"><i class="fa fa-angle-double-right"></i> Register</a></li>
                            <li><a href="pages/examples/lockscreen.html"><i class="fa fa-angle-double-right"></i> Lockscreen</a></li>
                            <li><a href="pages/examples/404.html"><i class="fa fa-angle-double-right"></i> 404 Error</a></li>
                            <li><a href="pages/examples/500.html"><i class="fa fa-angle-double-right"></i> 500 Error</a></li>
                            <li><a href="pages/examples/blank.html"><i class="fa fa-angle-double-right"></i> Blank Page</a></li>
                        </ul>
                    </li>
                </ul>-->
    </section>
    <!-- /.sidebar -->
</aside>