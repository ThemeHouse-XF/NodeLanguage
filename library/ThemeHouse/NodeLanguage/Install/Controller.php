<?php

class ThemeHouse_NodeLanguage_Install_Controller extends ThemeHouse_Install
{

    protected $_resourceManagerUrl = 'http://xenforo.com/community/resources/node-language.1908/';

    protected function _getTableChanges()
    {
        return array(
            'xf_node' => array(
                'language_id' => 'INT(10) UNSIGNED NOT NULL DEFAULT 0'
            )
        );
    } /* END _getTableChanges */
}