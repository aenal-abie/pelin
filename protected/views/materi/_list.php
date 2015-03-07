<tr>
    <td style="width: 20px"><?php echo User::model()->imglist($data->user->user->avatar, $data->user->user->nama_lengkap, 1) ?>
    </td>
    <td style="vertical-align: middle"><a title="<?php echo $data->user->user->username ?>" href="#"><?php echo $data->user->user->nama_lengkap ?></a></td>
    <td  style="vertical-align: middle">
        <a class="pull-right"><?php echo $data->user->kodeNamaJurusan->nama_jurusan ?></a>
    </td>
</tr>