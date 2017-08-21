<?php
/**
 * Enable testing using sqlite3 in-memory database if we're not in Live mode and url begins with /dev/tests
 */
if (!Director::isLive()) {
	if ((isset($_REQUEST['url']) && trim(substr($_REQUEST['url'], 0, 10), '/') == 'dev/tests')) {
		global $databaseConfig;
		$databaseConfig['type'] = 'SQLite3Database';
		$databaseConfig['path'] = ':memory:';
	}
}