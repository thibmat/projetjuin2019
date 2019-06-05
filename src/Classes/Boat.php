<?php


class Boat extends vehicle
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

    public function go(int $km):void
    {
        $this->kilometers += $km;
        echo 'glouglouglou';
    }
}