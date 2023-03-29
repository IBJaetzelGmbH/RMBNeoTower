# Read And Write
Das Modul Read and Write listet alle ModBus Register als Variablen mit den dazugehörigen Profilen in IP-Symcon auf und übernimmt die Umrechnung nach dem gegebenem Faktor aus der Doku.
Ebenfalls können die Register über diese Instanz beschrieben werden.

### Inhaltsverzeichnis

- [Read And Write](#read-and-write)
    - [Inhaltsverzeichnis](#inhaltsverzeichnis)
    - [1. Funktionsumfang](#1-funktionsumfang)
    - [2. Voraussetzungen](#2-voraussetzungen)
    - [3. Software-Installation](#3-software-installation)
    - [4. Einrichten der Instanzen in IP-Symcon](#4-einrichten-der-instanzen-in-ip-symcon)
    - [5. PHP-Befehlsreferenz](#5-php-befehlsreferenz)

### 1. Funktionsumfang

* Auflistung aller Variablen in IP-Symcon
* Berechnung gemäß des Faktor´s laut Doku.
* Beschreiben der Register über IP-Symcon

### 2. Voraussetzungen

- IP-Symcon ab Version 6.0

### 3. Software-Installation

* Über Ingenieurbüro Jaetzel GmbH

### 4. Einrichten der Instanzen in IP-Symcon

Die Einrichtung der Instanz wird über den Konfigurator vorgenommen.

__Konfigurationsseite__:

Name     | Beschreibung
-------- | ------------------
Aktualisierungsintervall | Dieser Wert gibt in ms an, wie oft die Werte abgefragt werden sollen.
Liste | Innerhalb der Liste können die unterschiedlichen Werte aktiv bzw. inaktiv geschaltet werden.


### 5. PHP-Befehlsreferenz

`RNTRD_RequestRead(integer $InstanzID);`
Ruft die aktuellen Werte vom Bus ab.

Beispiel:
`RNTRD_RequestRead(12345);`