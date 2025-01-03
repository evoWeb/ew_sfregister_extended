<?php

declare(strict_types=1);

defined('TYPO3') or die();

$languageFile = 'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:';

$temporaryColumns = [
    'custom0' => [
        'exclude' => 0,
        'label' => $languageFile . 'custom0',
        'config' => [
            'type' => 'input',
            'max' => '80',
            'eval' => 'trim',
        ],
    ],
];

$temporaryColumns['custom1'] = $temporaryColumns['custom0'];
$temporaryColumns['custom1']['label'] =
    $languageFile . 'custom1';

$temporaryColumns['custom2'] = $temporaryColumns['custom0'];
$temporaryColumns['custom2']['label'] =
    $languageFile . 'custom2';

$temporaryColumns['custom3'] = $temporaryColumns['custom0'];
$temporaryColumns['custom3']['label'] =
    $languageFile . 'custom3';

$temporaryColumns['custom4'] = $temporaryColumns['custom0'];
$temporaryColumns['custom4']['label'] =
    $languageFile . 'custom4';

$temporaryColumns['custom5'] = $temporaryColumns['custom0'];
$temporaryColumns['custom5']['label'] =
    $languageFile . 'custom5';

$temporaryColumns['custom6'] = $temporaryColumns['custom0'];
$temporaryColumns['custom6']['label'] =
    $languageFile . 'custom6';

$temporaryColumns['custom7'] = $temporaryColumns['custom0'];
$temporaryColumns['custom7']['label'] =
    $languageFile . 'custom7';

$temporaryColumns['custom8'] = $temporaryColumns['custom0'];
$temporaryColumns['custom8']['label'] =
    $languageFile . 'custom8';

$temporaryColumns['custom9'] = $temporaryColumns['custom0'];
$temporaryColumns['custom9']['label'] =
    $languageFile . 'custom9';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('fe_users', $temporaryColumns);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    '--div--;' . $languageFile .'fe_users.div.customs,
    custom0, custom1, custom2, custom3, custom4, custom5, custom6, custom7, custom8, custom9'
);
