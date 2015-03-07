<?php
include_once 'header/_header.php';
?>
<body  class="container skin-blue">
    <!-- header logo: style can be found in header.less -->
    <?php
    include_once 'header/header.php';
    ?>
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <?php
        include_once 'side/_left.php';
        ?>
        <!-- Right side column. Contains the navbar and content of the page -->
        <aside class="right-side">
            <!--Content Header (Page header)--> 
            <section class="content-header">
                <h1><i class="glyphicon glyphicon-link"></i>
                    <?php echo $this->title; ?>
                    <small>PeLin</small>
                </h1>
            </section> 

            <!-- Main content -->
            <br/>
            <section class="content">
                <div class="row">
                    <!-- right col (We are only adding the ID to make the widgets sortable)-->
                    <?php
                    echo $content;
                    ?>
                </div>
            </section>
        </aside><!-- /.right-side -->
    </div><!-- ./wrapper -->

    <!-- add new calendar event modal -->


    <!-- jQuery 2.0.2 -->
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
    <!-- jQuery UI 1.10.3 -->
    <!--<script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>-->
    <!-- Bootstrap -->
    <!--<script src="js/bootstrap.min.js" type="text/javascript"></script>-->
    <!-- Morris.js charts -->
    <!--<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>-->
    <!--<script src="js/plugins/morris/morris.min.js" type="text/javascript"></script>-->
    <!-- Sparkline -->
    <!--<script src="js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>-->
    <!-- jvectormap -->
    <!--<script src="js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>-->
    <!--<script src="js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>-->
    <!-- fullCalendar -->
    <!--<script src="js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>-->
    <!-- jQuery Knob Chart -->
    <!-- daterangepicker -->
    <!--<script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>-->
    <!-- Bootstrap WYSIHTML5 -->
    <!--<script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
    <!-- iCheck -->
    <script src="<?php echo Yii::app()->baseUrl . "/js/plugins/iCheck/icheck.min.js"?>" type="text/javascript"></script>

    <!-- AdminLTE App -->
    <script src="<?php echo Yii::app()->baseUrl . "/js/AdminLTE/app.js"?>" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <!--<script src="js/AdminLTE/dashboard.js" type="text/javascript"></script>-->     

    <!-- AdminLTE for demo purposes -->
</body>
</html>
