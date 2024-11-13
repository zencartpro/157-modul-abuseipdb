<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023-2024 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.1.3.php 2024-11-13 16:13:16Z webchills $
 */
 
 $db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'AbuseIPDB'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, date_added, sort_order, use_function, set_function) VALUES
('AbuseIPDB - User ID', 'ABUSEIPDB_USERID', '', 'This is the UserID of the AbuseIPDB account. You can find this by visiting your account summary on AbuseIPDB.com and copying the numbers that appear at the end of the profile URL.<br><br>For example, if your profile was <code>https://www.abuseipdb.com/user/XXXXXX</code>, you would enter <code>XXXXXX</code> here.', @gid, now(), 13, NULL, NULL)");

$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('AbuseIPDB - User ID', 'ABUSEIPDB_USERID', 'Dies ist die Benutzer-ID des AbuseIPDB-Kontos. Sie finden diese, indem Sie Ihre Kontoübersicht auf AbuseIPDB.com aufrufen und die Zahlen am Ende der Profil-URL kopieren.<br><br>Wenn Ihr Profil beispielsweise <code>https://www.abuseipdb.com/user/XXXXXX</code> lautet, geben Sie hier <code>XXXXXX</code> ein.<br><br>', 43)");

$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.1.3' WHERE configuration_key = 'ABUSEIPDB_MODUL_VERSION';");