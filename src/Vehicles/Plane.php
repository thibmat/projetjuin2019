<?php
namespace src\Vehicles;
class Plane extends AbstractFlyingVehicle
{
    public function __construct(string $name, string $fuel, ?int $kms = 0, ?int $nbWings = 2)
    {
        parent::__construct($name, $fuel, $nbWings, $kms);
    }

    public function makeNoise(): string
    {
        return 'SHHH SHHH';
    }
}