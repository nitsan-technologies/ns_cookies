<?php
defined('TYPO3_MODE') || die('Access denied.');

$_EXTKEY = 'ns_cookies';
// Add default include static TypoScript (for root page)
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', '[NITSAN] Cookies hint');
