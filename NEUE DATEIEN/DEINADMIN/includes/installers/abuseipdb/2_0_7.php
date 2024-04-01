<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.0.7.php 2024-04-01 21:34:16Z webchills $
 */


$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'AbuseIPDB'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, date_added, sort_order, use_function, set_function) VALUES
('Enable AbuseIPDB?', 'ABUSEIPDB_ENABLED', 'false', '', @gid, now(), 1, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('AbuseIPDB: API Key', 'ABUSEIPDB_API_KEY', '', '', @gid, now(), 2, NULL, NULL),
('Score Threshold', 'ABUSEIPDB_THRESHOLD', '50', 'The minimum AbuseIPDB score to block an IP address.', @gid, now(), 3, NULL, NULL),
('Cache Time', 'ABUSEIPDB_CACHE_TIME', '3600', 'The time in seconds to cache AbuseIPDB results.', @gid, now(), 4, NULL, NULL),
('Enable Test Mode?', 'ABUSEIPDB_TEST_MODE', 'false', 'Enable or disable test mode for the plugin.', @gid, now(), 5, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Test IP Address', 'ABUSEIPDB_TEST_IP', '', 'Enter the IP addresses separated by commas without any spaces to use for testing the plugin.', @gid, now(), 6, NULL, NULL),
('Enable Logging?', 'ABUSEIPDB_ENABLE_LOGGING', 'false', 'Enable or disable logging of blocked IP addresses.', @gid, now(), 7, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Log File Format', 'ABUSEIPDB_LOG_FILE_FORMAT', 'abuseipdb_blocked_Y_m.log', 'The log file format for blocked IP addresses.', @gid, now(), 40, NULL, NULL),
('Log File Path', 'ABUSEIPDB_LOG_FILE_PATH', '/var/xxx/xxx/logs/', 'The path to the directory where log files are stored.', @gid, now(), 9, NULL, NULL),
('IP Address: Whitelist', 'ABUSEIPDB_WHITELISTED_IPS', '', 'Enter the IP addresses separated by commas without any spaces, like this: 192.168.1.1,192.168.2.2,192.168.3.3', @gid, now(), 10, NULL, 'zen_cfg_textarea('),
('IP Address: Blacklist', 'ABUSEIPDB_BLOCKED_IPS', '', 'Enter the IP addresses separated by commas without any spaces, like this: 192.168.1.1,192.168.2.2,192.168.3.3', @gid, now(), 11, NULL, 'zen_cfg_textarea('),
('Enable Logging API Calls?', 'ABUSEIPDB_ENABLE_LOGGING_API', 'false', 'Enable or disable logging of API Calls.', @gid, now(), 12, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Enable IP Cleanup?', 'ABUSEIPDB_CLEANUP_ENABLED', 'false', 'Enable or disable automatic IP cleanup', @gid, now(),13, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('IP Cleanup Period (in days)', 'ABUSEIPDB_CLEANUP_PERIOD', '30', 'Expiration period in days for IP records', @gid, now(), 14, NULL, NULL),
('Allow Spiders?', 'ABUSEIPDB_SPIDER_ALLOW', 'true', 'Enable or disable allowing known spiders to bypass IP checks.', @gid, now(), 15, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Enable Logging Spiders?', 'ABUSEIPDB_SPIDER_ALLOW_LOG', 'false', 'Enable or disable logging of allowed known spiders that bypass IP checks.', @gid, now(), 16, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Enable Debug?', 'ABUSEIPDB_DEBUG', 'false', '', @gid, now(), 30, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),')");

$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('AbuseIPDB - Aktivieren', 'ABUSEIPDB_ENABLED', 'Stellen Sie auf true, um AbuseIPDB zu aktivieren.<br>', 43),
('AbuseIPDB - API Key', 'ABUSEIPDB_API_KEY', 'Tragen Sie hier Ihren AbuseIPFB API-Key ein:<br>', 43),
('AbuseIPDB - Schwellenwert', 'ABUSEIPDB_THRESHOLD', 'Welcher AbusIPDB Score muss mindestens erreicht sein, damit eine IP Adresse geblockt wird?<br>Voreinstellung: 50<br>', 43),
('AbuseIPDB - Cache Zeit', 'ABUSEIPDB_CACHE_TIME', 'Zeit in Sekunden für das Caching von AbuseIPDB Abfragen.<br>Voreinstellung: 3600<br>', 43),
('AbuseIPDB - Testmodus aktivieren', 'ABUSEIPDB_TEST_MODE', 'Stellen Sie auf true, um das Modul im Testmodus zu betreiben.<br>', 43),
('AbuseIPDB - Test IP Adresse', 'ABUSEIPDB_TEST_IP', 'Tragen Sie hier eine oder mehrere IP-Adressen ein, mit der Sie im Testmodus testen wollen.<br>Geben Sie die IP Adressen kommagetrennt ohne Leerzeichen ein, z.B.: 192.168.1.1,192.168.2.2,192.168.3.3<br>', 43),
('AbuseIPDB - Logging aktivieren', 'ABUSEIPDB_ENABLE_LOGGING', 'Sollen geblockte IP-Adressen in einem Logfile protokolliert werden?<br>', 43),
('AbuseIPDB - Logfile Format', 'ABUSEIPDB_LOG_FILE_FORMAT', 'Dateiname des Logfiles für geblockte IP-Adressen:<br>', 43),
('AbuseIPDB - Logfile Pfad', 'ABUSEIPDB_LOG_FILE_PATH', 'Geben Sie hier den absoluten Pfad zum Ordner an, in dem die AbuseIPDB Logfiles gespeichert werden sollen.<br>Es empfiehlt sich dafür ein Verzeichnis unterhalb des www zu verwenden, damit die Logfiles keinesfalls im Browser aufrufbar sind.<br>', 43),
('AbuseIPDB - Whitelist', 'ABUSEIPDB_WHITELISTED_IPS', 'Wenn Sie hier IP-Adressen eintragen, werden die immer erlaubt, völlig unabhängig von ihrem AbuseIPDB Score<br>Geben Sie die IP Adressen kommagetrennt ohne Leerzeichen ein, z.B.: 192.168.1.1,192.168.2.2,192.168.3.3<br>', 43),
('AbuseIPDB - Blacklist', 'ABUSEIPDB_BLOCKED_IPS', 'Wenn Sie hier IP-Adressen eintragen, werden die immer geblockt, völlig unabhängig von ihrem AbuseIPDB Score<br>Geben Sie die IP Adressen kommagetrennt ohne Leerzeichen ein, z.B.: 192.168.1.1,192.168.2.2,192.168.3.3<br>', 43),
('AbuseIPDB - Logging für API Anfragen aktivieren', 'ABUSEIPDB_ENABLE_LOGGING_API', 'Sollen die API Anfragen in einem Logfile protokolliert werden?<br>', 43),
('AbuseIPDB - IP Adressen regelmäßig löschen?', 'ABUSEIPDB_CLEANUP_ENABLED', 'Sollen die IP Adressen regelmäßig aus der Datenbanktabelle abuseipdb_cache gelöscht werden?<br>', 43),
('AbuseIPDB - Intervall für Löschung', 'ABUSEIPDB_CLEANUP_PERIOD', 'Geben Sie hier das Ablaufdatum in Tagen ein (Voreinstellung: 30).<br>Nach diesem Zeitraum werden die IP Adressen aus der Tabelle abuseipdb_cache entfernt, falls Sie das oben aktiviert haben.<br>', 43),
('AbuseIPDB - Spider erlauben', 'ABUSEIPDB_SPIDER_ALLOW', 'Sollen bekannte Spider von den AbuseIPDB Prüfungen ausgenommen sein?<br>Empfohlene Einstellung: true<br>Sie erreichen sonst sehr schnell Ihr API Limit bei AbuseIPDB!<br>', 43),
('AbuseIPDB - Spider loggen', 'ABUSEIPDB_SPIDER_ALLOW_LOG', 'Sollen bekannte Spider, die keine API Anfrage auslösen, in einem Logfile protokolliert werden?<br>', 43),
('AbuseIPDB - Debugging aktivieren', 'ABUSEIPDB_DEBUG', 'Wenn Sie hier das Debugging aktivieren, wird jede Aktion des Moduls in einem Logfile protokolliert.<br>Nur zur Fehlersuche sinnvoll!<br>', 43)");



$db->Execute(
				"CREATE TABLE IF NOT EXISTS " . TABLE_ABUSEIPDB_CACHE . " (
				ip VARCHAR(45) NOT NULL,
				score INT NOT NULL,
				timestamp DATETIME NOT NULL,
				PRIMARY KEY(ip)
			)"
		);
		
$db->Execute("CREATE TABLE IF NOT EXISTS " . TABLE_ABUSEIPDB_MAINTENANCE  . " (
				last_cleanup DATETIME NOT NULL,
				timestamp DATETIME NOT NULL,
				PRIMARY KEY (last_cleanup)
			)"
		);

$admin_page = 'configAbuseIPDB';
// delete configuration menu
$db->Execute("DELETE FROM " . TABLE_ADMIN_PAGES . " WHERE page_key = '" . $admin_page . "' LIMIT 1;");
// add configuration menu
if (!zen_page_key_exists($admin_page)) {
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'AbuseIPDB'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO " . TABLE_ADMIN_PAGES . " (page_key,language_key,main_page,page_params,menu_key,display_on_menu,sort_order) VALUES 
('configAbuseIPDB','BOX_CONFIGURATION_ABUSEIPDB','FILENAME_CONFIGURATION',CONCAT('gID=',@gid),'configuration','Y',@gid)");
$messageStack->add('AbuseIPDB Konfiguration erfolgreich hinzugefügt.', 'success');  
}