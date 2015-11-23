<?php

class ThemeHouse_NodeLanguage_ControllerHelper_NodeLanguage extends XenForo_ControllerHelper_Abstract
{
	public function setNodeLanguage(XenForo_ControllerResponse_Abstract $response)
	{
		/* @var $response XenForo_ControllerResponse_View */
		if (get_class($response) == 'XenForo_ControllerResponse_View')
		{
			$visitor = XenForo_Visitor::getInstance();
				
			$languageId = $response->params['forum']['language_id'];
			if ($languageId) $visitor->setVisitorLanguage($languageId);
		}
	} /* END setNodeLanguage */
}