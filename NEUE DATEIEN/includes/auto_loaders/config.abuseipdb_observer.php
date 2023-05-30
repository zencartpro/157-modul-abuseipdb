<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * @Copyright 2023 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * @license GNU General Public License (GPL)
 * @version $Id: config.abuseipdb_observer.php 2023-05-30 10:34:16Z webchills $
 */
$autoLoadConfig[0][] = array ('autoType'   => 'class',
                                'loadFile'   => 'observers/class.abuseipdb_observer.php');
$autoLoadConfig[0][] = array ('autoType'   => 'classInstantiate',
                                'className'  => 'abuseipdb_observer',
                                'objectName' => 'abuseipdb_observer');
								