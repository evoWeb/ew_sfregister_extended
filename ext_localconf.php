<?php

$extension = 'ew_sfregister_extended';
$model = \Evoweb\SfRegister\Domain\Model\FrontendUser::class;
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['sf_register']['extender'][$model][$extension] =
	'EXT:ew_sfregister_extended/Classes/Domain/Model/FrontendUser.php';
