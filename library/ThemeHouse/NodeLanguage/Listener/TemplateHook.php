<?php

class ThemeHouse_NodeLanguage_Listener_TemplateHook extends ThemeHouse_Listener_TemplateHook
{

    protected function _getHooks()
    {
        return array(
            'forum_edit_basic_information'
        );
    } /* END _getHooks */

    public static function templateHook($hookName, &$contents, array $hookParams, XenForo_Template_Abstract $template)
    {
        $templateHook = new ThemeHouse_NodeLanguage_Listener_TemplateHook($hookName, $contents, $hookParams, $template);
        $contents = $templateHook->run();
    } /* END templateHook */

    protected function _forumEditBasicInformation()
    {
        $this->_appendTemplateBeforeSlot('before_style_override', 'th_override_language_forum_nodelanguage');
    } /* END _forumEditBasicInformation */
}