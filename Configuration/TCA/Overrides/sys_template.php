<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'sf_register_extended',
        'Configuration/TypoScript/',
        'Extending Feuser Register'
    );
});
