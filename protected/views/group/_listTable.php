
<?php
$this->beginWidget('ext.Box', array(
    'title' => 'Daftar Group',
    'cssBody' => 'no-padding',
    'sectionClass' => $sectionClass));
?>

<table class="table table-striped ">
    <tbody><tr>
            <th>Nama Group</th>
            <th style="text-align: right">Dosen</th>
        </tr>
        <?php foreach ($list as $val) : ?>
            <tr>
                <?php if (Yii::app()->user->isGuest || Yii::app()->user->checkAccess('Mahasiswa')) : ?>
                    <td><a href="<?php echo Yii::app()->createUrl('//materi/list', array('id' => $val->id)) ?>">
                            <i class="glyphicon glyphicon-link"></i> <?php echo $val->nama_group ?></a></td>
                <?php else : ?>
                    <td><a href="<?php echo Yii::app()->createUrl('//materi/index', array('id' => $val->id)) ?>">
                            <i class="glyphicon glyphicon-link"></i> <?php echo $val->nama_group ?></a></td>
                <?php endif; ?>
                <td><span class="badge bg-blue pull-right"><?php echo $val->user->user->nama_lengkap ?></span></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php
$this->endWidget();
