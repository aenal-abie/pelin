<?php
/* @var $group Group */
//print_r($user);
?>
<div class = "mailbox row" style="margin-top: -50px">
    <div class = "col-xs-12">
        <div class = "box box-solid">
            <div class = "box-body">
                <div class = "row">
                    <div class = "col-md-3 col-sm-4">
                        <!--BOXES are complex enough to move the .box-header around.
                        This is an example of having the box header within the box body -->
                        <div class = "box-header">
                            <?= User::imglProfile($user->avatar, $user->nama_lengkap) ?>
                        </div>
                        <!--compose message btn -->
                        <!--Navigation - folders-->
                        <div style = "margin-top: 15px;">
                            <ul class = "nav nav-pills nav-stacked">
                                <li class = "active"><a href = "#"><i class = "fa fa-envelope"></i> Kirim Pesan</a></li>
                            </ul>
                        </div>
                    </div><!--/.col (LEFT) -->
                    <div class = "col-md-9 col-sm-8">
                        <div class = "table-responsive">
                            <!--THE MESSAGES -->
                            <table class = "table table-mailbox">
                                <thead>
                                    <tr class = "unread">                                            
                                        <th class = "small-col"><i class = "fa fa-star"></i></th>
                                        <th class = "subject"><a href = "#">Daftar Group</a></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($groups as $group):
                                        ?>
                                        <tr class = "unread">                                            
                                            <td class = "small-col"><i class = "fa fa-star"></i></td>
                                            <td class = "subject"><a href = "#"><?= $group->nama_group; ?></a></td>
                                        </tr>
                                        <?php
                                    endforeach;
                                    ?>
                                </tbody>
                            </table>
                        </div><!--/.table-responsive -->
                    </div><!--/.col (RIGHT) -->
                </div><!--/.row -->
            </div><!--/.box-body -->
        </div><!--/.box -->
    </div><!--/.col (MAIN) -->
</div>