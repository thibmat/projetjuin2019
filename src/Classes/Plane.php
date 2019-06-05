<?php


class Plane extends Vehicle
{
    private $maxAlt;

    /**
     * @return mixed
     */
    public function getMaxAlt()
    {
        return $this->maxAlt;
    }

    /**
     * @param mixed $maxAlt
     */
    public function setMaxAlt($maxAlt): void
    {
        $this->maxAlt = $maxAlt;
    }


}