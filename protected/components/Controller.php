<?php

/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends RController {

    /**
     * @var string the default layout for the controller view. Defaults to '//layouts/column1',
     * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
     */
    public $layout = '//layouts/column1';

    /**
     * @var array context menu items. This property will be assigned to {@link CMenu::items}.
     */
    public $menu = array();
    public $menu_right = array();

    /**
     * @var array the breadcrumbs of the current page. The value of this property will
     * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
     * for more details on how to specify this property.
     */
    public $breadcrumbs = array();
    public $title = 'Pembelajaran Online';
    public $title_left = 'Pembelajaran Online';
    public $title_right = 'Pembelajaran Online';

    public static function tgl_id($tgl) {
        if ($tgl != '') {
            $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                "November", "Desember");

            $tgl_id = date('d', strtotime($tgl)) . " ";
            $tgl_id .= $bulan[(date('n', strtotime($tgl)))] . " ";
            $tgl_id .=date('Y', strtotime($tgl));
            return $tgl_id;
        }
    }

    public static function bln_id($bln) {
        if ($bln != '') {
            $bulan = array("", "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober",
                "November", "Desember");
            $tgl_id = $bulan[$bln];
            return $tgl_id;
        }
    }

}