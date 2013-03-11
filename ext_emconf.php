<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "intelli_cache".
 *
 * Auto generated 11-03-2013 19:42
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Intelligent Cache Management',
	'description' => 'Auto clears cache based on extension names.',
	'category' => 'be',
	'author' => 'Kay Strobach',
	'author_email' => 'typo3@kay-strobach.de',
	'shy' => '',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'module' => '',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author_company' => '',
	'version' => '0.0.2',
	'constraints' => 
	array (
		'depends' => 
		array (
			'typo3' => '4.5.0-6.0.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'suggests' => 
	array (
	),
	'_md5_values_when_last_written' => 'a:3:{s:17:"ext_localconf.php";s:4:"0f09";s:14:"ext_tables.php";s:4:"d41d";s:31:"Classes/Hook/ProcessDatamap.php";s:4:"1670";}',
);

?>