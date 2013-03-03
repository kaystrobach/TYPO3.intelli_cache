<?php

class tx_intelliCache_Hook_ProcessDatamap{
	function processDatamap_afterDatabaseOperations($status, $table, $id, &$fieldArray, &$pObj) {
		$meta = explode('_', $table);
		switch($meta[0]) {
			case 'tt':
			case 'tx':
				$pages = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows (
					'pid',
					'tt_content',
					'deleted = 0'
						.' AND hidden = 0'
						.' AND ('
							.'    CType     LIKE "%' . $GLOBALS['TYPO3_DB']->escapeStrForLike($meta[1], 'tt_content') . '%"'
							.'OR  list_type LIKE "%' . $GLOBALS['TYPO3_DB']->escapeStrForLike($meta[1], 'tt_content') . '%"'
						.')'
				);
				/**
				 * @var $tce t3lib_TCEmain
				 */
				$tce = t3lib_div::makeInstance('t3lib_TCEmain');
				$tce->stripslashes_values = 0;
					// Initialize
				$user = clone $GLOBALS['BE_USER'];
				$user->user['admin'] = 1;
				$tce->BE_USER = $user;
				$tce->admin = 1;
					// Clear the cache (note: currently only admin-users can clear the cache in tce_main.php)
				foreach($pages as $page) {
					$tce->clear_cacheCmd($page['pid']);
				}
			break;
			default:
				// do nothing if page is unknown ...
			break;
		}
	}
}