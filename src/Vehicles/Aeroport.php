<?php
namespace src\Vehicles;
class Aeroport
{
    /**
     * @var VehicleInterface[]
     */
    private $vehicles;

    public function __construct()
    {
        $this->vehicles = [];
    }
    /**
     * @return VehicleInterface[]
     */
    public function getVehicles(): array
    {
        return $this->vehicles;
    }

    /**
     * @param VehicleInterface[] $vehicles
     */
    public function setVehicles(array $vehicles): void
    {
        $this->vehicles = $vehicles;
    }

    /**
     * On ajoute un véhicule dans l'aéroport
     * On peut utiliser la méthode "mov" grâce au typage
     * @param VehicleInterface $vehicle
     */
    public function addVehicle(VehicleInterface $vehicle)
    {
        $vehicle->move(15);
        $this->vehicles[] = $vehicle;
    }
}