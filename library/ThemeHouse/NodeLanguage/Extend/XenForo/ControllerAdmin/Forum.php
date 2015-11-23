<?php

/**
 * 
 * @see XenForo_ControllerAdmin_Forum
 */
class ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum extends XFCP_ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum
{

    /**
     *
     * @see XenForo_ControllerAdmin_Forum::actionEdit()
     */
    public function actionEdit()
    {
        $response = parent::actionEdit();
        
        /* @var $response XenForo_ControllerResponse_View */
        if (get_class($response) == 'XenForo_ControllerResponse_View') {
            /* @var $languageModel XenForo_Model_Language */
            $languageModel = XenForo_Model::create('XenForo_Model_Language');
            
            $response->params['languageOptions'] = $languageModel->getLanguagesForOptionsTag();
        }
        
        return $response;
    } /* END actionEdit */

    /**
     *
     * @see XenForo_ControllerAdmin_Forum::actionSave()
     */
    public function actionSave()
    {
        $GLOBALS['ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum'] = $this;
        
        return parent::actionSave();
    } /* END actionSave */

    /**
     *
     * @param ThemeHouse_NodeLanguage_Extend_XenForo_DataWriter_Forum $dw
     */
    public function processNodeLanguage(ThemeHouse_NodeLanguage_Extend_XenForo_DataWriter_Forum $dw)
    {
        $dwInput = $this->_input->filter(array(
            'language_id' => XenForo_Input::UINT
        ));
        
        $dw->bulkSet($dwInput);
    } /* END processNodeLanguage */
}