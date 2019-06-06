<?php
namespace src\Vehicles;

class Boat extends AbstractVehicle
{
    private $ports;

    /**
     * @return mixed
     */
    public function getPorts():string
    {
        return implode(",",$this->ports);
    }

    /**
     * @param mixed $ports
     */
    public function setPorts(array $ports): void
    {
        $this->ports = $ports;
    }
    public function addPorts(string $port): void
    {
        array_push($this->ports,$port);
    }
    public function removePorts(string $ports): void
    {
        unset($this->ports[array_search($ports, $this->ports)]);
    }

    public function move(int $km):void
    {
        $this->kilometers += $km;
        echo 'glouglouglou';
    }
    public function __construct(string $brand, string $motor, array $ports)
    {
        parent::__construct($brand, $motor, 0);
        $this->ports = $ports;
    }
}