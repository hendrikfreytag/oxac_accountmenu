<?php
class oxac_accountmenu_oxviewconfig extends oxac_accountmenu_oxviewconfig_parent
{
	
	/**
	 * Methode für Templating.
	 * 
	 * @return boolean
	 */
	public function displayExtendedAccountmenu()
	{
		$blRet = false;
		
		if (strpos($this->getActiveClassName(), 'account') !== false){
			$blRet = true;
		}
		if (($this->getActiveClassName() == 'content') and (strpos(oxRegistry::getConfig()->getRequestParameter('oxloadid'), 'oxac_my') !== false)){
			$blRet = true;
		}
		
		return $blRet;
	}
	
	public function attachAccountMenu()
	{
		$blRet = true;
		
		if (strpos($this->getActiveClassName(), 'account') !== false){
			$blRet = false;
		}
		
		return $blRet;
	}
	
	public function oxac_getMyContentList()
	{
		$oBase = oxNew('oxContent');
		$sTable = $oBase->getViewName();
		$sActiveSnippet = $oBase->getSqlActiveSnippet();

		$oContentList = oxNew('oxContentList');
		$sSql = "SELECT *  FROM $sTable WHERE `OXLOADID` LIKE 'oxac_my%' AND $sActiveSnippet";
		$oContentList->selectString($sSql);
		return $oContentList;
	}
}
