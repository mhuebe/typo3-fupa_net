<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'FupaNet.FupaNet',
            'Team',
            [
                'Team' => 'team, stats, schedule'
            ],
            // non-cacheable actions
            [
                'Team' => ''
            ]
        );

    // wizards
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
        'mod {
            wizards.newContentElement.wizardItems.plugins {
                elements {
                    team {
                        icon = ' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('fupa_net') . 'Resources/Public/Icons/user_plugin_team.svg
                        title = LLL:EXT:fupa_net/Resources/Private/Language/locallang_db.xlf:tx_fupa_net_domain_model_team
                        description = LLL:EXT:fupa_net/Resources/Private/Language/locallang_db.xlf:tx_fupa_net_domain_model_team.description
                        tt_content_defValues {
                            CType = list
                            list_type = fupanet_team
                        }
                    }
                }
                show = *
            }
       }'
    );
    }
);
