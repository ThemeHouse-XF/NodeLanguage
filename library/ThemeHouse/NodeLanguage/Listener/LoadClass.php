<?php

class ThemeHouse_NodeLanguage_Listener_LoadClass extends ThemeHouse_Listener_LoadClass
{
    protected function _getExtendedClasses()
    {
        return array(
            'ThemeHouse_NodeLanguage' => array(
                'controller' => array(
                    'XenForo_ControllerAdmin_Forum',
                ), /* END 'controller' */
                'datawriter' => array(
                    'XenForo_DataWriter_Forum',
                ), /* END 'datawriter' */
            ), /* END 'ThemeHouse_NodeLanguage' */
        );
    } /* END _getExtendedClasses */

    public static function loadClassController($class, array &$extend)
    {
        $loadClassController = new ThemeHouse_NodeLanguage_Listener_LoadClass($class, $extend, 'controller');
        $extend = $loadClassController->run();
    } /* END loadClassController */

    public static function loadClassDataWriter($class, array &$extend)
    {
        $loadClassDataWriter = new ThemeHouse_NodeLanguage_Listener_LoadClass($class, $extend, 'datawriter');
        $extend = $loadClassDataWriter->run();
    } /* END loadClassDataWriter */
}