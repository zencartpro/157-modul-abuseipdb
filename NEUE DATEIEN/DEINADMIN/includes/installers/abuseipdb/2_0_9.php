<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.0.9.php 2023-06-24 20:21:16Z webchills $
 */
 
$db->Execute(" SELECT @gid:=configuration_group_id
FROM ".TABLE_CONFIGURATION_GROUP."
WHERE configuration_group_title= 'AbuseIPDB'
LIMIT 1;");

$db->Execute("INSERT IGNORE INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, date_added, sort_order, use_function, set_function) VALUES
('Redirect URL', 'ABUSEIPDB_REDIRECT_OPTION', 'forbidden', 'The option for redirecting the user if their IP is found to be abusive. <br><br><b>Option 1:</b> Page Not Found - If selected, the user will be redirected to the Page Not Found page on your website if their IP is found to be abusive. This provides a generic error page to the user.<br><br><b>Option 2:</b> 403 Forbidden - If selected, the user will be shown a 403 Forbidden error message if their IP is found to be abusive. This is the default option and provides a more explicit message indicating that the user is forbidden from accessing the website due to their IP being flagged as abusive.', @gid, now(), 22, NULL, 'zen_cfg_select_option(array(\'page_not_found\', \'forbidden\'),')");

$db->Execute("REPLACE INTO ".TABLE_CONFIGURATION_LANGUAGE." (configuration_title, configuration_key, configuration_description, configuration_language_id) VALUES
('AbuseIPDB - Weiterleitung für gesperrte IPs', 'ABUSEIPDB_REDIRECT_OPTION', 'Wohin sollen gesperrte IPs weitergeleitet werden?<br><br><b>Option 1:</b> Seite nicht gefunden - Wenn diese Option ausgewählt ist, wird der Benutzer auf die Seite page_not_found (404) auf Ihrer Website umgeleitet, wenn seine IP als missbräuchlich eingestuft wird. Dies bietet dem Benutzer eine allgemeine Fehlerseite.<br><br><b>Option 2:</b> 403 Forbidden - Wenn ausgewählt, wird dem Benutzer eine 403 Forbidden-Fehlermeldung angezeigt, wenn seine IP als missbräuchlich eingestuft wird. Dies ist die Standardoption und bietet eine explizitere Meldung, die darauf hinweist, dass dem Benutzer der Zugriff auf die Website untersagt ist, da seine IP als missbräuchlich eingestuft wurde.<br><br>', 43)");

$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.0.9' WHERE configuration_key = 'ABUSEIPDB_MODUL_VERSION';");