<?php
defined('TYPO3_MODE') or die();


$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['fupanet_team'] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['fupanet_team'] = 'select_key,pages,recursive';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue('fupanet_team', 'FILE:EXT:fupa_net/Configuration/FlexForms/Team.xml');
