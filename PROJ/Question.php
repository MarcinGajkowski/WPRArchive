<?php

class Question
{
    private $id, $mainDeal, $answerA, $answerB, $answerC, $answerD, $correct, $incorrect1, $incorrect2, $incorrect3, $link;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getMainDeal()
    {
        return $this->mainDeal;
    }

    public function setMainDeal($value)
    {
        $this->mainDeal = $value;
    }

    public function getAnswerA()
    {
        return $this->answerA;
    }

    public function setAnswerA($value)
    {
        $this->answerA = $value;
    }

    public function getAnswerB()
    {
        return $this->answerB;
    }

    public function setAnswerB($value)
    {
        $this->answerB = $value;
    }

    public function getAnswerC()
    {
        return $this->answerC;
    }

    public function setAnswerC($value)
    {
        $this->answerC = $value;
    }

    public function getAnswerD()
    {
        return $this->answerD;
    }

    public function setAnswerD($value)
    {
        $this->answerD = $value;
    }

    public function getCorrect()
    {
        return $this->correct;
    }

    public function setCorrect($value)
    {
        $this->correct = $value;
    }

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($value)
    {
        $this->link = $value;
    }

    public function getIncorrect1()
    {
        return $this->incorrect1;
    }

    public function setIncorrect1($incorrect1)
    {
        $this->incorrect1 = $incorrect1;
    }

    public function getIncorrect2()
    {
        return $this->incorrect2;
    }

    public function setIncorrect2($incorrect2)
    {
        $this->incorrect2 = $incorrect2;
    }

    public function getIncorrect3()
    {
        return $this->incorrect3;
    }

    public function setIncorrect3($incorrect3)
    {
        $this->incorrect3 = $incorrect3;
    }

    public function __construct($id, $mainDeal, $answerA, $answerB, $answerC, $answerD, $correct, $incorrect1, $incorrect2, $incorrect3, $link)
        // try out $incorrect1, $incorrect2, $incorrect3
    {
        $this->id = $id;
        $this->mainDeal = $mainDeal;
        $this->answerA = $answerA;
        $this->answerB = $answerB;
        $this->answerC = $answerC;
        $this->answerD = $answerD;
        $this->correct = $correct;
        $this->incorrect1 = $incorrect1;
        $this->incorrect2 = $incorrect2;
        $this->incorrect3 = $incorrect3;
        $this->link = $link;
    }
}