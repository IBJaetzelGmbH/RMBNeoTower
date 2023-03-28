<?php

declare(strict_types=1);

require_once __DIR__ . '/../libs/ModBusBaseModule.php';

    class RMBneoTowerReadandWrite extends ModBusBaseModule
    {
        const PREFIX = 'RNTRW';

        public static $Variables = [

            ['Elektrische Soll Leistung', VARIABLETYPE_FLOAT, 'RMBNeoTower.kW', 0.1,  0x6000,  6, 1, 6,  true],
            ['Anforderung Entladepumpe', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x400, 5, 1, 5,  true],
            ['Start Stopp Extern', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x4001, 5, 1, 5,  true],
            ['Sperre', VARIABLETYPE_BOOLEAN, '~Switch', null,  0x4002, 5, 1, 5,  true],
        ];

        public function Destroy()
        {
            //Never delete this line!
            parent::Destroy();
        }
    }