<?php

declare(strict_types=1);
    class RMBneoTowerKonfigurator extends IPSModule
    {
        private $Modules = [
            'Read Analog'    => '{1FCD1930-32CB-361E-B695-08781711E7C4}',
            'Read and Write' => '{15CAFB56-AE24-9D62-C65F-FD20E34C3AEE}',
            'Read Digital'   => '{A33DBA25-0169-7260-44EB-C3262BEB5A56}',
        ];

        public function Create()
        {
            //Never delete this line!
            parent::Create();

            $this->RegisterPropertyString('Name', '');
            $this->RegisterPropertyInteger('Interval', 5000);
            $this->RequireParent('{A5F663AB-C400-4FE5-B207-4D67CC030564}');
        }

        public function Destroy()
        {
            //Never delete this line!
            parent::Destroy();
        }

        public function ApplyChanges()
        {
            //Never delete this line!
            parent::ApplyChanges();
            $this->SetReceiveDataFilter('this-will-never-match');
        }

        public function GetConfigurationForm()
        {
            $Form = json_decode(file_get_contents(__DIR__ . '/form.json'), true);
            $Values = [];

            if (floatval(IPS_GetKernelVersion()) < 5.3) {
                return json_encode($Form);
            }
            foreach ($this->Modules as $ModuleName => $ModuleID) {
                $AddValue = [
                    'name'                  => $ModuleName,
                    'instanceID'            => $this->getInstanceID($ModuleID),
                    'create'                => [
                        'moduleID'                => $ModuleID,
                        'location'                => ['RMB neoTower', $this->ReadPropertyString('Name')],
                        'configuration'           => [
                            'Interval'    => $this->ReadPropertyInteger('Interval'),
                        ]
                    ]

                ];
                $Values[] = $AddValue;
            }
            $Form['actions'][0]['values'] = $Values;

            return json_encode($Form);
        }

        public function getInstanceID($moduleID)
        {
            $InstanceIDs = IPS_GetInstanceListByModuleID($moduleID);
            foreach ($InstanceIDs as $ID) {
                if (IPS_GetInstance($ID)['ConnectionID'] === IPS_GetInstance($this->InstanceID)['ConnectionID']) {
                    return $ID;
                } else {
                    return 0;
                }
            }
            return 0;
        }
    }