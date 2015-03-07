
<?php
$this->beginWidget('ext.Box', array(
    'title' => 'Daftar Group Anda',
    'cssBody' => 'no-padding',
    'sectionClass' => 12));
?>

<table class="table table-striped ">
    <tbody><tr>
            <th>Nama Group</th>
            <th style="text-align: right">Dosen</th>
            <th style="text-align: right">Status</th>
        </tr>
        <?php foreach ($list as $val) : ?>
            <tr>
                <?php if (Yii::app()->user->isGuest || Yii::app()->user->checkAccess('Mahasiswa')) : ?>
                    <td><a href="<?php echo Yii::app()->createUrl('//materi/list', array('id' => $val->group_id)) ?>">
                            <i class="glyphicon glyphicon-link"></i> <?php echo $val->group->nama_group ?></a></td>
                <?php endif; ?>
                <td><span class="badge bg-blue pull-right"><?php echo $val->group->user->user->nama_lengkap ?></span></td>
                <td><span class="badge bg-blue pull-right"><?php echo ($val->status == 1) ? "Diterima" : "Pendding" ?></span></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
$this->endWidget();
