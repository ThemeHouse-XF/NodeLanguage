<?php
						
class ThemeHouse_NodeLanguage_Extend_XenForo_DataWriter_Forum extends XFCP_ThemeHouse_NodeLanguage_Extend_XenForo_DataWriter_Forum
{
	const THEMEHOUSE_NODELANGUAGE_EXTEND_XENFORO_CONTROLLERADMIN_FORUM = 'ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum';
	
	/**
	 * @return array
	 */
	protected function _getDefaultOptions()
	{
		if (isset($GLOBALS['ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum']))
		{
			$this->setExtraData(self::THEMEHOUSE_NODELANGUAGE_EXTEND_XENFORO_CONTROLLERADMIN_FORUM,
					$GLOBALS['ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum']);
			unset($GLOBALS['ThemeHouse_NodeLanguage_Extend_XenForo_ControllerAdmin_Forum']);
		}
	
		return parent::_getDefaultOptions();
	} /* END _getDefaultOptions */
	
	protected function _getFields()
	{
		$fields = parent::_getFields();
	
		$fields['xf_node']['language_id'] = array('type' => self::TYPE_UINT, 'default' => 0);
	
		return $fields;
	} /* END _getFields */
	

	protected function _preSave()
	{
		if ($this->isExtraDataSet(self::THEMEHOUSE_NODELANGUAGE_EXTEND_XENFORO_CONTROLLERADMIN_FORUM))
		{
			$this->getExtraData(self::THEMEHOUSE_NODELANGUAGE_EXTEND_XENFORO_CONTROLLERADMIN_FORUM)->processNodeLanguage($this);
		}
	
		parent::_preSave();
	} /* END _preSave */
}