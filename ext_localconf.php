<?php

// Pre TYPO3 10
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sf_register']['extender']['FrontendUser']['ew_sfregister_extended'] =
    'EXT:ew_sfregister_extended/Classes/Domain/Model/FrontendUser.php';

// Post TYPO3 10
$GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['sf_register']['extender'][
    \Evoweb\SfRegister\Domain\Model\FrontendUser::class
]['ew_sfregister_extended'] = 'EXT:ew_sfregister_extended/Classes/Domain/Model/FrontendUser.php';
