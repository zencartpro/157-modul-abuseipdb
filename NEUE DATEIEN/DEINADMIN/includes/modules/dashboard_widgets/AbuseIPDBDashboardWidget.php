<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7
 * Zen Cart German Version - www.zen-cart-pro.at
 * Copyright 2023-2024 marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * license GNU General Public License (GPL)
 * version $Id: AbuseIPDBDashboardWidget.php 2024-11-13 16:13:16Z webchills $
 */

if (!zen_is_superuser() && !check_page(FILENAME_ORDERS, '')) return;

// to disable this module for everyone, uncomment the following "return" statement so the rest of this file is ignored
// return;

?>
<?php if(zen_not_null(ABUSEIPDB_USERID) && ABUSEIPDB_ENABLED == 'true') { ?>
  <div class="panel panel-default reportBox">
    <div class="panel-heading header">
        <?php echo BOX_ABUSEIPDB_HEADER; ?>
    </div>

    <div class="panel-body" style="text-align: center;">
      <a href="https://www.abuseipdb.com/user/<?php echo ABUSEIPDB_USERID; ?>" target="_blank" title="AbuseIPDB is an IP address blacklist for webmasters and sysadmins to report IP addresses engaging in abusive behavior on their networks">
        <img src="https://www.abuseipdb.com/contributor/<?php echo ABUSEIPDB_USERID; ?>.svg" alt="AbuseIPDB Contributor Badge" style="width: 401px;box-shadow: 2px 2px 1px 1px rgba(0, 0, 0, .2);">
      </a>
    </div>
  </div>
<?php } ?>