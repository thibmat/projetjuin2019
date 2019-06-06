<?php
namespace src\Vehicles;
class Car extends AbstractRollingVehicle
{
    use Energizer;

    public function __construct(string $name, string $fuel, ?int $kms = 0, ?int $nbWheels = 4)
    {
        parent::__construct($name, $fuel, $nbWheels, $kms);
    }

    public function move(int $km): void
    {
        parent::move($km);
        $this->consumeEnergy($km);
        echo "<br>Il me reste {$this->getEnergy()} % d'energie";
    }

    public function makeNoise(): string
    {
        return 'Vrouuuuuuum vrouuum';
    }
}