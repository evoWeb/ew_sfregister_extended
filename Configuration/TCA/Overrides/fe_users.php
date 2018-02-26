<?php
defined('TYPO3_MODE') || die();

$temporaryColumns = [
    'custom0' => [
        'exclude' => 0,
        'label' => 'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom0',
        'config' => [
            'type' => 'input',
            'size' => '20',
            'max' => '80',
            'eval' => 'trim',
        ],
    ],
];

$temporaryColumns['custom1'] = $temporaryColumns['custom0'];
$temporaryColumns['custom1']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom1';

$temporaryColumns['custom2'] = $temporaryColumns['custom0'];
$temporaryColumns['custom2']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom2';

$temporaryColumns['custom3'] = $temporaryColumns['custom0'];
$temporaryColumns['custom3']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom3';

$temporaryColumns['custom4'] = $temporaryColumns['custom0'];
$temporaryColumns['custom4']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom4';

$temporaryColumns['custom5'] = $temporaryColumns['custom0'];
$temporaryColumns['custom5']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom5';

$temporaryColumns['custom6'] = $temporaryColumns['custom0'];
$temporaryColumns['custom6']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom6';

$temporaryColumns['custom7'] = $temporaryColumns['custom0'];
$temporaryColumns['custom7']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom7';

$temporaryColumns['custom8'] = $temporaryColumns['custom0'];
$temporaryColumns['custom8']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom8';

$temporaryColumns['custom9'] = $temporaryColumns['custom0'];
$temporaryColumns['custom9']['label'] =
    'LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:custom9';


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'fe_users',
    '--div--;LLL:EXT:ew_sfregister_extended/Resources/Private/Language/locallang_be.xml:fe_users.div.customs,
		custom0, custom1, custom2, custom3, custom4, custom5, custom6, custom7, custom8, custom9'
);
