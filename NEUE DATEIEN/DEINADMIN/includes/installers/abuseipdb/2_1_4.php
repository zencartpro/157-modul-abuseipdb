<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023-2025 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.1.4.php 2025-01-15 12:13:16Z webchills $
 */ 

$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.1.4' WHERE configuration_key = 'ABUSEIPDB_MODUL_VERSION';");