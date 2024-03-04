<?php

class PokemonBattle
{
    private $poke1, $poke2;

    public function getPoke1()
    {
        return $this->poke1;
    }

    public function setPoke1($poke1)
    {
        $this->poke1 = $poke1;
    }

    public function getPoke2()
    {
        return $this->poke2;
    }

    public function setPoke2($poke2)
    {
        $this->poke2 = $poke2;
    }

    public function __construct($poke1, $poke2)
    {
        $this->poke1 = $poke1;
        $this->poke2 = $poke2;
    }


}