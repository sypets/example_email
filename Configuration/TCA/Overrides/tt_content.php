<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ExampleEmail',
    'UncachedPlugin1',
    'Uncached plugin (Example Email)'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'ExampleEmail',
    'CachedPlugin1',
    'Cached plugin (Example Email)'
);
