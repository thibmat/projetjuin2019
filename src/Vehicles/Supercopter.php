<?php
namespace src\Vehicles;
class Supercopter extends AbstractFlyingVehicle
{
    public function __construct(string $name, string $fuel, ?int $kms = 0, ?int $nbWings = 0)
    {
        parent::__construct($name, $fuel, $nbWings, $kms);
    }

    public function makeNoise(): string
    {
        return 'tadatada tadatada tadatada tadatada';
    }
}