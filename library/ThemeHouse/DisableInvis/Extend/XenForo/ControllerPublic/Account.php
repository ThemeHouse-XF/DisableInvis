<?php

/**
 *
 * @see XenForo_ControllerPublic_Account
 */
class ThemeHouse_DisableInvis_Extend_XenForo_ControllerPublic_Account extends XFCP_ThemeHouse_DisableInvis_Extend_XenForo_ControllerPublic_Account
{

    /**
     * @see XenForo_ControllerPublic_Account::actionPreferences()
     * 
     * @return XenForo_ControllerResponse_View
     */
    public function actionPreferences()
    {
        $response = parent::actionPreferences();
        if ($response instanceof XenForo_ControllerResponse_View) {
            $visitor = XenForo_Visitor::getInstance()->toArray();
            if (XenForo_Permission::hasPermission($visitor['permissions'], 'general', 'editVisibility')) {
                $response->subView->params['canEditVisibility'] = true;
            } else {
                $response->subView->params['canEditVisibility'] = false;
            }
        }
        return $response;
    } /* END actionPreferences */
    
    /**
     * @see XenForo_ControllerPublic_Account::actionPrivacy()
     *
     * @return XenForo_ControllerResponse_View
     */
    public function actionPrivacy()
    {
        $response = parent::actionPrivacy();
        if ($response instanceof XenForo_ControllerResponse_View) {
            $visitor = XenForo_Visitor::getInstance()->toArray();
            if (XenForo_Permission::hasPermission($visitor['permissions'], 'general', 'editVisibility')) {
                $response->subView->params['canEditVisibility'] = true;
            } else {
                $response->subView->params['canEditVisibility'] = false;
            }
        }
        return $response;
    } /* END actionPrivacy */
}