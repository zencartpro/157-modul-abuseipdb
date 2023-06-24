<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.1.1.php 2023-06-24 21:44:16Z webchills $
 */
 
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'AbuseIPDB'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, date_added, sort_order, use_function, set_function) VALUES
('Log File Format Cache', 'ABUSEIPDB_LOG_FILE_FORMAT_CACHE', 'abuseipdb_blocked_cache_%Y_%m.log', 'The log file format for cache logging.', @gid, now(), 41, NULL, NULL),
('Log File Format API', 'ABUSEIPDB_LOG_FILE_FORMAT_API', 'abuseipdb_api_call_%Y_%m_%d.log', 'The log file format for api logging.', @gid, now(), 42, NULL, NULL),
('Log File Format Spiders', 'ABUSEIPDB_LOG_FILE_FORMAT_SPIDERS', 'abuseipdb_spiders_%Y_%m_%d.log', 'The log file format for spider logging.', @gid, now(), 43, NULL, NULL)");

$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('AbuseIPDB - Logfile Format für Caching', 'ABUSEIPDB_LOG_FILE_FORMAT_CACHE', 'Wie soll der Dateiname für das Logfile aussehen, in dem gecachte IPs protokolliert werden?<br><br>', 43),
('AbuseIPDB - Logfile Format für API Zugriff', 'ABUSEIPDB_LOG_FILE_FORMAT_API', 'Wie soll der Dateiname für das Logfile aussehen, in dem Zugriffe auf die AbuseIPDB API protokolliert werden?<br><br>', 43),
('AbuseIPDB - Logfile Format für Spider Protokollierung', 'ABUSEIPDB_LOG_FILE_FORMAT_SPIDERS', 'Wie soll der Dateiname für das Logfile aussehen, in dem Spider protokolliert werden?<br><br>', 43)");

$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.1.1' WHERE configuration_key = 'ABUSEIPDB_MODUL_VERSION';");