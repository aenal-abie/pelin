<?php
/* @var $this RekapController */
/* @var $val Dosen */
?>
<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */
$menu = array();

$this->menu = array(
    array('label' => 'Cetak', 'url' => array('cetak'), 'icon' => 'fa fa-qrcode', 'items' => $menu)
);
?>
<table border="1" style="width: 100%; border-collapse: collapse">
    <tr>
        <td>
            Nama Dosen
        </td>
        <td>
            Group
        </td>
    </tr>

    <?php
    foreach ($data as $key => $val) {
        echo '<tr>';
        echo '<td valign="top">';
        echo $val->user->nama_lengkap;
        echo'</td >';
        echo '<td>';
        /* $groups = Group::model()->findAll('user_id=:user', array(':user' => $val->user_id)); */
        /* @var $materi Group */
        echo "<ol>";
        foreach ($val->groups as $group) {
            echo '<li>' . $group->nama_group . "</li>";
            echo "<ol>";
            //echo'------------ Materi ------------';
            foreach ($group->materis as $materi) {
                /* @var $materi Materi */
                echo '<li>' . $materi->materi . "</li>";
                echo "<ul>";
                foreach ($materi->files as $file) {
                    /* @var $file File */
                    echo '<li><strong>File : </strong>  ' . $file->file . "</li>";
                }
                //echo (!empty($materi->tugases)) ? '------------ Tugas ------------' : "";
                foreach ($materi->tugases as $tugas) {
                    /* @var $tugas Tugas */
                    echo '<li><strong>Tugas  : </strong> ' . $tugas->judul . "</li>";
                }

                echo "</ul>";
            }
            echo "</ol>";
        }
        echo "</ol>";

        echo'</td >';
        echo '</tr>';
    }
    ?>
</table>