<?php
/**
 * AbuseIPDB for Zen Cart German 1.5.7k
 * Zen Cart German Version - www.zen-cart-pro.at
 * @requires    Zen Cart 1.5.7k German and PHP 8.4.x
 * @author      Marcopolo
 * see https://github.com/CcMarc/AbuseIPDB
 * @copyright   2023-2026
 * @license     GNU General Public License (GPL) - https://www.gnu.org/licenses/gpl-3.0.html
 * @version     4.0.17
 * @updated     2026-11-22 - webchills for Zen Cart German 
 */

if (!defined('IS_ADMIN_FLAG')) {
    die('Illegal Access');
}

return [
    // Console: page and messages
    'AIPDB_CON_HEADING' => 'AbuseIPDB-Konsole',
    'AIPDB_CON_TAB_BLOCKS' => 'Sperren',
    'AIPDB_CON_TAB_LOOKUP' => 'IP-Suche',
    
    'AIPDB_CON_TAB_LOGS' => 'Logs',
    'AIPDB_CON_NOT_INSTALLED' => 'Die Blocktabelle ist noch nicht installiert. Führen Sie das Plugin-Upgrade im Plugin-Manager durch.',
    'AIPDB_CON_MSG_WRITE_OFF' => 'Das Schreiben in die .htaccess-Datei ist deaktiviert, daher wurde die Datei nicht geändert. Die in der Datei noch aufgeführten Blöcke wurden beibehalten.',
    'AIPDB_CON_MSG_BUSY' => 'Eine andere Anfrage aktualisiert gerade die .htaccess. Bitte versuche es erneut.',
    'AIPDB_CON_MSG_WRITE_FAILED' => '.htaccess konnte nicht aktualisiert werden. Überprüfe, ob die Datei vorhanden und beschreibbar ist, und sieh dir dann die Registerkarte „Protokolle“ an.',
    
    'AIPDB_CON_MSG_TOKEN' => 'Ihr Sitzungs-Token stimmte nicht überein. Es wurden keine Änderungen vorgenommen.',
    'AIPDB_CON_MSG_NO_TABLE' => 'Die Blockiertabelle ist noch nicht installiert. Führen Sie zuerst das Plugin-Upgrade durch.',
    'AIPDB_CON_MSG_INVALID_IP' => 'Geben Sie eine gültige IPv4- oder IPv6-Adresse ein.',
    
    'AIPDB_CON_MSG_OWN_IP' => 'Das ist die Adresse, von der aus Sie angemeldet sind. Sie wurde nicht gesperrt.',
    'AIPDB_CON_MSG_NOT_BLOCKED' => '%1$s wurde nicht gesperrt: %2$s.',
    
    'AIPDB_CON_SKIP_WHITELISTED' => 'auf der Whitelist',
    'AIPDB_CON_SKIP_ALREADY_BLOCKED' => 'bereits gesperrt',
    'AIPDB_CON_MSG_RECORDED' => '%s wurde protokolliert, aber die .htaccess-Datei konnte nicht aktualisiert werden. Der Vorgang wird beim nächsten Aufruf der Shop Frontend-Seite erneut versucht. Siehe Registerkarte „Protokolle“.',
    'AIPDB_CON_MSG_BLOCKED' => '%s gesperrt.',
    'AIPDB_CON_MSG_UNBLOCKED' => '%s entsperrt.',
    'AIPDB_CON_MSG_NONE_SELECTED' => 'Es wurden keine IP-Adressen ausgewählt.',
    
    'AIPDB_CON_MSG_BULK_WHITELISTED' => '%s IP(s) entsperrt und auf die Whitelist gesetzt.',
    'AIPDB_CON_MSG_BULK_UNBLOCKED' => '%s IP(s) entsperrt.',
    'AIPDB_CON_MSG_BAD_EXPIRY' => 'Dieses Ablaufdatum konnte nicht gelesen werden.',
    
    'AIPDB_CON_MSG_EXPIRY_CHANGED' => 'Das Ablaufdatum für %s IP(s) wurde geändert.',
    'AIPDB_CON_MSG_CHOOSE_ACTION' => 'Wählen Sie eine Aktion für die ausgewählten IPs aus.',
    'AIPDB_CON_MSG_IN_SYNC' => 'Der .htaccess-Abschnitt stimmt mit der Sperrliste überein.',
    
    'AIPDB_CON_MSG_RESTORED' => 'Sicherung wiederhergestellt. Die Sperrliste wurde mit der wiederhergestellten Datei abgeglichen.',
    'AIPDB_CON_MSG_RESTORED_PARTLY' => 'Sicherung wiederhergestellt, aber die Sperrliste konnte nicht mit ihr abgeglichen werden. Verwenden Sie den Abschnitt „Rewrite“ und sehen Sie sich anschließend die Registerkarte „Protokolle“ an.',
    'AIPDB_CON_MSG_RESTORE_OFF' => 'Das Schreiben in die .htaccess-Datei ist deaktiviert, daher wurde die Sicherung nicht wiederhergestellt.',
    'AIPDB_CON_MSG_RESTORE_FAILED' => 'Die Sicherung konnte nicht wiederhergestellt werden. Die aktuelle Datei wurde unverändert belassen.',
    'AIPDB_CON_MSG_CACHE_CLEARED' => 'Zwischengespeicherte Bewertung für %s gelöscht. Sie wird beim nächsten Besuch erneut abgerufen.',
    'AIPDB_CON_MSG_SETTING_FAILED' => 'Die Einstellung konnte nicht aktualisiert werden.',
    
    'AIPDB_CON_MSG_BLACKLISTED' => '%s wurde zur Blacklist hinzugefügt.',
    'AIPDB_CON_MSG_WHITELISTED' => '%s wurde zur Whitelist hinzugefügt.',
    'AIPDB_CON_MSG_UNKNOWN' => 'Unbekannte Aktion.',

    // Console: Blocks tab
    'AIPDB_CON_SOURCE_SESSION' => 'Sitzungsrate',
    'AIPDB_CON_SOURCE_MANUAL' => 'Manuell',
    'AIPDB_CON_SOURCE_IMPORTED' => 'Importiert',
    'AIPDB_CON_FILE_DETAIL' => '%1$s KB, %2$s geschrieben',
    
    'AIPDB_CON_FILE_WRITES' => '%1$s, %2$s Schreibvorgänge',
    'AIPDB_CON_FILE_MISSING' => 'Fehlt',
    'AIPDB_CON_FILE_WRITING_OFF' => 'Wird geschrieben',
    
    'AIPDB_CON_FILE_NOT_WRITABLE' => 'Nicht beschreibbar',
    'AIPDB_CON_FILE_OUT_OF_SYNC' => 'Nicht synchronisiert (%s)',
    'AIPDB_CON_FILE_IN_SYNC' => 'Synchronisiert',
    
    'AIPDB_CON_TILE_ACTIVE' => 'Aktive Sperren',
    'AIPDB_CON_TILE_EXPIRING' => 'Läuft in 24 Stunden ab',
    
    'AIPDB_CON_TILE_EXPIRY' => 'Ablauf der Sperren',
    'AIPDB_CON_TILE_EXPIRY_TIP' => 'Neue Sperren werden nach dieser Anzahl von Tagen automatisch entfernt. Wird in den AbuseIPDB-Einstellungen festgelegt. Bei 0 bleiben Sperren so lange bestehen, bis Sie sie entsperren.',
    
    'AIPDB_CON_DAYS' => '%s Tage',
    'AIPDB_CON_NEVER' => 'Nie',
    'AIPDB_CON_NEVER_LOWER' => 'nie',
    'AIPDB_CON_HTACCESS_TIP' => '„Synchronisiert“ bedeutet, dass der Abschnitt in der .htaccess-Datei genau die hier angezeigten Sperren auflistet. Verwende den Rewrite-Abschnitt, um sie wieder in Einklang zu bringen.',
    'AIPDB_CON_HTACCESS_TIP_INPLACE' => 'Schreibvorgänge erfolgen an Ort und Stelle, da der Webserver nicht Eigentümer dieser Datei ist. Mache den Webserver-Benutzer zum Eigentümer von .htaccess und stelle den Ordner auf beschreibbar ein, um atomare Schreibvorgänge zu ermöglichen.',
    'AIPDB_CON_TILE_QUOTA' => 'API-Kontingent',
    
    'AIPDB_CON_QUOTA_LEFT' => 'von %s verbleibend',
    'AIPDB_CON_QUOTA_NONE' => 'Bisher keine API-Aufrufe aufgezeichnet',
    'AIPDB_CON_LABEL_IP' => 'IP-Adresse',
    'AIPDB_CON_LABEL_NOTE' => 'Hinweis',
    
    'AIPDB_CON_NOTE_PLACEHOLDER' => 'optional',
    'AIPDB_CON_LABEL_EXPIRES' => 'Ablaufdatum',
    'AIPDB_CON_EXPIRY_DEFAULT' => 'Standard (%s)',
    'AIPDB_CON_BUTTON_BLOCK' => 'IP sperren',
    
    'AIPDB_CON_BUTTON_REWRITE' => 'Abschnitt neu schreiben',
    'AIPDB_CON_REWRITE_TIP' => 'Den .htaccess-Abschnitt jetzt anhand der Sperrliste neu erstellen.',
    
    'AIPDB_CON_CURRENT_BLOCKS' => 'Aktuelle Sperren',
    'AIPDB_CON_SHOWING' => 'Anzeige von %1$s von %2$s',
    'AIPDB_CON_LABEL_FIND' => 'Suchen',
    'AIPDB_CON_FIND_PLACEHOLDER' => 'IP, Land oder Notiz',
    
    'AIPDB_CON_LABEL_SOURCE' => 'Quelle',
    'AIPDB_CON_ALL' => 'Alle',
    'AIPDB_CON_BUTTON_FILTER' => 'Filtern',
    'AIPDB_CON_NO_BLOCKS' => 'Keine Sperren zum Anzeigen.',
    
    'AIPDB_CON_SELECT_ALL' => 'Alle auswählen',
    'AIPDB_CON_SELECT_IP' => '%s auswählen',
    'AIPDB_CON_TH_IP' => 'IP',
    
    'AIPDB_CON_TH_SCORE' => 'Bewertung',
    'AIPDB_CON_SCORE_TIP' => 'Zuletzt zwischengespeicherte AbuseIPDB-Bewertung für diese IP. Ein Bindestrich bedeutet, dass er nicht im Cache vorhanden ist.',
    'AIPDB_CON_SCORE_NA' => 'n/a',
    'AIPDB_CON_TH_COUNTRY' => 'Land',
    'AIPDB_CON_TH_BLOCKED' => 'Gesperrt',
    
    'AIPDB_CON_TH_ACTION' => 'Aktion',
    'AIPDB_CON_BUTTON_UNBLOCK' => 'Entsperren',
    'AIPDB_CON_CONFIRM_UNBLOCK' => '%s entsperren?',
    
    'AIPDB_CON_WITH_SELECTED' => 'Mit Auswahl',
    'AIPDB_CON_CHOOSE' => 'Auswählen',
    'AIPDB_CON_OP_SET_EXPIRY' => 'Ablaufdatum ändern',
    'AIPDB_CON_OP_WHITELIST' => 'Entsperren und zur Whitelist hinzufügen',
    
    'AIPDB_CON_NEW_EXPIRY' => 'Neues Ablaufdatum',
    'AIPDB_CON_NEW_EXPIRY_TIP' => 'Lassen Sie das Feld leer, um die ausgewählten Sperren so lange beizubehalten, bis Sie sie entsperren.',
    'AIPDB_CON_BUTTON_APPLY' => 'Übernehmen',
    
    'AIPDB_CON_PAGE_OF' => 'Seite %1$s von %2$s',
    'AIPDB_CON_PREVIOUS' => 'Zurück',
    'AIPDB_CON_NEXT' => 'Weiter',
    'AIPDB_CON_BACKUPS' => '.htaccess-Sicherungen',
    
    'AIPDB_CON_BACKUPS_KEPT' => '%s beibehalten',
    'AIPDB_CON_BACKUPS_NEWEST' => '%1$s beibehalten, neueste %2$s',
    'AIPDB_CON_BACKUPS_TIP' => 'Vor jeder Änderung wird eine Kopie der .htaccess-Datei gespeichert. Durch das Wiederherstellen wird die aktuelle Datei ersetzt, anschließend wird die Sperrliste mit ihr abgeglichen.',
    'AIPDB_CON_BACKUP_DETAIL' => '%1$s, %2$s KB',
    'AIPDB_CON_CONFIRM_RESTORE' => 'Die aktuelle .htaccess-Datei durch diese Sicherung ersetzen?',
    
    'AIPDB_CON_BUTTON_RESTORE' => 'Wiederherstellen',
    'AIPDB_CON_JS_NONE_SELECTED' => 'Keine IP-Adressen ausgewählt.',
    'AIPDB_CON_JS_CHOOSE_FIRST' => 'Wählen Sie zuerst eine Aktion aus.',
    
    'AIPDB_CON_JS_CONFIRM_EXPIRY' => 'Die Ablaufzeit für %1$s IP(s) auf %2$s ändern?',
    'AIPDB_CON_JS_CONFIRM_WHITELIST' => '%s IP(s) entsperren und auf die Whitelist setzen?',
    'AIPDB_CON_JS_CONFIRM_UNBLOCK' => '%s IP(s) entsperren?',

    // Console: IP Lookup tab
    'AIPDB_CON_FACT_NOT_CACHED' => 'Nicht im Cache',
    'AIPDB_CON_FACT_SCORE_NA' => 'k. A. (API zum Zeitpunkt der Abfrage nicht verfügbar)',
    
    'AIPDB_CON_FACT_CACHED' => '%s im Cache',
    'AIPDB_CON_FACT_UNKNOWN' => 'unbekannt',
    'AIPDB_CON_FACT_SESSIONS' => 'Sitzungen im Fenster',
    'AIPDB_CON_FACT_HTACCESS' => '.htaccess-Sperre',
    
    'AIPDB_CON_YES' => 'Ja',
    'AIPDB_CON_NO' => 'Nein',
    'AIPDB_CON_FACT_YES_SOURCE' => 'Ja, %s',
    
    'AIPDB_CON_FACT_SINCE_EXPIRES' => 'seit %1$s, läuft ab am %2$s',
    'AIPDB_CON_FACT_WHITELIST' => 'Whitelist',
    'AIPDB_CON_FACT_BLACKLIST' => 'Blacklist',
    
    'AIPDB_CON_FACT_IN_SETTINGS' => 'Ja, in den Einstellungen',
    'AIPDB_CON_FACT_IN_FILE' => 'Ja, in der Blacklist-Datei',
    'AIPDB_CON_FACT_FLOOD_2' => '2-Oktett-Flood',
    
    'AIPDB_CON_FACT_FLOOD_3' => '3-Oktett-Flood',
    'AIPDB_CON_FACT_FLOOD_COUNTRY' => 'Länder-Flood',
    'AIPDB_CON_FACT_NO_COUNTER' => 'Kein Zähler',
    
    'AIPDB_CON_FACT_REQUESTS' => '%s Anfragen',
    'AIPDB_CON_FACT_SINCE' => '%1$s, seit %2$s',
    'AIPDB_CON_FACT_HOME' => '%s, Heimatland',
    'AIPDB_CON_BUTTON_LOOKUP' => 'Nachschlagen',
    'AIPDB_CON_LOOKUP_NOTE' => 'Zeigt an, was das Modul bereits weiß. Es wird kein API-Aufruf durchgeführt.',
    'AIPDB_CON_LOOKUP_INVALID' => 'Das ist keine gültige IPv4- oder IPv6-Adresse.',
    'AIPDB_CON_BUTTON_BLOCK_HTACCESS' => 'In .htaccess blockieren',
    'AIPDB_CON_CONFIRM_BLOCK' => '%s blockieren?',
    
    'AIPDB_CON_BUTTON_CLEAR_CACHE' => 'Zwischengespeicherte Bewertung löschen',
    'AIPDB_CON_BUTTON_WHITELIST' => 'Zur Whitelist hinzufügen',
    'AIPDB_CON_BUTTON_BLACKLIST' => 'Zur Blacklist hinzufügen',

    // Console: Logs tab
    'AIPDB_CON_LOG_FILE' => 'Protokolldatei',
    'AIPDB_CON_LOG_TIP' => 'Das .htaccess-Protokoll (Protokolldateiformat „Htaccess“ in den Einstellungen) zeichnet jede Sperrung, Entsperrung, jedes Ablaufdatum und jeden Schreibvorgang in die .htaccess-Datei auf. Die neuesten Einträge werden zuerst angezeigt, bis zu 300 Zeilen.',
    'AIPDB_CON_BUTTON_VIEW' => 'Anzeigen',
    'AIPDB_CON_LOG_NONE' => 'In %s wurden keine AbuseIPDB-Protokolldateien gefunden',

    // Who's Online shields and legend
    'AIPDB_WHO_TITLE_SB' => 'Durch Punktzahl gesperrt (SB)',
    'AIPDB_WHO_TITLE_IB' => 'Durch IP-Blacklist gesperrt (IB)',
    'AIPDB_WHO_TITLE_MC' => 'Nach Land gesperrt (MC)',
    
    'AIPDB_WHO_TITLE_CF' => 'Durch Länder-Flood gesperrt (CF)',
    'AIPDB_WHO_TITLE_FF' => 'Durch ausländischen Flood gesperrt (FF)',
    
    'AIPDB_WHO_TITLE_FLOOD' => 'Durch Flood gesperrt (%s)',
    'AIPDB_WHO_TITLE_BLACKLIST' => 'IP manuell auf die Blacklist gesetzt',
    'AIPDB_WHO_BLACKLISTED' => 'Die IP %s wurde auf die Blacklist gesetzt.',
    
    'AIPDB_WHO_LEGEND' => 'AbuseIPDB-Legende:',
    'AIPDB_WHO_LEGEND_SB' => 'Punktzahl (SB)',
    'AIPDB_WHO_LEGEND_IB' => 'Sperrliste (IB)',
    'AIPDB_WHO_LEGEND_MC' => 'Land (MC)',
    
    'AIPDB_WHO_LEGEND_CF' => 'Länder-Flood (CF)',
    'AIPDB_WHO_LEGEND_FF' => 'Auslands-Flood (FF)',
    'AIPDB_WHO_LEGEND_FLOOD' => 'Flood (2F, 3F)',
    
    'AIPDB_WHO_LEGEND_DEFERRED' => 'Zurückgestellt (Anzahl)',
    'AIPDB_WHO_TITLE_DEFERRED' => 'An begleitendes Plugin weitergeleitet. Kein AbuseIPDB-API-Aufruf erfolgt. Die Zahl gibt die Gesamtzahl der Zurückstellungen für diese IP an.',
    
    'AIPDB_WHO_TIP_DEFERRED_TO' => 'An %s weitergeleitet',
    'AIPDB_WHO_TIP_LAST' => 'zuletzt %s',
    'AIPDB_WHO_TIP_NO_CALL' => 'kein AbuseIPDB-API-Aufruf verbraucht',
    'AIPDB_WHO_AGE_SECONDS' => 'vor %ss',
    
    'AIPDB_WHO_AGE_MINUTES' => '%sm vor',
    'AIPDB_WHO_AGE_HOURS' => '%sh vor',
    'AIPDB_WHO_AGE_DAYS' => '%sd vor',
    'AIPDB_WHO_SHIELD_LEGEND' => 'AbuseIPDB-Schutzlegende:',
    'AIPDB_WHO_SHIELD_SB' => 'Score-Block (SB)',
    
    'AIPDB_WHO_SHIELD_IB' => 'IP-Blacklist (IB)',
    'AIPDB_WHO_SHIELD_MC' => 'Ländersperre (MC)',
    'AIPDB_WHO_SHIELD_FLOOD' => 'Flood-Sperre (2F, 3F)',

    // Dashboard widget
    'AIPDB_WIDGET_SETUP' => 'Um dieses Widget zu verwenden, geben Sie bitte die \'AbuseIPDB: Benutzer-ID\' ein oder aktivieren Sie die Option \'Sitzungsratenbegrenzung aktivieren?\' in den AbuseIPDB-Konfigurationseinstellungen.',
    
    'AIPDB_WIDGET_BADGE_TITLE' => 'AbuseIPDB ist eine IP-Adressen-Blacklist für Webmaster und Systemadministratoren, um IP-Adressen zu melden, die in ihren Netzwerken missbräuchliches Verhalten zeigen',
    'AIPDB_WIDGET_BADGE_ALT' => 'AbuseIPDB-Mitwirkenden-Abzeichen',
    
    'AIPDB_WIDGET_BLOCKED_LABEL' => 'Gesperrte Sitzungs-IPs in .htaccess',
    'AIPDB_WIDGET_RECENT' => 'Aktuelle Sitzungssperren',
    'AIPDB_WIDGET_RECENT_NONE' => 'Es wurden keine aktuellen Sitzungssperren aufgezeichnet.',

    // Settings page helpers
    'AIPDB_CFG_QUOTA_NONE' => 'Es wurden noch keine API-Aufrufe erfasst.',
    
    'AIPDB_CFG_QUOTA_REMAINING' => '%1$s von %2$s Aufrufen verbleiben',
    'AIPDB_CFG_QUOTA_RESETS' => '%s zurücksetzen',
    'AIPDB_CFG_QUOTA_LAST' => 'letzte Antwort %s',
    
    'AIPDB_CFG_QUOTA_LAST_RETRY' => 'Letzte Antwort %1$s (Wiederholungsversuch nach %2$ss)',
    'AIPDB_CFG_QUOTA_UPDATED' => '%s aktualisiert',
    'AIPDB_CFG_TRIAGE_DETECTED' => 'Begleit-Plugin erkannt. Einstellung ist aktiv.',
    'AIPDB_CFG_TRIAGE_PER_REQUEST' => 'Aufschub pro Anfrage aktiv. Das Companion-Plugin stellt keine persistente Aufschubtabelle bereit (%s nicht implementiert).',
    'AIPDB_CFG_TRIAGE_PERSISTENT' => 'Persistenter Aufschub aktiv.',
    'AIPDB_CFG_TRIAGE_TABLE' => 'Automatisch erkannte Tabelle: %s',
    
    'AIPDB_CFG_TRIAGE_ROWS' => 'Aktuelle Aufschub-Zeilen: %s',
    'AIPDB_CFG_TRIAGE_LATEST' => 'Neuester Aufschub: %s',
    'AIPDB_CFG_TRIAGE_MISSING' => 'Das Companion-Plugin hat die Tabelle %s gemeldet, diese existiert jedoch nicht in der Datenbank. Das zugehörige Plugin muss möglicherweise im Plugin-Manager deinstalliert und neu installiert werden, um die Tabelle zu erstellen. Die Aufschiebung pro Anfrage funktioniert weiterhin.',
    'AIPDB_CFG_TRIAGE_NONE' => 'Kein zugehöriges Plugin erkannt. Diese Einstellung ist inaktiv, bis ein kompatibles zugehöriges Plugin installiert ist. Aktueller Wert: %s',
];
