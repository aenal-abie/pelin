<div class="box box-success">
    <div class="box-header" style="cursor: move;">
        <h3 class="box-title"><i class="fa fa-comments-o"></i> Diskusi</h3>
        <div class="box-tools pull-right" data-toggle="tooltip" title="" data-original-title="Status">
            <div class="btn-group" data-toggle="btn-toggle">
<!--                <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>                                            
                <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>-->
            </div>
        </div>
    </div>
    <div class="slimScrollDiv" style="">
        <div class="box-body chat" id="chat-box" style="">
            <!-- chat item -->
            <?php foreach ($data as $dt): ?>
                <div class="item">
                    <!--<img src="img/avatar.png" alt="user image" class="online">-->
                    <?php echo User::model()->imglist($dt->user->avatar, '', 2); ?>
                    <p class="message">
                        <a href="#" class="name">
                            <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> <?php echo $dt->tgl_post ?></small>
                            <?php echo $dt->user->nama_lengkap ?>
                        </a>
                        <?php echo $dt->pesan ?>
                        <?php if (Yii::app()->user->checkAccess('Dosen')): ?>
                            <a href="<?php echo Yii::app()->createUrl('//diskusi/delete', array('id' => $dt->id)); ?>"
                               class="badge"><i class="fa fa-trash-o"></i></a>
                       <?php endif; ?>
                    </p>
                </div><!-- /.item -->
            <?php endforeach; ?>
            <!-- chat item -->

        </div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 93px; opacity: 0.4; display: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; z-index: 99; right: 1px; height: 157.035175879397px; background: rgb(0, 0, 0);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; border-bottom-left-radius: 0px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(51, 51, 51);"></div></div><!-- /.chat -->
    <div class="box-footer">
<!--        <form method="post" action="<?php echo Yii::app()->createUrl('//diskusi/create') ?>">-->


        <?php
        if ($comment == 1):
            $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
                'id' => 'materi-form',
                'enableAjaxValidation' => false,
            ));
            ?>
            <div class="input-group">
                <?php echo $form->textField($model, 'pesan', array('class' => 'form-control', 'placeholder' => "Type message...")); ?>
                <!--<div class="input-group-btn">-->
                    <!--<button type="submit" class="btn btn-success"><i class="fa fa-comments-o"></i></button>-->
                <!--</div>-->
                <!--<input type="hidden" name="Diskusi['user_id']" value="<?php echo Yii::app()->user->id ?>"/>-->
                <!--<input type="hidden" name="Diskusi['group_id']" value="<?php echo $_GET['id'] ?>"/>-->
                <!--<input class="form-control" name="Diskusi['pesan']" placeholder="Type message...">-->
                <div class="input-group-btn">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-comments-o"></i></button>
                </div>
            </div>
            <?php
            $this->endWidget();
        endif;
        ?>
        <!--</form>-->
    </div>
</div>