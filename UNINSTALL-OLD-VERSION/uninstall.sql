#######################################################################################################
# AbuseIPDB UNINSTALL - 2023-05-31 - webchills
# NUR AUSFÜHREN FALLS SIE DAS ALTE MODUL 2.1.6 VOLLSTÄNDIG ENTFERNEN WOLLEN!!!
########################################################################################################
DELETE FROM configuration_group WHERE configuration_group_title = 'AbuseIPDB';
DELETE FROM configuration WHERE configuration_key LIKE 'ABUSEIPDB_%';
DELETE FROM configuration_language WHERE configuration_key LIKE 'ABUSEIPDB_%';
DELETE FROM admin_pages WHERE page_key = 'configAbuseIPDB';
DROP TABLE IF EXISTS abuseipdb_cache;
DROP TABLE IF EXISTS abuseipdb_maintenance;