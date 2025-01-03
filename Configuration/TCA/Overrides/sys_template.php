<?php

declare(strict_types=1);

defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

(static function () {
    ExtensionManagementUtility::addStaticFile(
        'ew_sfregister_extended',
        'Configuration/TypoScript/',
        'Extending Feuser Register'
    );
})();
