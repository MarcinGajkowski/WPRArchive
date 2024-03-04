<?php

class Pokemon
{
    protected $name, $type, $maxHP, $currentHP, $weaknesses, $resistances, $cardColor;
    private $isConfused, $isParalyzed;

    public function __construct($name, $maxHP)
    {
        $this->name = $name;
        $this->maxHP = $maxHP;
        $this->currentHP = $maxHP;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getMaxHP()
    {
        return $this->maxHP;
    }

    public function setMaxHP($maxHP)
    {
        $this->maxHP = $maxHP;
    }

    public function getCurrentHP()
    {
        return $this->currentHP;
    }

    public function setCurrentHP($currentHP)
    {
        $this->currentHP = $currentHP;
    }

    function attack($poke, $type, $damage)
    {
        if(in_array($type, $poke->weaknesses))
        {
            $damage =+10;
        }
        elseif(in_array($type, $poke->resistances))
        {
            $damage =-30;
        }
        if($damage < 0)
        {
            $damage = 0;
        }
        $poke->currentHP = $poke->currentHP - $damage;
    }

    public function getIsConfused()
    {
        return $this->isConfused;
    }

    public function setIsConfused($isConfused)
    {
        $this->isConfused = $isConfused;
        if($isConfused == true)
        {
            echo "$this->name is confused! It may hurt itself in its confusion!";
        }
        else
        {
            echo "$this->name is no longer confused!";
        }
    }

    public function getIsParalyzed()
    {
        return $this->isParalyzed;
    }

    public function setIsParalyzed($isParalyzed)
    {
        $this->isParalyzed = $isParalyzed;
        if($isParalyzed == true)
        {
            echo "$this->name is paralyzed! It may not be able to attack!";
        }
    }

    function paralysis($poke)
    {
        if($this->getIsParalyzed() == true)
        {
            $para = rand(0, 9);
            if ($para % 2)
            {
                echo "$poke->name is paralyzed! It can't move!";
            }
            else
            {
                //use turn
            }
        }
    }

    function confused($poke)
    {
        $conf = rand(0,9);
        if($conf % 2)
        {
            $this->attack($poke, "Colorless", 30);
        }
        else
        {
            //use turn
        }
    }

    function confusion($poke)
    {
        if($this->getIsConfused() == true)
        {
            $this->confused($poke);
            $this->confused($poke);
            // ??? pomyśleć
            for ($i = 0; $i < 3; $i++)
            {
                $confHeal = rand(1,100);
                if($confHeal % 3)
                {
                    $this->setIsConfused(false);
                    //use turn
                    break;
                }
                else
                {
                    $this->confused($poke);
                }
            }
        }
        $this->setIsConfused(false);
    }

    /*
    $imgName = $dir[1];
    echo "<a href=\"$imgDir/$imgName\" alt=\"$imgName\" />";
    */
}