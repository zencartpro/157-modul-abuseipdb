<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7j
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023-2025 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: config.abuseipdb.php 2025-06-25 13:10:16Z webchills $
 */

// Define table constants if not already defined
if (!defined('TABLE_ABUSEIPDB_CACHE')) {
    define('TABLE_ABUSEIPDB_CACHE', DB_PREFIX . 'abuseipdb_cache');
}

if (!defined('TABLE_ABUSEIPDB_MAINTENANCE')) {
    define('TABLE_ABUSEIPDB_MAINTENANCE', DB_PREFIX . 'abuseipdb_maintenance');
}

if (!defined('TABLE_ABUSEIPDB_FLOOD')) {
    define('TABLE_ABUSEIPDB_FLOOD', DB_PREFIX . 'abuseipdb_flood');
}
if (!defined('TABLE_ABUSEIPDB_ACTIONS')) {
    define('TABLE_ABUSEIPDB_ACTIONS', DB_PREFIX . 'abuseipdb_actions');
}