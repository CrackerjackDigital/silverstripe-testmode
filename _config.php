<?php
/**
 * Enable testing using sqlite3 in-memory database if we're not in Live mode and url begins with /dev/tests
 */
if (!Director::isLive()) {
	if ((isset($_REQUEST['url']) && substr($_REQUEST['url'], 0, 12) == '/dev/tests/')) {
		global $databaseConfig;
		$databaseConfig['SS_DATABASE_TYPE'] = 'SQLite3Database';
		$databaseConfig['SS_DATABASE_PATH'] = ':memory:';
	}
}