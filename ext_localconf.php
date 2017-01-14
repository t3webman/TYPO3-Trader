<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Newred.Trader',
            'Objects',
            [
                'Object' => 'list, show, detail, count'
            ],
            // non-cacheable actions
            [
                'Object' => 'create, update, delete'
            ]
        );

    },
    $_EXTKEY
);
