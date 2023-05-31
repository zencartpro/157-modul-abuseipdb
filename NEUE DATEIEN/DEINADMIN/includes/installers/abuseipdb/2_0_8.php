<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.0.8.php 2023-05-31 10:21:16Z webchills $
 */
 
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'AbuseIPDB'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO ".TABLE_CONFIGURATION." (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, date_added, sort_order, use_function, set_function) VALUES
('Enable IP Blacklist File?', 'ABUSEIPDB_BLACKLIST_ENABLE', 'false', 'Enable or disable the use of a blacklist file for blocking IP addresses. If enabled, make sure you have specified the path to the file in the following setting.', @gid, now(), 17, NULL, 'zen_cfg_select_option(array(\'true\', \'false\'),'),
('Blacklist File Path', 'ABUSEIPDB_BLACKLIST_FILE_PATH', 'includes/blacklist.txt', 'The complete path including the filename of the file containing blacklisted IP addresses. Each IP address should be on a new line. This will only be used if the above setting is enabled.', @gid, now(), 18, NULL, NULL)");

$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('AbuseIPDB - Textdatei für IP Blacklist aktivieren?', 'ABUSEIPDB_BLACKLIST_ENABLE', 'Aktivieren oder deaktivieren Sie die Verwendung einer Blacklist-Textdatei zum Blockieren von IP-Adressen. Falls aktiviert, stellen Sie sicher, dass Sie den Pfad zu der Datei in der folgenden Einstellung angegeben haben.<br>', 43),
('AbuseIPDB - Pfad zur Blacklist Textdatei', 'ABUSEIPDB_BLACKLIST_FILE_PATH', 'Der vollständige Pfad einschließlich des Dateinamens der Datei, die die IP-Adressen auf der Blacklist enthält. Jede IP-Adresse sollte in einer neuen Zeile stehen. Diese Datei wird nur verwendet, wenn die Einstellung Textdatei für IP Blacklist aktivieren aktiviert ist.<br>', 43)");

$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.0.8' WHERE configuration_key = 'ABUSEIPDB_MODUL_VERSION';");