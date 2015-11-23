<?php
class ThemeHouse_NodeLanguage_Listener_ControllerPostDispatch
{

    public static function controllerPostDispatch(XenForo_Controller $controller, $controllerResponse, $controllerName, $action)
    {
        if ($controllerResponse instanceof XenForo_ControllerResponse_View) {
            $visitor = XenForo_Visitor::getInstance();

            $languageId = null;
            if (isset($controllerResponse->params['forum']) && isset($controllerResponse->params['forum']['language_id'])) {
                $languageId = $controllerResponse->params['forum']['language_id'];
            } elseif ($controllerResponse->subView && isset($controllerResponse->subView->params['forum']) &&
                     isset($controllerResponse->subView->params['forum']['language_id'])) {
                $languageId = $controllerResponse->subView->params['forum']['language_id'];
            }

            if ($languageId) {
                $visitor->setVisitorLanguage($languageId);
            }
        }
    } /* END controllerPostDispatch */
}