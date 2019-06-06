<?php
namespace src\Vehicles;


abstract class AbstractFlyingVehicle extends AbstractVehicle
{
    /**
     * @var int
     */
    protected $nbWings;

    /**
     * FlyingVehicle constructor.
     * @param string $name
     * @param string $fuel
     * @param int $nbWheels
     * @param int|null $kms
     */
    public function __construct(string $name, string $fuel, int $nbWings, ?int $kms = 0)
    {
        parent::__construct($name, $fuel, $kms);
        $this->nbWings = $nbWings;
    }

    public function move(int $km): void
    {
        $this->kms += $km;
        echo "<p>{$this->name} : Je vole $km kilomètres dans les airs</p>";
        echo "<p>{$this->makeNoise()}</p>";
    }

    /**
     * @return int
     */
    public function getNbWings(): int
    {
        return $this->nbWings;
    }

    /**
     * @param int $nbWheels
     */
    public function setNbWings(int $nbWings): void
    {
        $this->nbWings = $nbWings;
    }
}
