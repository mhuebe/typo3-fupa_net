<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'FupaNet.FupaNet',
            'Team',
            'Team'
        );

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('fupa_net', 'Configuration/TypoScript', 'Fupa.net');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_fupanet_domain_model_team', 'EXT:fupa_net/Resources/Private/Language/locallang_csh_tx_fupanet_domain_model_team.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_fupanet_domain_model_team');

    }
);
