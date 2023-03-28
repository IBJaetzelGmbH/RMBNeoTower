<?php

declare(strict_types=1);

require_once __DIR__ . '/../libs/ModBusBaseModule.php';

    class ReadDigital extends ModBusBaseModule
    {
        const PREFIX = 'RD';

        public static $Variables = [
            ['Störung', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0000, 2, 1,  null, true],
            ['Anforderung Spitzenlast', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0001, 2, 1,  null, true],
            ['Kein Gasdruck', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0002, 2, 1,  null, true],
            ['Kein Netz', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0003, 2, 1,  null, true],
            ['EVU Sperre', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0004, 2, 1,  null, true],
            ['BHKW Läuft', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0005, 2, 1,  null, true],
            ['Warnung', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0006, 2, 1,  null, true],
            ['Start Bereit', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0007, 2, 1,  null, true],
            ['Anforderung Entlade Pumpe', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0008, 2, 1,  null, true],
            ['Fehler Generator Schutz', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x0009, 2, 1,  null, true],
            ['Fehler Öldruck', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x000A, 2, 1,  null, true],
            ['Fehler Ölmangel', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x000B, 2, 1,  null, true],
            ['NotAus Gedrückt', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x000C, 2, 1,  null, true],
            ['Fehler Wasserdruck zu Hoch', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x000D, 2, 1,  null, true],
            ['Fehler Wasserdruck zu niedrig', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x000E, 2, 1,  null, true],
            ['Fehler Übertemperatur Motor', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x000F, 2, 1,  null, true],
            ['Fehler Übertemperatur Motor Öl', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0010, 2, 1,  null, true],
            ['Fehler Übertemperatur Generator', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0011, 2, 1,  null, true],
            ['Fehler Übertemperatur Abgas n. AWT', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0012, 2, 1,  null, true],
            ['Fehler Übertemperatur Abgas v. AWT', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0013, 2, 1,  null, true],
            ['Fehler Übertemperatur Kabine', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0014, 2, 1,  null, true],
            ['Fehler STB Ausgelöst', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0015, 2, 1,  null, true],
            ['Fehler Brennstoff Motorproblem', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0016, 2, 1,  null, true],
            ['Fehler Motor Springt nicht An', VARIABLETYPE_BOOLEAN, '~Alert', null,  0x0017, 2, 1,  null, true],

            //['Active Power Rate', VARIABLETYPE_INTEGER, '~Intensity.100', null,  0x0003, 3, 1,  6, true],
            //['Memory State', VARIABLETYPE_INTEGER, 'Growatt.MemoryState', null,  0x0002, 3, 1,  6, true]
        ];

        public function Destroy()
        {
            //Never delete this line!
            parent::Destroy();
        }
    }