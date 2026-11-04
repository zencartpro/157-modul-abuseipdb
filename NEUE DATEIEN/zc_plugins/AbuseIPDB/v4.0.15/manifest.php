<?php
if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}
return [
    'pluginVersion' => 'v4.0.15',
    'pluginName' => "AbuseIPDB",
    'pluginDescription' => 'Schützen Sie Ihren Onlineshop vor Zugriffen bösartiger IP Adressen.',
    'pluginAuthor' => 'marcopolo',
    'pluginId' => 0, 
    'zcVersions' => ['v157'],
    'changelog' => 'https://github.com/zencartpro/157-modul-abuseipdb/releases',
    'github_repo' => 'https://github.com/zencartpro/157-modul-abuseipdb', 
    'pluginGroups' => [],
];
