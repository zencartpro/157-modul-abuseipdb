<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023-2025 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: 2.1.6.php 2025-01-27 15:31:16Z webchills $
 */ 

$db->Execute("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '2.1.6' WHERE configuration_key = 'ABUSEIPDB_MODUL_VERSION';");