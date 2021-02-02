<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

/*
 * -------
 * Plugins
 * -------
 */

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    // extension name
    'Sypets.ExampleEmail',
    // plugin name
    'UncachedPlugin1',
    [
        // Controller => action
        'Example' => 'show',

    ],
    // non-cacheable actions
    [
        'Example' => 'show',

    ]
);


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    // extension name
    'Sypets.ExampleEmail',
    // plugin name
    'CachedPlugin1',
    [
        // Controller => action
        'Example' => 'show',

    ]
);


// TSconfig
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig("@import 'EXT:example_email/Configuration/TsConfig/Page/NewContentElement.tsconfig'");
