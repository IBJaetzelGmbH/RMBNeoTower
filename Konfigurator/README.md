# Konfigurator
Über den Konfigurator werden alle erforderlichen Instanzen in IP-Symcon angelegt, welche für die Verbindung mit dem BHKW benötigt werden.

### Inhaltsverzeichnis

- [Konfigurator](#konfigurator)
    - [Inhaltsverzeichnis](#inhaltsverzeichnis)
    - [1. Funktionsumfang](#1-funktionsumfang)
    - [2. Voraussetzungen](#2-voraussetzungen)
    - [3. Software-Installation](#3-software-installation)
    - [4. Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)

### 1. Funktionsumfang

* Anlegen aller erforderlichen Instanzen

### 2. Voraussetzungen

- IP-Symcon ab Version 6.0

### 3. Software-Installation

* Über Ingenieurbüro Jaetzel GmbH

### 4. Einrichten der Instanzen in IP-Symcon

 Unter 'Instanz hinzufügen' kann das 'Konfigurator'-Modul mithilfe des Schnellfilters gefunden werden.  
	- Weitere Informationen zum Hinzufügen von Instanzen in der [Dokumentation der Instanzen](https://www.symcon.de/service/dokumentation/konzepte/instanzen/#Instanz_hinzufügen)

Sobald die Instanz über 'Instanz hinzufügen' ausgewählt und erstellt wurde, wird ein Fenster zur Schnittstellen Konfiguration geöffnet, darüber muss die Schnittstelle zum ModBus eingerichtet werden, die Schnittstelle wird danach dem Konfigurator zugewiesen, sowie allen Instanzen, die über den Konfigurator erstellt werden.

__Konfigurationsseite__:

Name     | Beschreibung
-------- | ------------------
Name     | Der Name wird verwendet, um die Instanzen im Objektbaum einzusortieren.
Aktualisierungsintervall | Dieser Wert gibt in ms an, wie oft die Werte abgefragt werden sollen, der Wert wird beim Anlegen der einzelnen Instanzen übernommen. Als Standard sind hier 5000 ms hinterlegt.
RMB neoTower Konfigurator | Über diese Liste werden die einzelnen Instanzen zum Abrufen / Schreiben der Werte erstellt, die Instanzen werden soweit eingerichtet, dass diese automatisch funktionieren.