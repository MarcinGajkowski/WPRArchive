<?php

class Samochod
{
    private $id, $marka, $model, $rok, $cena, $pojemnosc, $link;

    public function getID()
    {
        RETURN $this->id;
    }
    public function setID($value)
    {
        $this->id = $value;
    }
    public function getMarka()
    {
        RETURN $this->marka;
    }
    public function setMarka($value)
    {
        $this->marka = $value;
    }
    public function getModel()
    {
        RETURN $this->model;
    }
    public function setModel($value)
    {
        $this->model = $value;
    }
    public function getRok()
    {
        RETURN $this->rok;
    }
    public function setRok($value)
    {
        $this->rok = $value;
    }
    public function getCena()
    {
        RETURN $this->cena;
    }
    public function setCena($value)
    {
        $this->cena = $value;
    }
    public function getPojemnosc()
    {
        RETURN $this->pojemnosc;
    }
    public function setPojemnosc($value)
    {
        $this->pojemnosc = $value;
    }
    public function getLink()
    {
        RETURN $this->link;
    }
    public function setLink($value)
    {
        $this->link = $value;
    }

    function __construct($id, $marka, $model, $rok, $cena, $pojemnosc, $link)
    {
        $this->id = $id;
        $this->marka = $marka;
        $this->model = $model;
        $this->rok = $rok;
        $this->cena = $cena;
        $this->pojemnosc = $pojemnosc;
        $this->link = $link;
    }
}