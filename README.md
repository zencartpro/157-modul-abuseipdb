# 157-modul-abuseipdb
AbuseIPDB für Zen Cart 1.5.7 deutsch

## Hinweis: 
Freigegebene getestete Versionen für den Einsatz in Livesystemen ausschließlich unter Releases herunterladen:
* https://github.com/zencartpro/157-modul-abuseipdb/releases

## Sinn und Zweck:
* AbuseIPDB ist ein Projekt, das von Marathon Studios Inc. in den USA verwaltet wird. Ziel ist es, das Internet sicherer zu machen, indem ein zentrales Repository für Webmaster, Systemadministratoren und andere interessierte Parteien bereitgestellt wird, um IP-Adressen zu melden und zu identifizieren, die mit bösartigen Online-Aktivitäten in Verbindung gebracht wurden.
* Infos zu diesem Projekt auf:
* https://www.abuseipdb.com
* Dieses Modul integriert AbuseIPDB in die deutsche Zen Cart Version, um Ihren Onlineshop vor missbräuchlichen IP-Adressen zu schützen. 
* Es prüft die Vertrauenswürdigkeit der IP-Adresse eines Besuchers mithilfe der AbuseIPDB-API und blockiert den Zugriff auf die Website, wenn der Wert einen vordefinierten Schwellenwert überschreitet. Das Modul unterstützt auch die Zwischenspeicherung, um die Anzahl der API-Aufrufe zu reduzieren, einen Testmodus für die Fehlersuche und die Protokollierung zur Überwachung blockierter IPs. Darüber hinaus ermöglicht es das manuelle Whitelisting und Blacklisting von IP-Adressen, um Ihnen eine bessere Kontrolle über den Zugriff auf Ihre Website zu ermöglichen.

## Voraussetzungen:
* Freigeschalteter AbuseIPDB Account
* Konfiguration des erforderlichen API Keys im AbuseIPDB Account
* Zen Cart 1.5.7i deutsche Version
* PHP mindestens 8.0x, empfohlen 8.3.x

## Features:
* API-Schlüssel: Das Skript benötigt einen gültigen API-Schlüssel von AbuseIPDB, um den Missbrauchs-Confidence-Score einer IP-Adresse zu prüfen. Stellen Sie sicher, dass ein gültiger API-Schlüssel verfügbar und in der Einstellung "AbuseIPDB API Key" im Zen Cart-Administrationsbereich korrekt konfiguriert ist.
* Cache-Ablauf: Das Skript überprüft den Datenbank-Cache, um übermäßige API-Aufrufe zu vermeiden. Wenn der Cache für eine bestimmte IP-Adresse abgelaufen ist, führt das Skript einen neuen API-Aufruf durch.
* Testmodus: Das Skript bietet einen Testmodus für die Fehlersuche. Wenn sich eine IP im Testmodus befindet, protokolliert das Skript die IP unabhängig von der Missbrauchsbewertung als gesperrt.
* IP-Bereinigungsfunktion: Das Modul verfügt über eine IP-Cleanup-Funktion, die abgelaufene IP-Datensätze automatisch löscht. Der Bereinigungsprozess wird einmal pro Tag durch die erste protokollierte IP ausgelöst. Diese Funktion kann aktiviert oder deaktiviert werden, und die Verfallszeit der IP-Datensätze kann in den Einstellungen "Intervall für Löschung" konfiguriert werden.
* Manuelles Whitelisting und Blacklisting: Das Skript prüft, ob eine IP manuell auf eine Whitelist oder Blacklist gesetzt wurde, bevor es etwas anderes tut. Manuell auf die Whitelist gesetzte IPs umgehen die AbuseIPDB-Prüfung, und manuell auf die Blacklist gesetzte IPs werden sofort gesperrt. Geben Sie die IP-Adressen durch Kommas getrennt und ohne Leerzeichen ein, etwa so: 192.168.1.1,192.168.2.2,192.168.3.3
* Zusätzliche IP-Blacklist-Datei Option: Das Modul bietet eine erweiterte IP-Blacklist-Funktion. Administratoren können diese Funktion über die Einstellung "Textdatei für IP Blacklist aktivieren?" in den Moduleinstellungen aktivieren oder deaktivieren. Sobald diese Funktion aktiviert ist, prüft das Modul eine bestimmte Blacklist-Datei für jede eingehende IP-Adresse. Die Blacklist-Datei sollte eine vollständige oder teilweise IP-Adresse pro Zeile auflisten. Bei einer Übereinstimmung wird die entsprechende IP-Adresse sofort blockiert, wobei alle anderen Prüfungen oder Bewertungsmethoden umgangen werden. Mit dieser Funktion haben Administratoren eine bessere Kontrolle über die Sperrung bestimmter IP-Adressen, indem sie vollständige oder teilweise Übereinstimmungen aus der Blacklist-Datei verwenden. 
* Protokollierung: Wenn die Protokollierung aktiviert ist, werden Protokolldateien erstellt, wenn eine IP-Adresse gesperrt wird, entweder manuell oder auf der Grundlage des AbuseIPDB-Scores. Wenn die API-Protokollierung aktiviert ist, wird auch für API-Aufrufe eine separate Protokolldatei erstellt. Der Speicherort dieser Protokolldateien kann über die Einstellung "Logfile Pfad" im Zen Cart-Administrationsbereich konfiguriert werden.
* Überspringen der IP-Prüfung für bekannte Spider: Wenn die Einstellung "Spider erlauben" aktiviert ist, werden bekannte Spider bei der IP-Prüfung und Protokollierung übersprungen, da sie nicht der AbuseIPDB-Bewertung unterliegen. Dies kann nützlich sein, um unnötige API-Aufrufe und Protokolleinträge für Spider-Sitzungen zu vermeiden.
* Spider-Erkennung: Das Skript verwendet eine von Zen Cart bereitgestellte Datei namens spiders.txt, um bekannte Spider, einschließlich Suchmaschinen-Bots und Web-Crawler, zu identifizieren. Es liest den User Agent aus der HTTP-Anfrage und vergleicht ihn mit den Einträgen in der Datei spiders.txt. Wenn eine Übereinstimmung gefunden wird, die anzeigt, dass der Benutzer-Agent einem bekannten Spider entspricht, wird das Spider-Flag auf true gesetzt. Dieses Flag bestimmt das Verhalten des Skripts und ermöglicht es ihm, bestimmte Prüfungen zu umgehen oder bestimmte, auf Spider-Sitzungen zugeschnittene Aktionen auszuführen. 

## Credits:
* Dieses Modul ist eine Übersetzung und Anpassung des amerikanischen AbuseIPDB Moduls von marcopolo für die deutsche Zen Cart Version
* Grundlage war das entsprechende Github Repository:
* https://github.com/CcMarc/AbuseIPDB

## Änderungen gegenüber dem Originalmodul:
* Deutsche Sprachfiles, deutsche Konfiguration und deutsche Anleitung hinzugefügt
* Installer auf Standard Modul Installer der deutschen Zen Cart Version umgestellt
* unnötige Dateien entfernt 

## Installation und Konfiguration
Umfangreiche Anleitung und Dokumentation auf:
* https://abuseipdb.zen-cart-pro.at
