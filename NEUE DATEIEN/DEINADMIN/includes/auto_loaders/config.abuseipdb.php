<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: config.abuseipdb.php 2023-06-24 20:10:16Z webchills $
 */
 
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
} 

$autoLoadConfig[200][] = array(
  'autoType' => 'init_script',
  'loadFile' => 'init_abuseipdb.php'
);