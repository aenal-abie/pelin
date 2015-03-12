<div class="col-md-12">
    <!-- Info box -->
    <div class="box box-solid bg-aqua">
        <div class="box-header">
            <h3 class="box-title">Gabung</h3>
        </div>
        <div class="box-body">

            <p><a style="margin-top: -6px" href="<?php echo (!isset($join) ? Yii::app()->createUrl('peserta/create', array('idGroup' => $id)) : "#") ?>"  class="pull-right btn btn-primary <?php echo(!isset($join)) ? "" : "disabled" ?>"  title="" ><span class="glyphicon glyphicon-check">
                    </span> <?php echo (isset($join) ? "Menunggu Persetujuan" : "Gabung Sekarang") ?></a>
                Anda belum tergabung dengan group ini, Silahkan gabung untuk mengikuti 
                kegiatan pembelajaran lebih lanjut .

            </p>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</div>