<?php

class ThemeHouse_DisableInvis_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{

    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_DisableInvis' => array(
                'controller' => array(
                    'XenForo_ControllerPublic_Account'
                ), /* END 'controller' */
            ), /* END 'ThemeHouse_DisableInvis' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_DisableInvis_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */
}