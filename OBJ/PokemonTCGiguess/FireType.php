<?php

class FireType extends Pokemon
{
    protected $weaknesses, $resistances;

    public function __construct($name, $maxHP)
    {
        parent::__construct($name, $maxHP);
        $this->type = "Fire";
        $this->weaknesses = ["Water"];
        $this->resistances = [];
    }

    public function getWeaknesses()
    {
        return $this->weaknesses;
    }

    public function setWeaknesses($weaknesses)
    {
        $this->weaknesses = $weaknesses;
    }

    public function getResistances()
    {
        return $this->resistances;
    }

    public function setResistances($resistances)
    {
        $this->resistances = $resistances;
    }

}