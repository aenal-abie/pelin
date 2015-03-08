<table class="table table-striped ">
    <tbody><tr>
            <th colspan="2">Nama Anggota</th>
            <th style="text-align: right">Status</th>
        </tr>
        <?php foreach ($anggota as $psr) : ?>
            <tr>
                <td>
                    <?php echo User::model()->imglist($psr->user->user->avatar, $psr->user->user->nama_lengkap, 1) ?>
                <td style="vertical-align: middle" >
                    <?php /* @var $psr  Peserta */ ?>
                    <a title="<?php echo $psr->user->user->username ?>" href="<?= Yii::app()->createUrl('//peserta/profileMahasiswa', ['id' => $psr->user_id]) ?>">
                        <?php echo $psr->user->user->nama_lengkap ?></a></td>    
                </td>
                <td style="width: 70px; vertical-align: middle" >
                    <?php
                    $url = Yii::app()->createUrl('//peserta/reject/', array('id' => $psr->id));
                    $htmlOptions = array('onclick' => 'js:bootbox.confirm("<h3>Hapus Data </h3><br/>Anda Yakin Akan menghapus Peserta ini?",             
                            function(confirmed){
                        if(confirmed) {
                            window.location = "' . $url . '";
                        }
                        })',
                        'class' => 'badge bg-red pull-right');
                    ?>
                    <?php if ($psr->status == 1): ?>
                        <?php echo CHtml::link('<i class="fa fa-trash-o"></i> Hapus', '#', $htmlOptions) ?>
                    <?php elseif ($psr->status == 0): ?>
                        <?php echo CHtml::link('<i class="fa fa-trash-o"></i>', '#', $htmlOptions) ?>
                        <a title="Kasih Persetujuan Bergabung" href="<?php echo Yii::app()->createUrl('//peserta/aprove/', array('id' => $psr->id)); ?>" class="badge bg-aqua pull-right"><i class="fa fa-check"></i></a>
                        <?php endif; ?>
                </td>
            </tr>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
