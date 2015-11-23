<?php

class ThemeHouse_DisableInvis_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/disable-invisible-status.2354/';

    protected function _preInstall()
    {
        if (XenForo_Application::$versionId >= 1040000) {
            $this->_db->query('
            UPDATE xf_user SET visible = 1, activity_visible = 1
        ');
        } else {
            $this->_db->query('
            UPDATE xf_user SET visible = 1
        ');
        }
    } /* END _preInstall */
}