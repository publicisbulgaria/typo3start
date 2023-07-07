<?php
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

(static function (): void {
    ExtensionManagementUtility::addPageTSConfig('
        @import "EXT:site_package/Configuration/page.tsconfig"
    ');
})();


