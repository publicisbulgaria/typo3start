<?php

defined('TYPO3') || die();

/*
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'site_package',
    'Configuration/TypoScript',
    'Product'
);
*/

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'SitePackage',
    'constants',
    "@import 'EXT:site_package/Configuration/TypoScript/constants.typoscript'"
);

 \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
    'SitePackage',
    'setup',
    "@import 'EXT:site_package/Configuration/TypoScript/setup.typoscript'"
);
