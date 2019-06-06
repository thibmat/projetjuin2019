<?php
namespace src\Vehicles;
trait Energizer {

    private $energy;


    /**
     * Recharge l'energy à 100%
     */
    public function fillMax():void
    {
        $this->energy = 100;
    }

    /**
     * Consomme de l'energy au cours du vol
     * @param $energy
     */
    public function consumeEnergy(int $energy):void
    {
        $this->energy -= $energy;
    }

    /**
     * @return mixed
     */
    public function getEnergy()
    {
        return $this->energy;
    }

    /**
     * @param mixed $energy
     */
    public function setEnergy($energy): void
    {
        $this->energy = $energy;
    }


}