<?php

declare(strict_types=1);

require_once __DIR__ . '/../libs/ModBusBaseModule.php';

    class ReadAnalog extends ModBusBaseModule
    {
        const PREFIX = 'RNTRA';

        public static $Variables = [
            ['Temperatur Puffer T1', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0000, 4, 1,  null, true],
            ['Temperatur Puffer T2 ', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0001, 4, 1,  null, true],
            ['Temperatur Puffer T3', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0002, 4, 1,  null, true],
            ['Temperatur Puffer T4', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0003, 4, 1,  null, true],
            ['Pufferladung', VARIABLETYPE_FLOAT, 'RMBNeoTower.Prozent', 0.1,  0x0004, 4, 1,  null, true],
            ['Temperatur Motor Austritt', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0005, 4, 1,  null, true],
            ['Temperatur Motor Rücklauf', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0006, 4, 1,  null, true],
            ['Temperatur HK T5', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0007, 4, 1,  null, true],
            ['Temperatur Vorlauf Puffer', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0008, 4, 1,  null, true],
            ['Temperatur Rücklauf Puffer', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x0009, 4, 1,  null, true],
            ['Temperatur Motor Öl', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x000A, 4, 1,  null, true],
            ['Temperatur Abgas nach AWT', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x000B, 4, 1,  null, true],
            ['Temperatur Abgas vor AWT', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x000C, 4, 1,  null, true],
            ['Temperatur im Modul', VARIABLETYPE_FLOAT, '~Temperature', 0.1,  0x000D, 4, 1,  null, true],
            ['Wasserdruck Glykol', VARIABLETYPE_FLOAT, 'RMBNeoTower.Druck', 0.1,  0x000E, 4, 1,  null, true],
            ['Aktuelle Leistung', VARIABLETYPE_FLOAT, 'RMBNeoTower.kW', 0.1,  0x000F, 4, 1,  null, true],
            ['Aktuelle Soll Leistung', VARIABLETYPE_FLOAT, 'RMBNeoTower.kW', 0.1,  0x0010, 4, 1,  null, true],
            ['Zählerstand Elektrisch', VARIABLETYPE_FLOAT, '~Electricity', 1,  0x0011, 4, 1,  null, true],
            ['Zählerstand Thermisch Errechnet', VARIABLETYPE_FLOAT, '~Electricity', 1,  0x0013, 4, 1,  null, true],
            ['Zählerstand Gas Vebrauch Errechnet', VARIABLETYPE_FLOAT, '~Electricity', 1,  0x0015, 4, 1,  null, true],
            ['Thermische Leistung', VARIABLETYPE_FLOAT, '~Electricity', 0.1,  0x0017, 4, 1,  null, true],
            ['Aktueller Gebäude Verbrauch', VARIABLETYPE_FLOAT, 'RMBNeoTower.kW', 0.1,  0x0018, 4, 1,  null, true],
            ['Betriebsstunden', VARIABLETYPE_INTEGER, 'RMBNeoTower.Minuten', 1,  0x0019, 4, 1,  null, true],
            ['Betriebsstunden Seit Letztem Start', VARIABLETYPE_INTEGER, 'RMBNeoTower.Minuten', 1,  0x001B, 4, 1,  null, true],
            ['Betrieb mit Reduzierter Leistung Int', VARIABLETYPE_INTEGER, 'RMBNeoTower.Minuten', 1,  0x001D, 4, 1,  null, true],
            ['Betrieb mit Reduzierter Leistung Ext', VARIABLETYPE_INTEGER, 'RMBNeoTower.Minuten', 1,  0x001F, 4, 1,  null, true],
            ['Verfügbar aber nicht Angefordert', VARIABLETYPE_INTEGER, 'RMBNeoTower.Minuten', 1,  0x0021, 4, 1,  null, true],
            ['nicht Verfügbar (Gestört)', VARIABLETYPE_INTEGER, 'RMBNeoTower.Minuten', 1,  0x0023, 4, 1,  null, true],
            ['Stunden bis zur Nächsten Wartung', VARIABLETYPE_INTEGER, 'RMBNeoTower.Stunden', 1,  0x0026, 4, 1,  null, true],
            ['Pumpen Geschwindigkeit P1', VARIABLETYPE_FLOAT, 'RMBNeoTower.Prozent', 0.1,  0x0027, 4, 1,  null, true],
            ['Pumpen Geschwindigkeit P2', VARIABLETYPE_FLOAT, 'RMBNeoTower.Prozent', 0.1,  0x0028, 4, 1,  null, true],
            ['Modulation Level', VARIABLETYPE_FLOAT, 'RMBNeoTower.Prozent', 0.1,  0x000B, 4, 1,  null, true],
            ['Anzahl Starts', VARIABLETYPE_INTEGER, '', 0.1,  0x0029, 4, 1,  null, true],

            //['Active Power Rate', VARIABLETYPE_INTEGER, '~Intensity.100', null,  0x0003, 3, 1,  6, true],
            //['Memory State', VARIABLETYPE_INTEGER, 'Growatt.MemoryState', null,  0x0002, 3, 1,  6, true]
        ];

        public function Destroy()
        {
            //Never delete this line!
            parent::Destroy();
        }
    }